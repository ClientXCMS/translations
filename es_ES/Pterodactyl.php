<?php
/**$
    Pterodactyl - es_ES
    CLIENTXCMS Translator system - Exported on 2023-07-26 10:57:47
    If you want to help you translate into your language, you can contact us via our support.
*/
return [
  'pterodactyl' => [
    'offline' => 'Fuera de linea',
    'online' => 'En linea',
    'failed' => [
      'alreadycreated' => 'No se ha podido crear el servidor porque ya está creado.',
      'changepkgexist' => 'No se ha podido modificar el paquete del servidor porque no existe.',
      'suspendexist' => 'Fallo al suspender el servidor porque no existe.',
      'unsuspendexist' => 'Fallo en la desconexión del servidor porque no existe.',
      'terminateexist' => 'No se ha podido eliminar el servidor porque no existe .',
      'satisfying' => 'Imposibilidad de encontrar nodos que satisfagan la demanda.',
      'pwdempty' => 'La contraseña no debe estar vacía.',
      'linkserver' => 'No se ha podido cambiar la contraseña porque el servidor vinculado no existe.',
      'retrieveuser' => 'Error en la recuperación del usuario, código de error recibido: %status_code%',
      'changepwd' => 'Cambio de contraseña fallido, código de error recibido: %status_code%',
      'createuser' => 'Creación de usuario fallida, código de error recibido: %status_code%',
      'geteggs' => 'No se han podido obtener los datos del huevo, se ha recibido un código de error: %status_code%',
      'getserver' => 'Fallo en la obtención de datos del servidor, código de error recibido: %status_code%',
      'createserver' => 'Fallo en la creación del servidor, código de error recibido: %status_code%',
      'suspendserver' => 'Fallo en la suspensión del servidor, código de error recibido: %status_code%',
      'unsuspendserver' => 'Fallo en la suspensión del servidor, código de error recibido: %status_code%',
      'terminateserver' => 'Fallo en la suspensión del servidor, código de error recibido: %status_code%',
      'buildserver' => 'Error en la actualización de la versión del servidor, código de error recibid: %status_code%',
      'startupserver' => 'Error en la actualización de inicio del servidor, código de error recibido: %status_code%',
    ],
    'panel' => [
      'disk' => 'Espacio en disco ',
      'memory' => 'Memoria',
      'button' => 'Gestionar mi servidor',
      'problem' => '¿Tienes problemas con el servicio?',
      'openticket' => 'Abrir ticket',
      'information' => 'Información sobre el alojamiento',
      'start' => 'Iniciar',
      'stop' => 'Detener',
      'powerstop' => 'Forzar apagado',
      'restart' => 'Reiniciar',
    ],
    'adminindex' => [
      'title' => 'Configuración de Pterodactyl',
      'subtitle' => 'Gestionar las configuraciones de la oferta.',
      'memory' => 'Memoria',
      'disk' => 'Espacio en disco',
      'productname' => 'Nombre del producto',
    ],
    'config' => [
      'title' => 'Configuración del servidor',
      'subtitle' => 'Gestionar las características de la oferta .',
    ],
    'form' => [
      'resources' => [
        'title' => 'Recursos',
        'memory' => 'Memoria (MB)',
        'disk' => 'Espacio en disco (MB)',
        'swap' => 'Swap',
        'swaphelp' => '0 desactivará el intercambio para el servidor. -1 permitirá sin restricciones',
        'io' => 'Block IO',
        'portrange' => 'Puerto a asignar al servidor (Ejemplo: 3000-4000)',
        'cpu' => 'Límite del procesador (%)',
      ],
      'features' => [
        'title' => 'Características',
        'databases' => 'Bases de datos que se asignarán al servidor',
        'allocations' => 'Asignaciones adicionales para el servidor',
        'backups' => 'Backups para asignar al servidor',
      ],
      'core' => [
        'title' => 'Información',
        'servername' => 'Nombre del servidor',
        'egg' => 'ID Egg Ptérodactyl',
        'nest' => 'ID Nido (nest) Pterodáctilo',
        'location' => 'ID Ubicación Pterodactyl',
      ],
      'configurations' => [
        'title' => 'Configuración',
        'image' => 'Imagen Docker',
        'startup' => 'Comando de inicio ',
        'oomkiller' => 'Desactivado OOM Killer',
        'dedicatedip' => 'Dirección IP dedicada',
      ],
    ],
  ],
];