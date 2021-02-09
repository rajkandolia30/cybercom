<?php
$host='localhost';
$user='root';
$password_con='';
$db='application';
@$id=$_GET['id'];
   $con=mysqli_connect($host, $user, $password_con, $db);
        if($con){
            $select="SELECT * FROM contacts WHERE id='$id'";
            if($query=mysqli_query($con,$select)){
                if(mysqli_num_rows($query) != 0 ){
                    while($row = mysqli_fetch_array($query)){
                        $name=$row['name'];
                        $email=$row['email'];
                        $phone=$row['phone'];
                        $title=$row['title'];
                        $created=$row['created'];
                    }
                } else {
                    die("no data found for $id");
                }
            }
        } else {
            echo 'error in connecting';
        }

?>