<?php
namespace Shop\Classes;
class Model
{
    private $connection;

    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        try {
            $this->connection = new \PDO('mysql:host=db;port=3306;dbname=beetroot', 'root', 'root');
        } catch (Throwable $e) {
            print "Error!: {$e->getMessage()} <br/>";
        }
    }

    public function getConnect()
    {
        return $this->connection;
    }

}

