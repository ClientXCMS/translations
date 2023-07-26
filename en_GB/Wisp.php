<?php
/**$
    Wisp - en_GB
    CLIENTXCMS Translator system - Exported on 2023-07-26 10:57:47
    If you want to help you translate into your language, you can contact us via our support.
*/
return [
  'Wisp' => [
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
    'migrate' => [
      'title' => 'Wisp Migration',
      'subtitle' => 'This page lets you migrate your Pterodactyl configurations to Wisp.',
      'info' => 'This action will change product types and migrate configurations from the Pterodactyl module to the Wisp module.',
    ],
    'adminindex' => [
      'title' => 'Wisp Configuration',
      'subtitle' => 'Manage the configurations of your offers.',
      'memory' => 'Memory',
      'disk' => 'Disk space',
      'productname' => 'Product Name',
    ],
    'config' => [
      'title' => 'Server configuration',
      'subtitle' => 'Manage the different features of the offer',
    ],
    'form' => [
      'resources' => [
        'title' => 'Resources',
        'memory' => 'Memory (MB)',
        'disk' => 'Disk space (MB)',
        'swap' => 'Swap',
        'io' => 'Block IO',
        'portrange' => 'Port to assign to the server (separated by commas)',
        'cpu' => 'CPU limit (%)',
      ],
      'features' => [
        'title' => 'Features',
        'databases' => 'Databases to assign to the server ',
        'backups' => 'Backup size limit (MB)',
        'allocations' => 'Allocation (MB)',
      ],
      'core' => [
        'title' => 'Information',
        'servername' => 'Serveur name',
        'egg' => 'ID Egg Wisp',
        'nest' => 'ID Nest Wisp',
        'location' => 'ID Location Wisp',
      ],
      'configurations' => [
        'title' => 'Configuration',
        'image' => 'Docker image',
        'startup' => 'Startup command ',
        'oomkiller' => 'Disabled OOM Killer',
        'dedicatedip' => 'Addresse IP dedicatedip',
      ],
      'converter' => [
        'title' => 'Converter',
        'mb' => 'Type your number in MB',
        'gb' => 'Type your number in GB',
      ],
    ],
  ],
];