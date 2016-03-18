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

    'dashboard' => 'Panel de Control',

    // Incidents
    'incidents' => [
        'title'                    => 'Eventos &amp;',
        'incidents'                => 'Incidentes',
        'logged'                   => '{0} No hay incidentes, buen trabajo. | Usted ha reportado un incidente.|Usted tiene <strong>:count</strong> incidentes reportados .',
        'incident-create-template' => 'Crear plantilla',
        'incident-templates'       => 'Plantillas de incidentes',
        'add'                      => [
            'title'   => 'Añadir evento',
            'success' => 'Agregó incidente.',
            'failure' => 'Algo salió mal con el incidente.',
        ],
        'edit' => [
            'title'   => 'Editar incidente',
            'success' => 'Incidente actualizado.',
            'failure' => 'Algo salió mal con el incidente.',
        ],
        'delete' => [
            'success' => 'El incidente se ha eliminado y no se mostrará en tu página de estado.',
            'failure' => 'El incidente no se pudo eliminar. Por favor, inténtalo de nuevo.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Plantillas de incidente',
            'add'   => [
                'title'   => 'Crear plantilla de incidentes',
                'message' => 'Deberías añadir una plantilla de incidente.',
                'success' => 'Plantilla creada.',
                'failure' => 'Algo salió mal con la plantilla incidente.',
            ],
            'edit' => [
                'title'   => 'Editar plantilla',
                'success' => 'Plantilla actualizada!',
                'failure' => 'Algo está con la puesta al día del incidente fue la plantilla equivocada',
            ],
            'delete' => [
                'success' => 'La plantilla de incidente se ha eliminado.',
                'failure' => 'La plantilla de incidente no se pudo eliminar. Por favor, inténtalo de nuevo.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Mantenimiento planificado',
        'logged'       => '{0} No hay planificaciones, buen trabajo.|Has registrado una planificación.|Has registrado <strong>:count</strong> planificaciones.',
        'scheduled_at' => 'Planeado am :timestamp',
        'add'          => [
            'title'   => 'Añadir Mantenimiento Programado',
            'success' => 'Horario añadidó.',
            'failure' => 'Algo salió mal con el complemento de la programación.',
        ],
        'edit' => [
            'title'   => 'Editar mantenimiento programado',
            'success' => 'Horario ha sido actualizado!',
            'failure' => 'Algo salió mal con la edición de la programación.',
        ],
        'delete' => [
            'success' => 'El calendario ha sido borrada y no se muestra en su página principal.',
            'failure' => 'El calendario no se pudo eliminar. Por favor, inténtelo de nuevo.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Componentes',
        'component_statuses' => 'Estado de los componentes',
        'listed_group'       => 'Agrupados bajo :name',
        'add'                => [
            'title'   => 'Añadir componente',
            'message' => 'Puede ser un componente.',
            'success' => 'Componente creado.',
            'failure' => 'Cuando se crea el componente algo ha salido mal.',
        ],
        'edit' => [
            'title'   => 'Editar componente',
            'success' => 'Componente actualizado.',
            'failure' => 'Algo salió mal con el componente.',
        ],
        'delete' => [
            'success' => 'El componente se ha eliminado!',
            'failure' => 'El componente no se pudo eliminar. Por favor, inténtalo de nuevo.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Grupo de componentes|Grupos de componentes',
            'no_components' => 'Usted debe agregar un grupo de componentes.',
            'add'           => [
                'title'   => 'Adición de un grupo de componentes',
                'success' => 'Grupo componentes añadidos.',
                'failure' => 'Creando el grupo de componentes algo salió mal.',
            ],
            'edit' => [
                'title'   => 'Editar Grupo de componentes',
                'success' => 'Actualizado Grupo Componentes.',
                'failure' => 'Creando el grupo de componentes algo ha ido mal.',
            ],
            'delete' => [
                'success' => 'El grupo de componentes se ha eliminado!',
                'failure' => 'El grupo de componentes no se pudo eliminar. Por favor, inténtalo de nuevo.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Métrica',
        'add'     => [
            'title'   => 'Crear una métrica',
            'message' => 'Deberías añadir una métrica.',
            'success' => 'Métricas creadas.',
            'failure' => 'Creando la métrica algo ha ido mal.',
        ],
        'edit' => [
            'title'   => 'Editar métrica',
            'success' => 'Métrica actualizada.',
            'failure' => 'Creando la métrica algo salió mal.',
        ],
        'delete' => [
            'success' => 'La métrica se ha eliminado y no se mostrará más en tu página de estado.',
            'failure' => 'La métrica no se pudo eliminar. Por favor, inténtalo de nuevo.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'  => 'Suscriptores',
        'description'  => 'Los suscriptores recibirán las actualizaciones por correo electrónico cuando se crean incidentes.',
        'verified'     => 'Verificado',
        'not_verified' => 'Sin verificar',
        'add'          => [
            'title'   => 'Crear un nuevo suscriptor',
            'success' => 'Suscriptor añadidó.',
            'failure' => 'Cuando se crea el componente algo ha ido mal.',
        ],
        'edit' => [
            'title'   => 'Actualización de suscripción',
            'success' => 'Suscriptor actualiza.',
            'failure' => 'Al actualizar, algo salió mal.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Equipo',
        'member'      => 'Miembro',
        'profile'     => 'Perfil',
        'description' => 'Teammitglieder werden die M&ouml;glichkeit haben, Komponente sowie Vorf&auml;lle hinzuzuf&uuml;gen und zu ver&auml;ndern.',
        'add'         => [
            'title'   => 'Agregar nuevo miembro del equipo',
            'success' => 'El miembro del equipo añadió.',
            'failure' => 'Creando el componente algo salió mal.',
        ],
        'edit' => [
            'title'   => 'Perfil de actualización',
            'success' => 'Perfil actualizado.',
            'failure' => 'Al actualizar, algo salió mal.',
        ],
        'delete' => [
            'success' => 'Usuario actualizado.',
            'failure' => 'Al borrar este usuario algo salió mal.',
        ],
        'invite' => [
            'title'   => 'Invitar a un nuevo miembro al equipo',
            'success' => 'Se ha enviado una invitación',
            'failure' => 'Algo salió mal en la invitación.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'Ajustes',
        'app-setup' => [
            'app-setup'   => 'Instalación de la aplicación',
            'images-only' => 'Sólo puede cargar imágenes.',
            'too-big'     => 'El archivo que ha subido es demasiado grande. Sube una imagen que está a menos de :size es alto',
        ],
        'analytics' => [
            'analytics' => 'Analytics',
        ],
        'localization' => [
            'localization' => 'Localización',
        ],
        'security' => [
            'security'   => 'Seguridad',
            'two-factor' => 'Los usuarios sin autenticación de dos factores',
        ],
        'stylesheet' => [
            'stylesheet' => 'Hoja de estilo',
        ],
        'theme' => [
            'theme' => 'Tema',
        ],
        'edit' => [
            'success' => 'La configuración se guardó.',
            'failure' => 'Los ajustes no podrían salvarse.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Acceder',
        'logged_in'  => 'Se inicia la sesión.',
        'welcome'    => 'Bienvenido de nuevo!',
        'two-factor' => 'Por favor, introduzca su token.',
    ],

    // Sidebar footer
    'help'        => 'Ayuda',
    'status_page' => 'Página de estado',
    'logout'      => 'Finalizar la sesión',

    // Notifications
    'notifications' => [
        'notifications' => 'Notificaciones',
        'awesome'       => '!mpresionante.',
        'whoops'        => 'Uy.',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Bienvenido a tu página de estado!',
        'message' => 'Su página está casi terminada! Quizás desea configurar estos ajustes adicionales',
        'close'   => 'Sólo tiene que ir directamente a mi tablero de instrumentos',
        'steps'   => [
            'component'  => 'La creación de componentes',
            'incident'   => 'Crear incidentes',
            'customize'  => 'Personalizar',
            'team'       => 'Añadir usuarios',
            'api'        => 'generar API Token',
            'two-factor' => 'Autenticación de dos factores',
        ],
    ],

];
