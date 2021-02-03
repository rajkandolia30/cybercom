<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(empty($email) || empty($password)){
        if(empty($email) && empty($password)){
            echo 'Please enter all fields'.'<br>';
        }else{
            if(empty($email)){
                echo 'Please enter email';
            }
            if(empty($password)){
                echo 'Please enter password'.'<br>';
            }
        }
    }
    if(!empty($email) && !empty($password)){
        echo 'E-mail: '.$email.'<br>';
        echo 'Password: '.$password.'<br>';
    
    $error='Coudn\'t connected';
    $host='localhost';
    $user='root';
    $password_con='';
    $database='forms';
    $con=mysqli_connect($host, $user, $password_con ,$database);
    if($con){
            echo 'connected to '.$database.'<br>';
            $insert="INSERT INTO form5 (email,password) VALUES ('$email','$password')";
            if(mysqli_query($con,$insert)){
                echo '<strong>Inserted data succesfully.</strong><br>';
            }else{
                echo '<strong>There was an error inserting data<br>';
            }
        
    }else{
            echo 'connection not established'.'<br>';
    }
}
}

?>

<html>
<head>
        <link rel="stylesheet" href="form5.css">
        <!--<script src="form5.js" type="text/javascript"> </script>-->
</head>
<form action="form5.php" method="POST" onsubmit="return valid()">
<table>

<tr>
<th>Sign In</th>
</tr>

<tr>
<td>E-mail address</td>
</tr>

<tr>
<td><input type="text" name="email" placeholder="mail@address.com" id="email">
<div class="error"><p id="email_error"></p></div></td>
</tr>

<tr
><td>Password</td>
</tr>

<tr>
<td><input type="password" name="password" id="password" placeholder="********" id="password">
<div class="error"><p id="password_error"></p></div></td>
</tr>

<tr>
<td><center><input class="button" type="submit" name="submit" value="Sign In" ></center></td>
</tr>

</table>
</form>
</html>