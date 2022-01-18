<?php

class DBConnection
{
    public $serverName = 'scandiwebtask.database.windows.net'; // server ip
    public $dbUserName = 'radwa';      // server acess username
    public $dbUserNamePass = 'Mamanashwa213!';      // the password of the specified username, in this case there's no password, http://localhost/phpmyadmin/server_privileges.php?viewing_mode=server formore info
    public $dbName = 'db';     // database name
    private $dbConnection;
    public static $instance;

   /**
    * constructor of connection
    * @return void
    */
    public function __construct()
    {
        $this->dbConnection = mysqli_connect($this->serverName, $this->dbUserName, $this->dbUserNamePass, $this->dbName);
        if (!$this->dbConnection) {
            echo"Failed to connect";
            die();
        }
    }
      /**
    * get instance of connection
    * @return \DBconnection
    */
    public static function getInst()
    {
        if (!self::$instance) {
            self::$instance = new DBConnection();
        }
        return self::$instance;
    }
     /**
    * get   connection
    * @return \DBconnection
    */
    public function getConnection()
    {
        return $this->dbConnection;
    }
}
