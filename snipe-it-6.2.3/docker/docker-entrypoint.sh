#!/bin/sh

set -eo pipefail;

# Cribbed from nextcloud docker official repo
# https://github.com/nextcloud/docker/blob/master/docker-entrypoint.sh
# usage: file_env VAR [DEFAULT]
#    ie: file_env 'XYZ_DB_PASSWORD' 'example'
# (will allow for "$XYZ_DB_PASSWORD_FILE" to fill in the value of
#  "$XYZ_DB_PASSWORD" from a file, especially for Docker's secrets feature)
file_env() {
    local var="$1"
    local fileVar="${var}_FILE"
    local def="${2:-}"
    local varValue=$(env | grep -E "^${var}=" | sed -E -e "s/^${var}=//")
    local fileVarValue=$(env | grep -E "^${fileVar}=" | sed -E -e "s/^${fileVar}=//")
    if [ -n "${varValue}" ] && [ -n "${fileVarValue}" ]; then
        echo >&2 "error: both $var and $fileVar are set (but are exclusive)"
        exit 1
    fi
    if [ -n "${varValue}" ]; then
        export "$var"="${varValue}"
    elif [ -n "${fileVarValue}" ]; then
        export "$var"="$(cat "${fileVarValue}")"
    elif [ -n "${def}" ]; then
        export "$var"="$def"
    fi
    unset "$fileVar"
}

# Add docker secrets support for the variables below:
file_env APP_KEY
file_env DB_HOST
file_env DB_PORT
file_env DB_DATABASE
file_env DB_USERNAME
file_env DB_PASSWORD
file_env REDIS_HOST
file_env REDIS_PASSWORD
file_env REDIS_PORT
file_env MAIL_HOST
file_env MAIL_PORT
file_env MAIL_USERNAME
file_env MAIL_PASSWORD

echo [INFO docker entrypoint] Start script execution

# Generate new app key if none is provided
if [ -z "$APP_KEY" -a -z "$APP_KEY_FILE" ]
then
  echo "Please re-run this container with an environment variable \$APP_KEY"
  echo "An example APP_KEY you could use is: "
  php artisan key:generate --show
  exit
fi

# Directory configuration
rm -rf \
  "/var/www/html/storage/private_uploads" \
  "/var/www/html/public/uploads" \
  "/var/www/html/storage/app/backups"

# Create data directories
for dir in \
  'data/private_uploads' \
  'data/uploads/accessories' \
  'data/uploads/avatars' \
  'data/uploads/barcodes' \
  'data/uploads/categories' \
  'data/uploads/companies' \
  'data/uploads/components' \
  'data/uploads/consumables' \
  'data/uploads/departments' \
  'data/uploads/locations' \
  'data/uploads/manufacturers' \
  'data/uploads/models' \
  'data/uploads/suppliers' \
  'dumps' \
  'keys'
do
  [ ! -d "/var/lib/snipeit/$dir" ] && mkdir -p "/var/lib/snipeit/$dir"
done

# Sync /var/lib/snipeit (docker volume) with /var/www/html directory
ln -fs \
  "/var/lib/snipeit/data/private_uploads" "/var/www/html/storage/private_uploads"
ln -fs \
  "/var/lib/snipeit/data/uploads" "/var/www/html/public/uploads"
ln -fs \
  "/var/lib/snipeit/dumps" "/var/www/html/storage/app/backups"
ln -fs \
  "/var/lib/snipeit/keys/oauth-public.key" "/var/www/html/storage/oauth-public.key"
ln -fs \
  "/var/lib/snipeit/keys/oauth-private.key" "/var/www/html/storage/oauth-private.key"

# If the Oauth DB files are not present copy the vendor files over to the db migrations
if [ ! -f "/var/www/html/database/migrations/*create_oauth*" ]
then
  cp -a /var/www/html/vendor/laravel/passport/database/migrations/* /var/www/html/database/migrations/
fi

# Create laravel log file
touch /var/www/html/storage/logs/laravel.log
# Add correct permissions for files and directories
chown www-data:www-data /var/www/html/storage/logs/laravel.log
chown -R www-data:www-data \
  /var/lib/snipeit/data \
  /var/lib/snipeit/dumps \
  /var/lib/snipeit/keys

# Migrate/create database
php artisan migrate --force
# Clear cache files
php artisan config:clear
php artisan config:cache

echo [INFO docker entrypoint] End script execution

exec "$@" 