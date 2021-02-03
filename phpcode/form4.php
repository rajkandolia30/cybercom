<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    
    if(empty($name) 
    || empty($email) 
    || empty($subject) 
    || empty($message)){
        if(empty($name) 
        && empty($email) 
        && empty($subject) 
        && empty($message)){
            echo 'Enter all fields'.'<br>';
        }else{
                if(empty($name)){
                    echo 'Enter Name'.'<br>';
                    }
                    if(empty($email)){
                                echo 'Enter Mail'.'<br>';
                            }
                            if(empty($subject)){
                                echo 'Enter Subject'.'<br>';
                            }
                            if(empty($message)){
                                echo 'Enter message'.'<br>';
                            }
       }
       
    }
    if(!empty($name) && !empty($email) && !empty($subject) && !empty($message)){
        echo 'Name '.$name.'<br>';
        echo 'Email '.$email.'<br>';
        echo 'Subject '.$subject.'<br>';
        echo 'message '.$message.'<br>';
        $error='Coudn\'t connected';
                    $host='localhost';
                    $user='root';
                    $password='';
                    $database='forms';
                    $con=mysqli_connect($host, $user, $password ,$database);
                    if($con){
                            echo 'connected to '.$database.'<br>';
                            $insert="INSERT INTO form4 (name,email,subject,message) VALUES ('$name','$email','$subject','$message')";
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
            <link rel="stylesheet" href="form4.css">
           <!-- <script src="form4.js" type="text/javascript"></script>-->
            </head> 
<table>
<form action="form4.php" method="POST" onsubmit="return valid()">

<tr class="a">
<td class="center" >CONTACR US!</td>
</tr>


<tr>
<td><input type="text" name="name" placeholder="Name..."  id="name">
<div class="error"><p id="name_error"></p></div></td>
</tr>

<tr>
<td><input type="text" name="email" placeholder="Email.."  id="email">
<div class="error"><p id="email_error"></p></div></td>
</tr>

<tr>
<td><input type="subject" name="subject" placeholder="Subject.."  id="subject">
<div class="error"><p id="subject_error"></p></div></td>
</tr>
<tr>
<td><textarea name="message" cols="22" rows="4" placeholder="Message.." id="message"></textarea>
<div class="error"><p id="message_error"></p></div></td>
</tr>

<tr>
<td><input type="submit" class="b" name="submit" value="&nbsp &nbsp &nbsp SEND MESSAGE &nbsp &nbsp &nbsp "></td>
</tr>

</form>
</table>
</html>