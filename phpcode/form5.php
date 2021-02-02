<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(empty($email) || empty($password)){
        if(empty($email) && empty($password)){
            echo 'Please enter all fields';
        }else{
            if(empty($email)){
                echo 'Please enter email';
            }
            if(empty($password)){
                echo 'Please enter password';
            }
        }
    }
    if(!empty($email) && !empty($password)){
        echo 'E-mail: '.$email.'<br>';
        echo 'Password: '.$password.'<br>';
    }
}

?>

<html>
<head>
<link rel="stylesheet" href="form5.css">
</head>
<form action="form5.php" method="POST">
<table>
<tr><th>Sign In</th></tr>
<tr><td>E-mail address</td></tr>
<tr><td><input type="text" name="email" placeholder="mail@address.com"></td></tr>
<tr><td>Password</td></tr>
<tr><td><input type="password" name="password" id="password" placeholder="********"></td></tr>
<tr><td><center><input class="button" type="submit" name="submit" value="Sign In" ></center></td></tr>
</table>
</form>
<html>