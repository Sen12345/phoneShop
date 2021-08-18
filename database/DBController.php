<?php

class DBController
{
    //DB connection properties
    protected $host = "localhost";
    protected $user = "root";
    protected $password = "";
    protected $db = "shopee";

    //Connection property
    public $con = null;

    // Call constructor
    public function __construct(){
    $this->con = mysqli_connect($this->host,$this->user,$this->password,$this->db);
    if($this->con->connect_error){
        echo "Failed " . $this->con->connect_error;
    }

    //echo "Connection successful";

    }

    public function __destruct(){
        $this->closeConnection();
    }


    protected function closeConnection(){

        if($this->con != null){
            $this->con->close();
            $this->con = null;
        }

}

}
