<?php
    namespace App\DAO;

    const DBDRIVE = 'mysql';
    const DBHOST = "localhost";
    const DBNAME = "dbparque";
    const DBUSER = "root";
    const DBPASS = '12345';

    class Connection {

        private static $conn;

        public static function getConn() {
            if (!isset(self::$conn)) {
                try {
                    self::$conn = new \PDO(DBDRIVE.':host='.DBHOST.';dbname='.DBNAME.';charset=utf8', DBUSER, DBPASS, array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                    self::$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                    //echo "<script>alert('Connected successfully')</script>";
                  } catch(\PDOException $e) {
                    //echo "Connection failed: " . $e->getMessage();
                  }
            }
            return self::$conn;
        }
        
    }