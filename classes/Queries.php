<?php
class Queries
{
    // DSN / Data Source Name
    private $dsn = "mysql:dbname=ap;host=localhost;charset=utf8";
    private $user = "ap";
    private $password = "ap";
    private $db;
    function  __construct()
    {
        try {
            $this -> db = new PDO($this -> dsn, $this -> user, $this -> password);
            $this -> db -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        }
        catch (PDOException $e) {
            Log::logWrite($e -> getMessage());
        }
    }
    function insert($sql) {
        return $this -> db -> exec($sql);
    }
    function select($sql)
    {
        return $this -> db -> query($sql);
    }
    function __destruct()
    {
        unset($this -> db);
    }
}
