<?php

return array(
    'about_licenses_title'      => 'A licencekről',
    'about_licenses'            => 'Az engedélyeket a szoftverek nyomon követésére használják. Meghatározott számú ülőhellyel rendelkeznek, melyeket az egyéneknek lehet ellenőrizni',
    'checkin'  					=> 'Bevét engedély Seat',
    'checkout_history'  		=> 'Visszavét előzmények',
    'checkout'  				=> 'Kiadás Licence ülés/kérelem',
    'edit'  					=> 'Engedély szerkesztése',
    'filetype_info'				=> 'Az engedélyezett fájltípusok png, gif, jpg, jpeg, doc, docx, pdf, txt, zip és rar.',
    'clone'  					=> 'Clone License',
    'history_for'  				=> 'A történelem',
    'in_out'  					=> 'Be ki',
    'info'  					=> 'Licensz információ',
    'license_seats'  			=> 'Licenc ülések',
    'seat'  					=> 'Ülés',
    'seats'  					=> 'ülések',
    'software_licenses'  		=> 'Szoftverlicencek',
    'user'  					=> 'használó',
    'view'  					=> 'Licenc megtekintése',
    'delete_disabled'           => 'This license cannot be deleted yet because some seats are still checked out.',
    'bulk'                      =>
        [
            'checkin_all'           => [
                'button'            => 'Checkin All Seats',
                'modal'             => 'This will action checkin one seat. | This action will checkin all :checkedout_seats_count seats for this license.',
                'enabled_tooltip'   => 'Checkin ALL seats for this license from both users and assets',
                'disabled_tooltip'  => 'This is disabled because there are no seats currently checked out',
                'disabled_tooltip_reassignable'  => 'This is disabled because the License is not reassignable',
                'success'           => 'License successfully checked in! | All licenses were successfully checked in!',
                'log_msg'           => 'Checked in via bulk license checkout in license GUI',
            ],

            'checkout_all'              => [
                'button'                => 'Checkout All Seats',
                'modal'                 => 'This action will checkout one seat to the first available user. | This action will checkout all :available_seats_count seats to the first available users. A user is considered available for this seat if they do not already have this license checked out to them, and the Auto-Assign License property is enabled on their user account.',
                'enabled_tooltip'   => 'Checkout ALL seats (or as many as are available) to ALL users',
                'disabled_tooltip'  => 'This is disabled because there are no seats currently available',
                'success'           => 'License successfully checked out! | :count licenses were successfully checked out!',
                'error_no_seats'    => 'There are no remaining seats left for this license.',
                'warn_not_enough_seats'    => ':count users were assigned this license, but we ran out of available license seats.',
                'warn_no_avail_users'    => 'Nothing to do. There are no users who do not already have this license assigned to them.',
                'log_msg'           => 'Checked out via bulk license checkout in license GUI',


            ],
    ],
);
