<?php
/**$
    Wisp - fr_FR
    CLIENTXCMS Translator system - Exported on 2023-07-26 10:57:47
    If you want to help you translate into your language, you can contact us via our support.
*/
return [
  'Wisp' => [
    'offline' => 'éteint',
    'online' => 'Allumé',
    'failed' => [
      'alreadycreated' => 'Échec de la création du serveur car il est déjà créé',
      'changepkgexist' => 'Échec de la modification du package du serveur car il n\'existe pas',
      'suspendexist' => 'Echec de la suspension du serveur car il n\'existe pas.',
      'unsuspendexist' => 'Échec de du unsuspend du serveur car il n\'existe pas.',
      'terminateexist' => 'Échec de la suppression du serveur car il n\'existe pas.',
      'satisfying' => 'Impossible de trouver des nœuds satisfaisant la demande',
      'pwdempty' => 'Le mot de passe ne doit pas être vide',
      'linkserver' => 'Échec de la modification du mot de passe car le serveur lié n\'existe pas',
      'retrieveuser' => 'Échec de la récupération de l\'utilisateur, code d\'erreur reçu: %status_code%',
      'changepwd' => 'Échec de la modification du mot de passe, code d\'erreur reçu: %status_code%',
      'createuser' => 'Échec de la création de l\'utilisateur, code d\'erreur reçu: %status_code%',
      'geteggs' => 'Échec de l\'obtention des données sur les œufs, code d\'erreur reçu: %status_code%',
      'getserver' => 'Échec de l\'obtention des données sur le serveur, code d\'erreur reçu: %status_code%',
      'createserver' => 'Échec de la création du serveur, code d\'erreur reçu: %status_code%',
      'suspendserver' => 'Échec de la suspension du serveur, code d\'erreur reçu: %status_code%',
      'unsuspendserver' => 'Échec de la suspension du serveur, code d\'erreur reçu: %status_code%',
      'terminateserver' => 'Échec de la suppression du serveur, code d\'erreur reçu: %status_code%',
      'buildserver' => 'Échec de la mise à jour de la version du serveur, code d\'erreur reçu: %status_code%',
      'startupserver' => 'Échec de la mise à jour du démarrage du serveur, code d\'erreur reçu: %status_code%',
    ],
    'panel' => [
      'disk' => 'Espace disque',
      'memory' => 'Mémoire',
      'button' => 'Gérer mon serveur',
      'problem' => 'Vous avez un problème avec l\'hébergement ?',
      'openticket' => 'Ouvrir un ticket!',
      'information' => 'Informations sur l\'hébergement',
      'start' => 'Démarrer',
      'stop' => 'Eteindre',
      'powerstop' => 'Tuer',
      'restart' => 'Redémarrer',
    ],
    'migrate' => [
      'title' => 'Migration Wisp',
      'subtitle' => 'Cette page permet de migrer vos configurations Pterodactyl vers Wisp.',
      'info' => 'Cette action changera les types de produits, migrera les configurations du module Pterodactyl vers le module Wisp.',
    ],
    'adminindex' => [
      'title' => 'Configuration de Wisp',
      'subtitle' => 'Administrez les configurations de vos offres.',
      'memory' => 'Mémoire',
      'disk' => 'Espace disque',
      'productname' => 'Nom du produit',
    ],
    'config' => [
      'title' => 'Configuration du serveur',
      'subtitle' => 'Administrez les différentes caractéristiques de l\'offre.',
    ],
    'form' => [
      'resources' => [
        'title' => 'Ressources',
        'memory' => 'Mémoire (MB)',
        'disk' => 'Espace disque (MB)',
        'swap' => 'Swap',
        'io' => 'Bloc IO',
        'portrange' => 'Port à attribuer au serveur (séparé par des virgules)',
        'cpu' => 'Limite du processeur (%)',
      ],
      'features' => [
        'title' => 'Fonctionnalités',
        'databases' => 'Bases de données à attribuer au serveur',
        'backups' => 'Limite de taille de sauvegarde (MB)',
        'allocations' => 'Allocation (MB)',
      ],
      'core' => [
        'title' => 'Information',
        'servername' => 'Nom du serveur',
        'egg' => 'ID Egg Wisp',
        'nest' => 'ID Nest Wisp',
        'location' => 'ID Location Wisp',
      ],
      'configurations' => [
        'title' => 'Configuration',
        'image' => 'Image Docker',
        'startup' => 'Commande de lancement',
        'oomkiller' => 'Désactiver OOM Killer',
        'dedicatedip' => 'Adresse IP dédiée',
      ],
      'converter' => [
        'title' => 'Convertisseur',
        'mb' => 'Tapez votre chiffre en MB',
        'gb' => 'Tapez votre chiffre en GB',
      ],
    ],
  ],
];