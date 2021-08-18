<?php
class Cart
{
public $db = null;

public function __construct(DBController $db){
    if(!isset($db->con)) return null;
    $this->db = $db;

}

// Insert into cart table
public function insertIntoCart($params = null, $table = 'cart'){
    if($this->db->con != null){
        if($params != null){
            $column = implode(',',array_keys($params));
            $values = implode(',',array_values($params));

            $query = sprintf("INSERT INTO %s (%s) VALUES (%s)",$table,$column,$values);
            //Execute the query
           $result = $this->db->con->query($query);
           return $result;
        }
    }

   }


   public function getCartId($table = 'cart'){

     $query =  $this->db->con->query("SELECT * FROM {$table}");

     $cart_array = array();

     while($result = mysqli_fetch_array($query, MYSQLI_ASSOC)){

         $cart_array[] = $result;


     }

        return $cart_array;

    }



   //Get user_id and item_id
 public function addToCart($user_id, $item_id){
    if(isset($user_id) && isset($item_id)){
        $params = array(
            "user_id" => $user_id,
            "item_id" => $item_id
        );

        $result = $this->insertIntoCart($params);
        if($result){

            header("Location" . $_SERVER['PHP_SELF']);
        }
    }
 }

 public function getSum($arr){
    if(isset($arr)){
        $sum = 0;
        foreach($arr as $item){
            $sum += floatval($item[0]);
        }
      return  sprintf('%.2f', $sum);
    }
 }

}