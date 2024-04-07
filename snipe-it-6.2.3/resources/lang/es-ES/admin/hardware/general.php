<?php

return [
    'about_assets_title'           => 'Acerca de Activos',
    'about_assets_text'            => 'Los activos son elementos con número de serie o etiqueta de activos.  Tienden a ser artículos de alto valor donde es importante identificar un elemento específico.',
    'archived'  				=> 'Archivado',
    'asset'  					=> 'Equipo',
    'bulk_checkout'             => 'Activos Asignados',
    'bulk_checkin'              => 'Quitar Equipo',
    'checkin'  					=> 'Quitar Equipo',
    'checkout'  				=> 'Activo de pago',
    'clone'  					=> 'Clonar Equipo',
    'deployable'  				=> 'Desplegable',
    'deleted'  					=> 'Este activo fue eliminado.',
    'delete_confirm'            => 'Are you sure you want to delete this asset?',
    'edit'  					=> 'Editar Equipo',
    'model_deleted'  			=> 'Este Modelo de activo fue eliminado. Debes restaurar este modelo antes de poder restaurar el Activo.',
    'model_invalid'             => 'El modelo de este activo no es válido.',
    'model_invalid_fix'         => 'El Activo debe ser editado para corregir esto antes de intentar retirarlo o asignarlo.',
    'requestable'               => 'Requerible',
    'requested'				    => 'Solicitado',
    'not_requestable'           => 'No solicitable',
    'requestable_status_warning' => 'No cambiar el estado solicitable',
    'restore'  					=> 'Restaurar equipo',
    'pending'  					=> 'Pendiente',
    'undeployable'  			=> 'No desplegable',
    'undeployable_tooltip'  	=> 'Este activo tiene una etiqueta de estado que no es desplegable y no puede ser revisado en este momento.',
    'view'  					=> 'Ver Equipo',
    'csv_error' => 'Tiene un error en su archivo CSV:',
    'import_text' => '
    <p>
    Sube un CSV que contenga historial de activos. Los activos y los usuarios DEBEN existir en el sistema, o se omitirán. Los activos coincidentes para importar el historial ocurren contra la etiqueta de activos. Intentaremos encontrar un usuario que coincida con el nombre del usuario que proporciones, y los criterios que seleccionas a continuación. Si no selecciona ningún criterio a continuación, simplemente tratará de coincidir con el formato de nombre de usuario que configuraste en el Administrador &gt; Configuración General.
    </p>

    <p>Los campos incluidos en el CSV deben coincidir con los encabezados: <strong>Etiqueta de activos, Nombre, Fecha de salida, Fecha de comprobación</strong>. Cualquier campo adicional será ignorado. </p>

    <p>Fecha de Checkin: las fechas de check-in en blanco o futuro comprobarán los elementos al usuario asociado. Excluyendo la columna Fecha de Checkin creará una fecha de check-in con la fecha de hoy.</p>
    ',
    'csv_import_match_f-l' => 'Intentar coincidir con los usuarios por el formato firstname.lastname (jane.smith)',
    'csv_import_match_initial_last' => 'Intentar coincidir los usuarios con el primer apellido inicial (jsmith) formato',
    'csv_import_match_first' => 'Intentar coincidir con los usuarios por nombre de usuario (jane) formato',
    'csv_import_match_email' => 'Intentar coincidir con los usuarios por correo electrónico como nombre de usuario',
    'csv_import_match_username' => 'Intentar coincidir con los usuarios por correo electrónico como nombre de usuario',
    'error_messages' => 'Mensajes de error:',
    'success_messages' => 'Mensajes de éxito:',
    'alert_details' => 'Por favor vea abajo para más detalles.',
    'custom_export' => 'Personalizar exportación',
    'mfg_warranty_lookup' => 'Búsqueda del estado de Garantía para :manufacturer',
    'user_department' => 'User Department',
];
