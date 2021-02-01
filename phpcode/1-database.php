<?php

$error='Coudn\'t connected';
$host='localhost';
$user='root';
$password='';
$database='php_database';

$con=new mysqli($host, $user, $password);               //object oriented
$con_db=new mysqli($host, $user, $password, $database);       

$con=mysqli_connect($host, $user, $password);          //procedural oriented
$con_db=mysqli_connect($host, $user, $password, $database);

if($con){    
    echo 'Connected succesfully'.'<br>';
    if($con_db){
        echo 'Connected to Database-> '.$database.'<br>';
    }else{
        echo $error.' to '.$database;
    }
}else{
    echo $error;
}




 
?>