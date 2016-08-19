<?php

namespace Bioub\HerokuBundle\Composer;

use Composer\Script\Event;

class ScriptHandler
{
    /*
     composer.json :
     "incenteev-parameters": {
        "file": "app/config/parameters.yml",
        "env-map": {
            "database_host": "DATABASE_HOST",
            "database_port": "DATABASE_PORT",
            "database_name": "DATABASE_NAME",
            "database_user": "DATABASE_USER",
            "database_password": "DATABASE_PASSWORD"
        }
    }
     */

    static public function buildMySQLEnv(Event $event) {

        $url =  getenv('CLEARDB_DATABASE_URL');

        if ($url) {
            $matches = [];
            preg_match('/^mysql:\/\/([^:]+):([^@]+)@([^\/]+)\/([^?]+)/', $url, $matches);

            putenv("DATABASE_USER=$matches[1]");
            putenv("DATABASE_PASSWORD=$matches[2]");
            putenv("DATABASE_HOST=$matches[3]");
            putenv("DATABASE_NAME=$matches[4]");
        }

        $io = $event->getIO();

        $io->write("CLEARDB_DATABASE_URL=$url");
    }
}
