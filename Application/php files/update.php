<?php
$host='localhost';
$user='root';
$password_con='';
$db='application';
@$id=$_GET['id'];
$name=$_GET['name'];
$email=$_GET['email'];
$phone=$_GET['phone'];
$title=$_GET['employee'];
$created=$_GET['created'];
    if(empty($name) && empty($email) && empty($phone) && empty($title) && empty($created)){
       echo 'Please enter all value';
    }else{
    $con=mysqli_connect($host, $user, $password_con, $db);
        if($con){
            $select="SELECT * FROM contacts WHERE id='$id'";
            if($query=mysqli_query($con,$select)){
                if(mysqli_num_rows($query)>0){
                    $update = "UPDATE contacts SET `name`='$name',`email`='$email',`phone`='$phone',`title`='$title',`created`='$created' WHERE id='$id'";
                        if($query=mysqli_query($con,$update)){
                            echo 'Row updated succesfully';
                        } else {
                             echo 'There was error updating row';
                        }
                } else {
                    echo 'no data found';
                }
            }
        } else {
            echo 'error in connecting';
        }
    }
?>