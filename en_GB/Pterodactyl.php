<?php
/**$
    Pterodactyl - en_GB
    CLIENTXCMS Translator system - Exported on 2023-07-26 13:50:50
    If you want to help you translate into your language, you can contact us via our support.
*/
return [
  'pterodactyl' => [
    'offline' => 'Offline',
    'online' => 'Online',
    'failed' => [
      'alreadycreated' => 'Failed to create the server because it is already created.',
      'changepkgexist' => 'Failed to modify server package because it does not exist.',
      'suspendexist' => 'Failed to suspend server because it does not exist.',
      'unsuspendexist' => 'Failed to unsuspend server because it does not exist.',
      'terminateexist' => 'Failed to delete server because it does not exist .',
      'satisfying' => 'Unable to find nodes meeting demand.',
      'pwdempty' => 'Password must not be empty.',
      'linkserver' => 'Failed to change password because linked server does not exist.',
      'retrieveuser' => 'User recovery failed, error code received : %status_code%',
      'changepwd' => 'Password change failed, error code received : %status_code%',
      'createuser' => 'User creation failed, error code received : %status_code%',
      'geteggs' => 'Failed to get egg data, error code received : %status_code%',
      'getserver' => 'Failed to get data from server, error code received : %status_code%',
      'createserver' => 'Failed to create server, error code received : %status_code%',
      'suspendserver' => 'Failed to suspend server, error code received : %status_code%',
      'unsuspendserver' => 'Failed to unsuspend server, error code received : %status_code%',
      'terminateserver' => 'Failed to delete server, error code received : %status_code%',
      'buildserver' => 'Server version update failed, error code received : %status_code%',
      'startupserver' => 'Server startup update failed, error code received : %status_code%',
    ],
    'panel' => [
      'disk' => 'Disk space',
      'memory' => 'Memory',
      'button' => 'Manage my server',
      'problem' => 'You have a problem with the hosting ?',
      'openticket' => 'Open ticket!',
      'information' => 'Hosting information',
      'start' => 'Start',
      'stop' => 'Stop',
      'powerstop' => 'Power stop',
      'restart' => 'Restart',
    ],
    'adminindex' => [
      'title' => 'Pterodactyl Configuration',
      'subtitle' => 'Manage the offer configurations.',
      'memory' => 'Memory',
      'disk' => 'Disk space',
      'productname' => 'Product Name',
    ],
    'config' => [
      'title' => 'Server configuration',
      'subtitle' => 'Manage the characteristics of the offer .',
    ],
    'form' => [
      'resources' => [
        'title' => 'Resources',
        'memory' => 'Memory (MB)',
        'disk' => 'Disk space (MB)',
        'swap' => 'Swap',
        'swaphelp' => '0 will disable swap for the server. -1 will allow no throttling',
        'io' => 'Block IO',
        'portrange' => 'Port to assign to the server (Example: 3000-4000)',
        'cpu' => 'CPU limit (%)',
      ],
      'features' => [
        'title' => 'Features',
        'databases' => 'Databases to assign to the server',
        'allocations' => 'Additional Allocations to assign to the server',
        'backups' => 'Saves to assign to the server',
      ],
      'core' => [
        'title' => 'Information',
        'servername' => 'Serveur name',
        'egg' => 'ID Egg Pterodactyl',
        'nest' => 'ID Nest Pterodactyl',
        'location' => 'ID Location Pterodactyl',
      ],
      'configurations' => [
        'title' => 'Configuration',
        'image' => 'Docker image',
        'startup' => 'Startup command ',
        'oomkiller' => 'Disabled OOM Killer',
        'dedicatedip' => 'IP Address dedicatedip',
      ],
    ],
  ],
];