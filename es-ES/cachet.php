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
    // Components
    'components' => [
        'status' => [
            1 => 'Funcional',
            2 => 'Problemas de Rendimiento',
            3 => 'Falla Parcial',
            4 => 'Falla Grave',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Ningún incidente reportado',
        'past'          => 'Incidentes del Pasado',
        'previous_week' => 'Semana Previa',
        'next_week'     => 'La Próxima Semana',
        'scheduled'     => 'Planificación de Mantenimiento',
        'scheduled_at'  => ', Fecha y Hora Planificada :timestamp',
        'status'        => [
            0 => 'Planificado', // TODO: Hopefully remove this.
            1 => 'En Investigación',
            2 => 'Identificado',
            3 => 'En Observación',
            4 => 'Fijo',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] Sistema operativo | [2,Inf] Todos los sistemas están operativos',
        'bad'   => '[0,1] El sistema está actualmente experimentando problemas | [2,Inf] Algunos sistemas están experimentando problemas',
        'major' => '[0,1] El servicio está experimentando una interrupción mayor | [2, Inf] Algunos sistemas están experimentando una interrupción mayor',
    ],

    'api' => [
        'regenerate' => 'Regenerar clave de API',
        'revoke'     => 'Clave de API revocada',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Última hora',
            'hourly'    => 'Últimas 12 horas',
            'weekly'    => 'Semanal',
            'monthly'   => 'Mensual',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Suscribirse para recibir las últimas actualizaciones.',
        'button'    => 'Suscribirse',
        'email'     => [
            'subscribe'          => 'Actualizaciones a través de correo electrónico',
            'subscribed'         => 'Se ha suscrito a las alertas por correo electrónico, por favor revise su correo electrónico para confirmar su suscripción.',
            'verified'           => 'Su suscripción de correo electrónico ha sido confirmado. Gracias!',
            'unsubscribe'        => 'Darse de Baja.',
            'unsubscribed'       => 'Su suscripción de correo electrónico ha sido cancelada.',
            'failure'            => 'Algo salió mal con la suscripción.',
            'already-subscribed' => 'No se puede escribir :email porque ya esta suscripto.',
            'verify'             => [
                'text'           => "Por favor confirmar su suscripción por correo electrónico a :app_name Estado del Enlace.\n:link\nGracias, :app_name",
                'html-preheader' => 'Por favor confirmar su suscripción por correo electrónico a :app_name Actualizaciones de estado.',
                'html'           => '<p>Por favor confirmar su suscripción de correo electrónico actualizaciones de estado :app_name Código de enlace.</p><p><a href=":link">:link</a></p><p>Gracias, :app_name</p>',
            ],
            'maintenance' => [
                'text'           => "Nuevo mantenimiento para :app_name planificado.\nnGracias, :app_name",
                'html-preheader' => 'Nuevo mantenimiento para :app_name planificado.',
                'html'           => '<p>Nuevo mantenimiento para :app_name planificado.</p>',
            ],
            'incident' => [
                'text'           => "Un nuevo incidente en :app_name reportado.\nGracias, :app_name",
                'html-preheader' => 'Un nuevo incidente en : :app_name informado.',
                'html'           => '<p>Un nuevo incidente en :app_name informado.</p> <p>nGracias, :app_name</p>',
            ],
            'component' => [
                'subject'        => 'Actualización de estado del componente',
                'text'           => 'El componente :component_name ha cambiado de estado. El componente está ahora :component_human_status.\nGracias, :app_name',
                'html-preheader' => 'Actualización del componente de :app_name',
                'html'           => '<p>El componente :component_name ha cambiado de estado. El componente ahora está :component_human_status.</p><p>Gracias, :app_name</p>',
                'tooltip-title'  => 'Subscribirse a las notificaciones de :component_name.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text'           => "Te han invitado a la página de estado del equipo de :app_name, para registrarte sigue este enlace.\n:link\nGracias, :app_name",
                'html-preheader' => 'Te han invitado al equipo de :app_name.',
                'html'           => '<p>Has sido invitado a la página de estado del equipo :app_name, para inscribirte sigue el siguiente enlace.</p><p><a href=":link">:link</a></p><p>Gracias, :app_name</p>',
            ],
        ],
    ],

    'signup' => [
        'title'    => 'Registrarse',
        'username' => 'Nombre de Usuario',
        'email'    => 'E-Mail',
        'password' => 'Password',
        'success'  => 'Tu cuenta ha sido creada.',
        'failure'  => 'Hubo algún error al registrarse.',
    ],

    'system' => [
        'update' => 'Hay disponible una versión de Cachet más nueva. Puedes aprender sobre cómo actualizarla <a href="https://docs.cachethq.io/docs/updating-cachet">aquí</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Cerrar',
        'subscribe' => [
            'title'  => 'Subscribirse a actualizaciones de componentes',
            'body'   => 'Introduce tu dirección de correo electrónico para subscribirte a las actualizaciones de este componente. Si ya estás subscrito, ya recibirás los correos electrónicos para este componente.',
            'button' => 'Suscribirse a',
        ],
    ],

    // Other
    'powered_by'      => ':app Página de estado de la Ingeniería Apropiada <a href="https://cachethq.io">Cachet</a>.',
    'about_this_site' => 'Acerca de este sitio',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status-Feed',

];
