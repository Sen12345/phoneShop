<?php
//Use to fetch data
class Products
{

    public $db = null;
    //Using dependency injection
    public function __construct(DBController $db){
        if(!isset($db->con)) return null;
        $this->db = $db;

}

//Fetch mysql dat using getData method;
public function getData($table = 'product'){
     $result =  $this->db->con->query("SELECT * FROM {$table}");

     $resultArray = array();

     while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){

         $resultArray[] = $item;

     }

     return $resultArray;
}


//Fetch mysql dat using getData method;
    public function getProduct($item_id = null, $table = 'product'){

        if(isset($item_id)) {

            $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id = {$item_id}");
            $resultArray = array();

            while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){

                $resultArray[] = $item;

            }

            return $resultArray;
        }
    }



}