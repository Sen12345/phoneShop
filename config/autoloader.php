<?php
//Function autoloader

spl_autoload_register("autoloader");

function autoloader($className){
    include_once("database/". $className .".php");
}