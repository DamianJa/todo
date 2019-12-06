<?php


class Database
{
    private $type;
    private $dbName;
    private $server;
    private $port;
    private $username;
    private $password;
    private $charset;
    private $conn = null;


    public function __construct($configs)
    {
        $this->type = $configs['type'];
        $this->dbName = $configs['dbName'];
        $this->server = $configs['server'];
        $this->port = $configs['port'];
        $this->username = $configs['username'];
        $this->password = $configs['password'];
        $this->charset = $configs['charset'];
    }
    function __destruct(){

        if ($this->conn!==null)
        {
            $this->conn = null;
        }

    }

    public function connect()
    {
        try {
            $dsn = "{$this->type}:dbname={$this->dbName};host={$this->server};port={$this->port};charset={$this->charset}";
            $this->conn = new \PDO($dsn, $this->username, $this->password);


            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

            return $this->conn;
        } catch (Exception $ex)
        {
            die($ex->getMessage());
        }
    }
    public static function query($query, $params = array())
    {

    }


}