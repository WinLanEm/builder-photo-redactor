<?php


namespace singleton;
use PDO;

class PostgresqlConnection
{
    private $connection;
    private static $instance = null;

    public function __construct()
    {
        $host = $_ENV['DB_HOST'];
        $dbname = $_ENV['DB_NAME'];
        $dbuser = $_ENV['DB_USER'];
        $dbpassword = $_ENV['DB_PASSWORD'];
        try {
            $dns = "pgsql:host=$host;port=5433;dbname=$dbname";
            $this->connection = new PDO($dns, $dbuser, $dbpassword);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            http_response_code(500);
            $res = [
                'status' => false,
                'message' => 'Internal Server Error'
            ];
            die(json_encode($res));
        }
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new PostgresqlConnection();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->connection;
    }

    private function __clone()
    {

    }

    private function __wakeup()
    {

    }
}