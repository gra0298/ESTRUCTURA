<?php
namespace Config;

class App{
    public $host, $dbUser,$dbpassword,$dbName;


    public function _construct(){
        $this->host=$_ENV['DB_HOST'];
        $this->dbpassword=$_ENV['DB_USER'];
        $this->dbUser=$_ENV['DB_PASSWORD'];
        $this->dbName=$_ENV['DB_NAME'];
    

    }
}





    

