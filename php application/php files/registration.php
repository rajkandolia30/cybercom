<?php
if(isset($_POST['submit'])){
    $prefix=$_POST['prefix'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $pass=$_POST['password'];
    $confirmpass=$_POST['confirm_password'];
    $password="";
    $information=$_POST['information'];
    @$terms=$_POST['terms'];
        if(empty($prefix)
        || empty($firstname)
        || empty($lastname)
        || empty($email)
        || empty($mobile)
        || empty($pass)
        || empty($confirmpassword)
        || empty($information)
        || empty($terms)){
            if(empty($prefix)
            && empty($firstname)
            && empty($lastname)
            && empty($email)
            && empty($mobile)
            && empty($pass)
            && empty($confirmpass)
            && empty($information)
            && empty($terms)){
                echo 'Please enter all fields';
            } else {
                if(empty($prefix)){
                    echo 'please enter prefix'.'<br>';
                }
                if(empty($firstname)){
                    echo 'please enter first name'.'<br>';
                }
                if(empty($lastname)){
                    echo 'please enter last name'.'<br>';
                }
                if(empty($email)){
                    echo 'please enter email'.'<br>';
                }
                if(empty($mobile)){
                    echo 'please enter mobile number'.'<br>';
                }
                if(empty($pass)){
                    echo 'please enter password'.'<br>';
                }
                if(empty($confirmpass)){
                    echo 'please reconfirm the password'.'<br>';
                }
                if(empty($information)){
                    echo 'please enter information'.'<br>';
                }
                if(empty($terms)){
                    echo 'please agree terms and conditions'.'<br>';
                }
            }    
        }    
                if(!empty($prefix) 
                && !empty($firstname)
                && !empty($lastname)
                && !empty($email)
                && !empty($mobile)
                && !empty($pass)
                && !empty($confirmpass)
                && !empty($information)
                && !empty($terms)){
                    if($pass != $confirmpass){
                        echo 'Please enter same password';
                    } else {
                        $password=md5($pass);
                    }
                    $host='localhost';
                    $user='root';
                    $password_con='';
                    $database='blog';
                    $last_login="";
                    $date=date("Y-m-d @ h:i:sa");
                    $con=mysqli_connect($host, $user, $password_con ,$database);
                        if($con){
                            echo 'connected to '.$database.'<br>';
                        $insert="INSERT INTO `user`(`id`, `prefix`, `firstname`, `lastname`, `mobile`, `email`, `password`, `last_login_at`, `information`, `created_at`, `updated_at`) VALUES ('','$prefix','$firstname','$lastname','$email','$mobile','$password','$last_login','$information','$date','$date')";
                            if(mysqli_query($con,$insert)){
                                echo '<strong>Inserted data succesfully.</strong><br>';
                            } else {
                                echo '<strong>There was an error inserting data<br>';
                            }
                        } else {
                                echo 'connection not established'.'<br>';
                        }
           
                }
}
?>
<html>
    <head>
    <title>registration</title>
    </head>
<form action="registration.php" method="POST">
<table>
    
    <tr>
    <td><h3>Register</h3></td>
    </tr>

    <tr>
    <td>Prefix</td>
    <td><select name="prefix" id="prefix">
        <option value="" selected disable></option>
        <option value="mr">Mr</option>
        <option value="mrs">Mrs.</option>
        <option value="ms">Ms</option>
        </select></td>
    </tr>

    <tr>
    <td>First Name</td>
    <td><input type="text"  name="firstname"  id="firstname"></td>
    </tr>

    <tr>
    <td>Last Name</td>
    <td><input type="text"  name="lastname"  id="lastname"></td>
    </tr>
    
    <tr>
    <td>Email</td>
    <td><input type="email" name="email"  id="email"></td>
    </tr>

    <tr>
    <td>Mobile Number</td>
    <td><input type="number" name="mobile"  id="mobile"></td>
    </tr>

    <tr>
    <td>Password</td>
    <td><input type="password" name="password"  id="password"></td>
    </tr>

    <tr>
    <td>Confirm Password</td>
    <td><input type="password"  name="confirm_password"  id="confirm_password"></td>
    </tr>

    <tr>
    <td>Information</td>
    <td rowspan="2"><textarea rows="3" cols="20" name="information"  id="information"></textarea></td>
    </tr>

    <tr>
    <td></td>
    </tr>

    <tr>
    <td colspan="2"><input type="checkbox"  name="terms"  id="terms">Hereby,I Accept Terms & Cnditions.</button></td>
    </tr>

    <tr>
    <td colspan="2"><input type="submit"  name="submit" value="SUBMIT"></td>
    </tr>
</table>
</form>
</html>