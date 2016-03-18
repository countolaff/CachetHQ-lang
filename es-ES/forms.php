<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    // Setup form fields
    'setup' => [
        'email'            => 'E-Mail',
        'username'         => 'Nombre de usario',
        'password'         => 'Contraseña',
        'site_name'        => 'Nombre del sitio',
        'site_domain'      => 'Domain del sitio',
        'site_timezone'    => 'Seleccione su zona horaria',
        'site_locale'      => 'Cambiar el lenguaje',
        'enable_google2fa' => 'Google activar autenticación de dos factores',
        'cache_driver'     => 'Cache-conductor',
        'session_driver'   => 'Controlador-sesión',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Nombre de usuario o dirección de correo electrónico',
        'email'         => 'Correo electrónico',
        'password'      => 'Contraseña',
        '2fauth'        => 'Código de autenticación',
        'invalid'       => 'Nombre de usuario o contraseña incorrectos',
        'invalid-token' => 'Token no es válido',
        'cookies'       => 'Se deben activar cookies para iniciar sesión.',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Nombre',
        'status'             => 'Estado',
        'component'          => 'Componente',
        'message'            => 'Mensaje',
        'message-help'       => 'También puede usar Markdown.',
        'scheduled_at'       => 'Para cuando se planifica el mantenimiento?',
        'incident_time'      => 'Cuando se produjo este incidente?',
        'notify_subscribers' => 'Notificar a los suscriptores',
        'visibility'         => 'Visibilidad incidente',
        'public'             => 'Visible para el público',
        'logged_in_only'     => 'Sólo es visible para los usuarios registrados',
        'templates'          => [
            'name'     => 'Nombre',
            'template' => 'Vorlage',
            'twig'     => 'Las plantillas de incidentes pueden hacer uso del lenguaje de plantillas <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a>.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Nombre',
        'status'      => 'Estatus',
        'group'       => 'Grupo',
        'description' => 'Descripción',
        'link'        => 'Enlace',
        'tags'        => 'Palabras clave',
        'tags-help'   => 'separar por comas.',
        'enabled'     => 'Activar componente?',

        'groups' => [
            'name'      => 'Nombre',
            'collapsed' => 'Por defecto, ¿mostrar el grupo contraído?',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => 'Nombre',
        'suffix'           => 'Sufijo',
        'description'      => 'Descripción',
        'description-help' => 'También puede usar Markdown.',
        'display-chart'    => 'Vea la tabla en la página principal?',
        'default-value'    => 'Defecto',
        'calc_type'        => 'El cálculo de la métrica',
        'type_sum'         => 'Suma',
        'type_avg'         => 'Promedio',
        'places'           => 'Cantidad de decimales',
        'default_view'     => 'Vista predeterminada',

        'points' => [
            'value' => 'Valor',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'              => 'Nombre de la página',
            'site-url'               => 'URL de su página',
            'display-graphs'         => 'Ver el gráfico en la página principal?',
            'about-this-page'        => 'Acerca de esta página',
            'days-of-incidents'      => '¿Cuántos días con eventos que se muestra?',
            'banner'                 => 'Bandera',
            'banner-help'            => "Se recomienda que los archivos más amplio de 930 píxeles se cargan.",
            'subscribers'            => 'Permitir a la gente a inscribirse para notificación por correo electrónico?',
        ],
        'analytics' => [
            'analytics_google'       => 'Google Analytics Code',
            'analytics_gosquared'    => 'GoSquared Analytics Code',
            'analytics_piwik_url'    => 'URL der Piwik-Instanz (ohne http(s)://)',
            'analytics_piwik_siteid' => 'Piwik\'s Seiten-ID',
        ],
        'localization' => [
            'site-timezone'          => 'Huso horario de su a página',
            'site-locale'            => 'Idioma de su página',
            'date-format'            => 'Formato de fecha',
            'incident-date-format'   => 'Formato de hora incidente',
        ],
        'security' => [
            'allowed-domains'      => 'Dominios permitidos',
            'allowed-domains-help' => 'Separar por comas. El dominio antes mencionado se permite de forma predeterminada.',
        ],
        'stylesheet' => [
            'custom-css' => 'Estilo personalizado',
        ],
        'theme' => [
            'background-color'        => 'Color de fondo',
            'background-fills'        => 'Relleno del fondo (componentes, incidentes, pie)',
            'banner-background-color' => 'Color de fondo de la banner',
            'banner-padding'          => 'Banner Padding',
            'fullwidth-banner'        => 'Habilitar fullwidth banner?',
            'text-color'              => 'Color de la fuente',
            'dashboard-login'         => '¿Mostrar el botón de Panel de Control en el pie?',
            'reds'                    => 'Rojo (usado para errores)',
            'blues'                   => 'Azul (usado para información)',
            'greens'                  => 'Verde (usado para operaciones correctas)',
            'yellows'                 => 'Amarillo (usado para alertas)',
            'oranges'                 => 'Naranja (usado para avisos)',
            'metrics'                 => 'Relleno de las métricas',
            'links'                   => 'Enlaces',
        ],
    ],

    'user' => [
        'username'       => 'Nombre de usuario',
        'email'          => 'Correo electrónico',
        'password'       => 'Contraseña',
        'api-token'      => 'API Token',
        'api-token-help' => 'Si se regeneran su token de la API, las aplicaciones existentes no pueden acceder a Cachet.',
        'gravatar'       => 'Cambiar la imagen de perfil en Gravatar.',
        'user_level'     => 'Nivel de usuario',
        'levels'         => [
            'admin' => 'Administrador',
            'user'  => 'Usuario',
        ],
        '2fa' => [
            'help' => 'La autenticación de dos factores aumenta la seguridad de su cuenta. Necesita <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a> código de Google Authenticator o una aplicación similar en su dispositivo móvil. Al iniciar la sesión en la que se le pedirá que introduzca un símbolo que se genera por la aplicación.',
        ],
        'team' => [
            'description' => 'Invite a los miembros de su equipo introduciendo sus direcciones de correo electrónico aquí.',
            'email'       => 'Email #:id',
        ],
    ],

    // Buttons
    'add'    => 'Añadir',
    'save'   => 'Guardar',
    'update' => 'Actualizar',
    'create' => 'crear',
    'edit'   => 'Editar',
    'delete' => 'Borrar',
    'submit' => 'Enviar',
    'cancel' => 'Cancelar',
    'remove' => 'Eliminar',
    'invite' => 'Invitar',
    'signup' => 'Registrarse',

    // Other
    'optional' => '* opcional',
];
