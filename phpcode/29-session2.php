<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['age'])){
    echo 'Welcome '.$_SESSION['username'].' and you are '.$_SESSION['age'].' years old';
}else {
    echo 'Please log in';
}


?>