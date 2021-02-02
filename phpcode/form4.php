<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $address=$_POST['address'];
    
    if(empty($name) 
    || empty($email) 
    || empty($subject) 
    || empty($address)){
        if(empty($name) 
        && empty($email) 
        && empty($subject) 
        && empty($address)){
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
                            if(empty($address)){
                                echo 'Enter Address'.'<br>';
                            }
       }
       
    }
    if(!empty($name) && !empty($email) && !empty($subject) && !empty($address)){
        echo 'Name '.$name.'<br>';
        echo 'Email '.$email.'<br>';
        echo 'Subject '.$subject.'<br>';
        echo 'Address '.$address.'<br>';
        }
}
?>
<html>
<head>
<link rel="stylesheet" href="form4.css">
</head> 
<table>
<form action="form4.php" method="POST">
<tr class="a"><td class="center" >CONTACR US!</tr></td>
<tr><td><input type="text" name="name" id="name" placeholder="Name..."></td></tr>
<tr><td><input type="text" name="email" placeholder="Email.."></td></tr>
<tr><td><input type="subject" name="subject" placeholder="Subject.."></td></tr>
<tr><td><textarea name="address" cols="22" rows="4" id="address" placeholder="Message.."></textarea></td></tr>
<tr><td><input type="submit" class="b" name="submit" value="&nbsp &nbsp &nbsp SEND MESSAGE &nbsp &nbsp &nbsp "></td></tr>

</form>
</table>
<html>