<?php

return array(
    'about_licenses_title'      => 'Over licenties',
    'about_licenses'            => 'Licenties worden gebruikt om software te beheren. Deze hebben een maximum aantal wat aan gebruikers uitgeleverd kan worden',
    'checkin'  					=> 'Check werkplek licentie in',
    'checkout_history'  		=> 'Checkout historie',
    'checkout'  				=> 'Check werkplek licentie uit',
    'edit'  					=> 'Wijzig licentie',
    'filetype_info'				=> 'Toegestane bestandstypes zijn png, gif, jpg, jpeg, doc, docx, pdf, txt, zip, and rar.',
    'clone'  					=> 'Dupliceer licentie',
    'history_for'  				=> 'Geschiedenis van ',
    'in_out'  					=> 'In/Uit',
    'info'  					=> 'Licentiegegevens',
    'license_seats'  			=> 'Licentie werkplekken',
    'seat'  					=> 'Werkplek',
    'seats'  					=> 'Werkplekken',
    'software_licenses'  		=> 'Applicatie Licenties',
    'user'  					=> 'Gebruiker',
    'view'  					=> 'Bekijk licentie',
    'delete_disabled'           => 'Deze licentie kan nog niet worden verwijderd omdat deze nog is uitgecheckt.',
    'bulk'                      =>
        [
            'checkin_all'           => [
                'button'            => 'Alle licenties inchecken',
                'modal'             => 'This will action checkin one seat. | This action will checkin all :checkedout_seats_count seats for this license.',
                'enabled_tooltip'   => 'Checkin ALL seats for this license from both users and assets',
                'disabled_tooltip'  => 'Dit is uitgeschakeld omdat er nog niets is uitgecheckt',
                'disabled_tooltip_reassignable'  => 'Dit is uitgeschakeld omdat de licentie niet opnieuw toegewezen kan worden',
                'success'           => 'Licentie met succes ingecheckt! | Alle licenties zijn met succes ingecheckt!',
                'log_msg'           => 'Checked in via bulk license checkout in license GUI',
            ],

            'checkout_all'              => [
                'button'                => 'Alle licenties uitchecken',
                'modal'                 => 'This action will checkout one seat to the first available user. | This action will checkout all :available_seats_count seats to the first available users. A user is considered available for this seat if they do not already have this license checked out to them, and the Auto-Assign License property is enabled on their user account.',
                'enabled_tooltip'   => 'Checkout ALL seats (or as many as are available) to ALL users',
                'disabled_tooltip'  => 'Dit is uitgeschakeld omdat er momenteel geen plaatsen beschikbaar zijn',
                'success'           => 'License successfully checked out! | :count licenses were successfully checked out!',
                'error_no_seats'    => 'There are no remaining seats left for this license.',
                'warn_not_enough_seats'    => ':count users were assigned this license, but we ran out of available license seats.',
                'warn_no_avail_users'    => 'Nothing to do. There are no users who do not already have this license assigned to them.',
                'log_msg'           => 'Checked out via bulk license checkout in license GUI',


            ],
    ],
);
