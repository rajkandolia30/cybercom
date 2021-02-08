<?php

$name=$_GET['name'];
$email=$_GET['email'];
$phone=$_GET['phone'];
$title=$_GET['employee'];
$created=$_GET['created'];
    if(empty($name) && empty($email) && empty($phone) && empty($title) && empty($created)){
        echo 'Please enter all value';
    }else{
    $host='localhost';
    $user='root';
    $password_con='';
    $db='application';
    $con=mysqli_connect($host, $user, $password_con, $db);
        if($con){
            $insert = "INSERT INTO contacts (name,email,phone,title,created) VALUES ('$name','$email','$phone','$title','$created')";
                            if (mysqli_query($con, $insert)) {
                            echo "New record created successfully";
                            } else {
                            echo "Error";
                            }
        } else{
            echo 'error';
        }
    }

?>