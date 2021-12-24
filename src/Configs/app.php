<?php

use App\Installer\Database\MySqlSetup;

return [
    'min_php_version' => '7.4',

    'repository' => 'https://github.com/kis2a/UNIT3D-Community-Edition.git',

    'database_installers' => [
        /**
         * Map to the Installer class
         */
        'MySql' => MySqlSetup::class,
        //'MariaDB' => '',
        //'Postgres' => '',
    ],

    /*
     * Dynamically set configuration defaults and place holders
     *
     * These do NOT need policy classes
     */

    /* Main Server */
    'server_name' => '',
    'ip' => '',
    'hostname' => '',
    'ssl' => true,
    'owner' => '',
    'owner_email' => '',
    'password' => '',

    /* Database */
    'database_driver' => 'MySql',

    'db' => '',
    'dbuser' => '',
    'dbpass' => '',
    'dbrootpass' => '',

    /* Mail */
    'mail_driver' => 'smtp',
    'mail_host' => 'smtp@gmail.com',
    'mail_port' => '587',
    'mail_username' => '',
    'mail_password' => '',
    'mail_from_name' => '',

    /* Chat */
    'echo-port' => '',

    /* API Keys */
    'tmdb-key' => '',
];
