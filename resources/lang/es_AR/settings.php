<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Ajustes',
    'settings_save' => 'Guardar ajustes',
    'settings_save_success' => 'Ajustes guardados',
    'system_version' => 'Versión del Sistema',
    'categories' => 'Categorías',

    // App Settings
    'app_customization' => 'Personalización',
    'app_features_security' => 'Características y Seguridad',
    'app_name' => 'Nombre de aplicación',
    'app_name_desc' => 'Este nombre se muestra en la cabecera y en cualquier correo electrónico de la aplicación',
    'app_name_header' => '¿Mostrar el nombre de la aplicación en la cabecera?',
    'app_public_access' => 'Acceso Público',
    'app_public_access_desc' => 'Habilitar esta opción permitirá a los visitantes, que no estén autenticados, acceder al contenido en la instancia de BookStack.',
    'app_public_access_desc_guest' => 'El acceso de visitantes públicos se puede controlar mediante el usuario "Guest/Invitado".',
    'app_public_access_toggle' => 'Permitir el acceso público',
    'app_public_viewing' => '¿Permitir vista pública?',
    'app_secure_images' => '¿Habilitar mayor seguridad para subir imágenes?',
    'app_secure_images_toggle' => 'Habilitar seguridad alta para subir imágenes',
    'app_secure_images_desc' => 'Por razones de rendimiento, todas las imágenes son públicas. Esta opción agrega una cadena larga difícil de adivinar, asegúrese que los índices de directorios no están habilitados para prevenir el acceso fácil a las imágenes.',
    'app_default_editor' => 'Editor de Página por defecto',
    'app_default_editor_desc' => 'Seleccione qué editor se utilizará por defecto cuando se editen nuevas páginas. Esta acción se puede anular al nivel de página si los permisos lo permiten.',
    'app_custom_html' => 'Contenido de cabecera HTML personalizable',
    'app_custom_html_desc' => 'Cualquier contenido agregado aquí será agregado al final de la sección <head> de cada página. Esto es útil para sobreescribir estilos o agregar código para analíticas.',
    'app_custom_html_disabled_notice' => 'El contenido personailzado para la cabecera HTML está deshabilitado en esta configuración para garantizar que cualquier cambio importante se pueda revertir.',
    'app_logo' => 'Logo de la aplicación',
    'app_logo_desc' => 'Esta imagen debería ser de 43px en altura. <br>Las imágenes grandes serán achicadas.',
    'app_primary_color' => 'Color primario de la aplicación',
    'app_primary_color_desc' => 'Esto debería ser un valor hexadecimal. <br>Deje el valor vacío para reiniciar al valor por defecto.',
    'app_homepage' => 'Página de inicio de la Aplicación',
    'app_homepage_desc' => 'Seleccione una página de inicio para mostrar en lugar de la vista por defecto. Se ignoran los permisos de página para las páginas seleccionadas.',
    'app_homepage_select' => 'Seleccione una página',
    'app_footer_links' => 'Enlaces de pie de página',
    'app_footer_links_desc' => 'Añade enlaces para mostrar dentro del pie de página del sitio. Estos se mostrarán en la parte inferior de la mayoría de las páginas, incluyendo aquellas que no requieren estar registrado. Puede utilizar una etiqueta de "trans::<key>" para utilizar traducciones definidas por el sistema. Por ejemplo: el uso de "trans::common.privacy_policy" proporcionará el texto traducido "Política de privacidad" y "trans::common.terms_of_service" proporcionará el texto traducido "Términos de servicio".',
    'app_footer_links_label' => 'Etiqueta del enlace',
    'app_footer_links_url' => 'Dirección URL del enlace',
    'app_footer_links_add' => 'Añadir enlace al pie de página',
    'app_disable_comments' => 'Deshabilitar comentarios',
    'app_disable_comments_toggle' => 'Deshabilitar comentarios',
    'app_disable_comments_desc' => 'Deshabilitar comentarios en todas las páginas de la aplicación. Los comentarios existentes no se muestran.',

    // Color settings
    'content_colors' => 'Colores del contenido',
    'content_colors_desc' => 'Establece los colores para todos los elementos en la jerarquía de la organización de la página. Se recomienda elegir colores con un brillo similar al predeterminado para mayor legibilidad.',
    'bookshelf_color' => 'Color del estante',
    'book_color' => 'Color del libro',
    'chapter_color' => 'Color del capítulo',
    'page_color' => 'Color de la página',
    'page_draft_color' => 'Color del borrador de página',

    // Registration Settings
    'reg_settings' => 'Ajustes de registro',
    'reg_enable' => 'Habilitar Registro',
    'reg_enable_toggle' => 'Habilitar registro',
    'reg_enable_desc' => 'Cuando se habilita el registro, el usuario podrá crear su usuario en la aplicación. Con el regsitro, se le otorga un rol de usuario único y por defecto.',
    'reg_default_role' => 'Rol de usuario por defecto despúes del registro',
    'reg_enable_external_warning' => 'La opción anterior no se utiliza mientras la autenticación LDAP o SAML externa esté activa. Las cuentas de usuario para los miembros no existentes se crearán automáticamente si la autenticación en el sistema externo en uso es exitosa.',
    'reg_email_confirmation' => 'Confirmación de correo electrónico',
    'reg_email_confirmation_toggle' => 'Requerir confirmación de correo electrónico',
    'reg_confirm_email_desc' => 'Si se utiliza la restricción por dominio, entonces se requerirá la confirmación por correo electrónico y se ignorará el valor a continuación.',
    'reg_confirm_restrict_domain' => 'Restringir registro al dominio',
    'reg_confirm_restrict_domain_desc' => 'Introduzca una lista separada por comas de los correos electrónicos del dominio a los que les gustaría restringir el registro por dominio. A los usuarios les será enviado un correo elctrónico para confirmar la dirección antes de que se le permita interactuar con la aplicación. <br> Note que a los usuarios se les permitirá cambiar sus direcciones de correo electrónico luego de un registro éxioso.',
    'reg_confirm_restrict_domain_placeholder' => 'Ninguna restricción establecida',

    // Maintenance settings
    'maint' => 'Mantenimiento',
    'maint_image_cleanup' => 'Limpiar imágenes',
    'maint_image_cleanup_desc' => 'Analizar contenido de páginas y revisiones para detectar cuáles imágenes y dibujos están en uso y cuáles son redundantes. Asegúrese de crear un respaldo completo de imágenes y base de datos antes de ejecutar esta tarea.',
    'maint_delete_images_only_in_revisions' => 'También elimina imágenes que sólo existen en antiguas revisiones de páginas',
    'maint_image_cleanup_run' => 'Ejecutar limpieza',
    'maint_image_cleanup_warning' => 'Se encontraron :count imágenes pontencialmente sin uso. Está seguro de que quiere eliminarlas?',
    'maint_image_cleanup_success' => 'Se encontraron y se eliminaron :count imágenes pontencialmente sin uso!',
    'maint_image_cleanup_nothing_found' => 'No se encotraron imágenes sin usar, Nada eliminado!',
    'maint_send_test_email' => 'Enviar un correo electrónico de prueba',
    'maint_send_test_email_desc' => 'Esto envía un correo electrónico de prueba a la dirección de correo electrónico especificada en tu perfil.',
    'maint_send_test_email_run' => 'Enviar correo electrónico de prueba',
    'maint_send_test_email_success' => 'Correo electrónico enviado a :address',
    'maint_send_test_email_mail_subject' => 'Probar correo electrónico',
    'maint_send_test_email_mail_greeting' => '¡El envío de correos electrónicos parece funcionar!',
    'maint_send_test_email_mail_text' => '¡Enhorabuena! Al recibir esta notificación de correo electrónico, tu configuración de correo electrónico parece estar ajustada correctamente.',
    'maint_recycle_bin_desc' => 'Los estantes, libros, capítulos y páginas eliminados se envían a la papelera de reciclaje para que puedan ser restauradas o eliminadas permanentemente. Los elementos más antiguos en la papelera de reciclaje pueden ser eliminados automáticamente después de un tiempo dependiendo de la configuración del sistema.',
    'maint_recycle_bin_open' => 'Abrir papelera de reciclaje',

    // Recycle Bin
    'recycle_bin' => 'Papelera de Reciclaje',
    'recycle_bin_desc' => 'Aquí puede restaurar elementos que hayan sido eliminados o elegir eliminarlos permanentemente del sistema. Esta lista no está filtrada a diferencia de las listas de actividad similares en el sistema donde se aplican los filtros de permisos.',
    'recycle_bin_deleted_item' => 'Elemento Eliminado',
    'recycle_bin_deleted_parent' => 'Padre',
    'recycle_bin_deleted_by' => 'Eliminado por',
    'recycle_bin_deleted_at' => 'Fecha de eliminación',
    'recycle_bin_permanently_delete' => 'Eliminar permanentemente',
    'recycle_bin_restore' => 'Restaurar',
    'recycle_bin_contents_empty' => 'La papelera de reciclaje está vacía',
    'recycle_bin_empty' => 'Vaciar Papelera de reciclaje',
    'recycle_bin_empty_confirm' => 'Esto destruirá permanentemente todos los elementos de la papelera de reciclaje, incluyendo el contenido existente en cada elemento. ¿Está seguro de que desea vaciar la papelera de reciclaje?',
    'recycle_bin_destroy_confirm' => 'Esta acción eliminará permanentemente este elemento del sistema, junto con los elementos secundarios listados a continuación, y no podrá restaurar este contenido. ¿Está seguro de que desea eliminar permanentemente este elemento?',
    'recycle_bin_destroy_list' => 'Elementos a destruir',
    'recycle_bin_restore_list' => 'Elementos a restaurar',
    'recycle_bin_restore_confirm' => 'Esta acción restaurará el elemento eliminado, incluyendo cualquier elemento secundario, a su ubicación original. Si la ubicación original ha sido eliminada, y ahora está en la papelera de reciclaje, el elemento padre también tendrá que ser restaurado.',
    'recycle_bin_restore_deleted_parent' => 'El padre de este elemento también ha sido eliminado. Estos permanecerán eliminados hasta que el padre también sea restaurado.',
    'recycle_bin_restore_parent' => 'Restaurar Padre',
    'recycle_bin_destroy_notification' => 'Eliminados :count elementos de la papelera de reciclaje.',
    'recycle_bin_restore_notification' => 'Restaurados :count elementos desde la papelera de reciclaje.',

    // Audit Log
    'audit' => 'Registro de Auditoría',
    'audit_desc' => 'Este registro de auditoría muestra una lista de actividades rastreadas en el sistema. Esta lista no tiene filtrado a diferencia de listas de actividad similares en el sistema en los que se aplican filtros de permisos.',
    'audit_event_filter' => 'Filtro de Eventos',
    'audit_event_filter_no_filter' => 'Sin Filtro',
    'audit_deleted_item' => 'Elemento borrado',
    'audit_deleted_item_name' => 'Nombre: :name',
    'audit_table_user' => 'Usuario',
    'audit_table_event' => 'Evento',
    'audit_table_related' => 'Elemento o detalle relacionados',
    'audit_table_ip' => 'Dirección IP',
    'audit_table_date' => 'Fecha de la Actividad',
    'audit_date_from' => 'Inicio del Rango de Fecha',
    'audit_date_to' => 'Final del Rango de Fecha',

    // Role Settings
    'roles' => 'Roles',
    'role_user_roles' => 'Roles de usuario',
    'role_create' => 'Crear nuevo rol',
    'role_create_success' => 'Rol creado satisfactoriamente',
    'role_delete' => 'Borrar rol',
    'role_delete_confirm' => 'Se borrará el rol con nombre  \':roleName\'.',
    'role_delete_users_assigned' => 'Este rol tiene :userCount usuarios asignados. Si ud. quisiera migrar los usuarios de este rol, seleccione un nuevo rol a continuación.',
    'role_delete_no_migration' => "No migrar usuarios",
    'role_delete_sure' => '¿Está seguro que desea borrar este rol?',
    'role_delete_success' => 'Rol borrado satisfactoriamente',
    'role_edit' => 'Editar rol',
    'role_details' => 'Detalles de rol',
    'role_name' => 'Nombre de rol',
    'role_desc' => 'Descripción corta de rol',
    'role_mfa_enforced' => 'Requiere autenticación de múltiples factores',
    'role_external_auth_id' => 'IDs de Autenticación Externa',
    'role_system' => 'Permisos de sistema',
    'role_manage_users' => 'Gestionar usuarios',
    'role_manage_roles' => 'Gestionar roles y permisos de roles',
    'role_manage_entity_permissions' => 'Gestionar todos los permisos de libros, capítulos y páginas',
    'role_manage_own_entity_permissions' => 'Gestionar permisos en libro
    s propios, capítulos y páginas',
    'role_manage_page_templates' => 'Gestionar las plantillas de páginas',
    'role_access_api' => 'API de sistema de acceso',
    'role_manage_settings' => 'Gestionar ajustes de activos',
    'role_export_content' => 'Exportar contenido',
    'role_editor_change' => 'Cambiar editor de página',
    'role_asset' => 'Permisos de activos',
    'roles_system_warning' => 'Tenga en cuenta que el acceso a cualquiera de los tres permisos anteriores puede permitir a un usuario modificar sus propios privilegios o los privilegios de otros usuarios en el sistema. Asignar roles con estos permisos sólo a usuarios de comfianza.',
    'role_asset_desc' => 'Estos permisos controlan el acceso por defecto a los activos del sistema. Permisos definidos en Libros, Capítulos y Páginas ignorarán estos permisos.',
    'role_asset_admins' => 'Los administradores reciben automáticamente acceso a todo el contenido pero estas opciones pueden mostrar u ocultar opciones de UI.',
    'role_all' => 'Todo',
    'role_own' => 'Propio',
    'role_controlled_by_asset' => 'Controlado por el activo al que ha sido subido',
    'role_save' => 'Guardar rol',
    'role_update_success' => 'Rol actualizado exitosamente',
    'role_users' => 'Usuarios en este rol',
    'role_users_none' => 'No hay usuarios asignados a este rol',

    // Users
    'users' => 'Usuarios',
    'user_profile' => 'Perfil de usuario',
    'users_add_new' => 'Agregar nuevo usuario',
    'users_search' => 'Buscar usuarios',
    'users_latest_activity' => 'Actividad Reciente',
    'users_details' => 'Detalles del usuario',
    'users_details_desc' => 'Asigne un nombre de visualización y una dirección de correo electrónico para este usuario. La dirección de correo electrónico se usará pra ingresar a la aplicación.',
    'users_details_desc_no_email' => 'Asigne un nombre de visualización a este usuario para que los demás puedan reconocerlo.',
    'users_role' => 'Roles de usuario',
    'users_role_desc' => 'Selecciona los roles a los que será asignado este usuario. Si se asignan varios roles los permisos se acumularán y recibirá todas las habilidades de los roles asignados.',
    'users_password' => 'Contraseña de Usuario',
    'users_password_desc' => 'Establezca una contraseña para iniciar sesión en la aplicación. Debe tener al menos 8 caracteres.',
    'users_send_invite_text' => 'Puede optar por enviar a este usuario un correo electrónico de invitación que les permita establecer su propia contraseña; de lo contrario, puede establecerla contraseña usted mismo.',
    'users_send_invite_option' => 'Enviar correo electrónico de invitación al usuario.',
    'users_external_auth_id' => 'ID externo de autenticación',
    'users_external_auth_id_desc' => 'Esta es la ID usada para asociar este usuario con el sistema de autenticación externo.',
    'users_password_warning' => 'Solo rellene a continuación si desea cambiar su password:',
    'users_system_public' => 'Este usuario representa cualquier usuario invitado que visita la aplicación. No puede utilizarse para hacer login sino que es asignado automáticamente.',
    'users_delete' => 'Borrar usuario',
    'users_delete_named' => 'Borrar usuario :userName',
    'users_delete_warning' => 'Se borrará completamente el usuario con el nombre \':userName\' del sistema.',
    'users_delete_confirm' => '¿Está seguro que desea borrar este usuario?',
    'users_migrate_ownership' => 'Cambiar Propietario',
    'users_migrate_ownership_desc' => 'Seleccione un usuario aquí si desea que otro usuario se convierta en el dueño de todos los elementos que actualmente son propiedad de este usuario.',
    'users_none_selected' => 'No hay usuario seleccionado',
    'users_edit' => 'Editar Usuario',
    'users_edit_profile' => 'Editar perfil',
    'users_avatar' => 'Avatar del usuario',
    'users_avatar_desc' => 'Esta imagen debe ser de aproximadamente 256px por lado.',
    'users_preferred_language' => 'Lenguaje preferido',
    'users_preferred_language_desc' => 'Esta opción cambiará el idioma de la interfaz de usuario en la aplicación. No afectará al contenido creado por los usuarios.',
    'users_social_accounts' => 'Cuentas sociales',
    'users_social_accounts_info' => 'Aquí puede conectar sus otras cuentas para un acceso rápido y más fácil. Desconectando una cuenta aquí no revoca accesos ya autorizados. Revoque el acceso desde los ajustes de perfil en la cuenta social conectada.',
    'users_social_connect' => 'Conectar cuenta',
    'users_social_disconnect' => 'Desconectar cuenta',
    'users_social_connected' => 'La cuenta :socialAccount ha sido exitosamente añadida a su perfil.',
    'users_social_disconnected' => 'La cuenta :socialAccount ha sido desconectada exitosamente de su perfil.',
    'users_api_tokens' => 'Tokens API',
    'users_api_tokens_none' => 'No se han creado tokens API para este usuario',
    'users_api_tokens_create' => 'Crear token',
    'users_api_tokens_expires' => 'Expira',
    'users_api_tokens_docs' => 'Documentación API',
    'users_mfa' => 'Autenticación de múltiples factores',
    'users_mfa_desc' => 'Configure la autenticación de múltiples factores como una capa extra de seguridad para su cuenta de usuario.',
    'users_mfa_x_methods' => ':count método configurado|:count métodos configurados',
    'users_mfa_configure' => 'Configurar Métodos',

    // API Tokens
    'user_api_token_create' => 'Crear token API',
    'user_api_token_name' => 'Nombre',
    'user_api_token_name_desc' => 'Dale a tu token un nombre legible como un recordatorio futuro de su propósito.',
    'user_api_token_expiry' => 'Fecha de expiración',
    'user_api_token_expiry_desc' => 'Establece una fecha en la que este token expira. Después de esta fecha, las solicitudes realizadas usando este token ya no funcionarán. Dejar este campo en blanco fijará un vencimiento de 100 años en el futuro.',
    'user_api_token_create_secret_message' => 'Luego de crear este token, inmediatamente se generará y mostrará el "Token ID" y el "Token Secret" correspondientes. El "Token Secret" se mostrará por única vez, asegúrese de copiar el valor a un lugar seguro antes de continuar.',
    'user_api_token_create_success' => 'Token API creado correctamente',
    'user_api_token_update_success' => 'Token API actualizado correctamente',
    'user_api_token' => 'Token API',
    'user_api_token_id' => 'Token ID',
    'user_api_token_id_desc' => 'Este es un identificador no editable generado por el sistema y único para este token que necesitará ser proporcionado en solicitudes de API.',
    'user_api_token_secret' => 'Clave de Token',
    'user_api_token_secret_desc' => 'Esta es una clave no editable generada por el sistema que necesitará ser proporcionada en solicitudes de API. Solo se monstraré esta vez así que guarde su valor en un lugar seguro.',
    'user_api_token_created' => 'Token creado :timeAgo',
    'user_api_token_updated' => 'Token actualizado :timeAgo',
    'user_api_token_delete' => 'Borrar token',
    'user_api_token_delete_warning' => 'Esto eliminará completamente este token API con el nombre \':tokenName\' del sistema.',
    'user_api_token_delete_confirm' => '¿Está seguro de que desea borrar este API token?',
    'user_api_token_delete_success' => 'Token API borrado correctamente',

    // Webhooks
    'webhooks' => 'Webhooks',
    'webhooks_create' => 'Crear nuevo Webhook',
    'webhooks_none_created' => 'No hay webhooks creados.',
    'webhooks_edit' => 'Editar Webhook',
    'webhooks_save' => 'Guardar Webhook',
    'webhooks_details' => 'Detalles del Webhook',
    'webhooks_details_desc' => 'Proporcione un nombre y un punto final de POST como destino para enviar los datos del webhook.',
    'webhooks_events' => 'Eventos del Webhook',
    'webhooks_events_desc' => 'Seleccione todos los eventos que deberían activar este webhook.',
    'webhooks_events_warning' => 'Tenga en cuenta que estos eventos se activarán para todos los eventos seleccionados, incluso si se aplican permisos personalizados. Asegúrese de que el uso de este webhook no exponga contenido confidencial.',
    'webhooks_events_all' => 'Todos los eventos del sistema',
    'webhooks_name' => 'Nombre del Webhook',
    'webhooks_timeout' => 'Tiempo de Espera de Solicitud del Webhook (Segundos)',
    'webhooks_endpoint' => 'Punto final del Webhook',
    'webhooks_active' => 'Webhook Activo',
    'webhook_events_table_header' => 'Eventos',
    'webhooks_delete' => 'Eliminar Webhook',
    'webhooks_delete_warning' => 'Esto eliminará completamente del sistema este webhook con el nombre \':webhookName\'.',
    'webhooks_delete_confirm' => '¿Está seguro que quiere eliminar este webhook?',
    'webhooks_format_example' => 'Ejemplo de Formato de Webhook',
    'webhooks_format_example_desc' => 'Los datos del Webhook, en formato JSON, se envían como una solicitud POST al punto final siguiendo el formato mostrado a continuación. Las propiedades "related_item" y "url" son opcionales y dependerán del tipo de evento activado.',
    'webhooks_status' => 'Estado del Webhook',
    'webhooks_last_called' => 'Última Ejecución:',
    'webhooks_last_errored' => 'Último error:',
    'webhooks_last_error_message' => 'Último mensaje de error:',


    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'Inglés',
        'ar' => 'Árabe',
        'bg' => 'Búlgaro',
        'bs' => 'Bosnio',
        'ca' => 'Català',
        'cs' => 'Checo',
        'da' => 'Danés',
        'de' => 'Alemán (informal)',
        'de_informal' => 'Alemán (formal)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'et' => 'Eesti keel',
        'eu' => 'Euskara',
        'fa' => 'فارسی',
        'fr' => 'Francés',
        'he' => 'עברית',
        'hr' => 'Croata',
        'hu' => 'Húngaro',
        'id' => 'Indonesio',
        'it' => 'Italiano',
        'ja' => 'Japonés',
        'ko' => 'Coreano',
        'lt' => 'Lituano',
        'lv' => 'Letón',
        'nl' => 'Holanda',
        'nb' => 'Norsk (Bokmål)',
        'pl' => 'Polaco',
        'pt' => 'Portugués',
        'pt_BR' => 'Portugués brasileño',
        'ru' => 'Ruso',
        'sk' => 'Eslovaco',
        'sl' => 'Esloveno',
        'sv' => 'Sueco',
        'tr' => 'Turco',
        'uk' => 'Ucraniano',
        'vi' => 'Vietnamita',
        'zh_CN' => 'Chino mandarín',
        'zh_TW' => 'Chino tradicional',
    ],
    //!////////////////////////////////
];
