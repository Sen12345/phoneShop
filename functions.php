<?php
$db = new DBController();

$product = new Products($db);
$product_shuffle = $product->getData('product');
shuffle($product_shuffle);

//Cart object
$cart = new Cart($db);

////$arr = array(
////    "user_id" => 3,
////    "item_id" => 8
////);
//
//$cart->insertIntoCart($arr);


