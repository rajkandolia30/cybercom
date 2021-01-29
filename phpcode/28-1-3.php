<?php
//present host
$host=$_SERVER['HTTP_HOST'];
echo $host.'<br>';
$image=$host.'/images/';

//rediecting
ob_start();
$redirect='http://google.com';
$ifredirect='true';
if($ifredirect == true){
    header('location: '.$redirect);
}
ob_end_clean(); //or ob_end_flush();




?>