<?php

namespace Core;

class Database {
    private static $conexion;

    public static function connect() {
        if (!self::$conexion) {
            $host = '132.148.78.30';
            $user = 'wwwerponweb_abasonl';
            $pass = '8mbOUtsrb5mG';
            $dbname = 'wwwerponweb_abastosonlines';
            $port = 3306;

            self::$conexion = new \mysqli($host, $user, $pass, $dbname, $port);

            if (self::$conexion->connect_error) {
                die("Error de conexión MySQLi: " . self::$conexion->connect_error);
            }

            // Opcional: configurar charset
            self::$conexion->set_charset("utf8");
        }

        return self::$conexion;
    }
}
