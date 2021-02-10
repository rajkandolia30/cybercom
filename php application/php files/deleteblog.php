<?php
$host='localhost';
$user='root';
$password_con='';
$db='application';
@$id = $_GET['id'];
$con=mysqli_connect($host, $user, $password_con, $db);
    if($con){
        $delete="DELETE FROM blog_post WHERE id='$id'";
            if(mysqli_query($con,$delete)){
                echo 'Row deleted succesfully';
            } else {
                echo 'There was error deleting row';
            }
    }
?>