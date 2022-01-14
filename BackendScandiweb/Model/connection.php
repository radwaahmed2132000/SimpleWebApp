<?php

class DBConnection
{
    public $serverName = 'localhost'; // server ip
    public $dbUserName = 'id18281151_radwa'; // server acess username
    public $dbUserNamePass = '<l~S47Rjh!ws~*~_';      // the password of the specified username, in this case there's no password, http://localhost/phpmyadmin/server_privileges.php?viewing_mode=server formore info
    public $dbName = 'id18281151_db_task';     // database name
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
            // echo "failed";
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
