<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    @$gender=$_POST['gender'];          
    $age=$_POST['age'];
    $file=$_POST['file'];
    @$game=$_POST['game'];
            
    if(empty($name)
    || empty($password)
    || empty($address)
    || empty($gender)
    || empty($age)
    || empty($file)
    || empty($game)){
                if(empty($name)
                && empty($password)
                && empty($address)
                && empty($gender)
                && empty($age)
                && empty($file)
                && empty($game)){
                    echo 'Please enter all  fields';
                }else {
                    if(empty($name)){
                        echo 'PLEASE ENTER THE NAME'.'<br>';
                    }
                    if(empty($password)){
                        echo 'PLEASE ENTER THE PASSWORD'.'<br>';
                    }
                    if(empty($address)){
                        echo 'PLEASE ENTER THE ADDRESS'.'<br>';
                    }
                    if(empty($gender)){
                        echo 'PLEASE SELECT GENDER'.'<br>';
                    }
                    if(empty($age)){
                        echo 'PLEASE FILL AGE'.'<br>';
                    }
                    if(empty($file)){
                        echo 'PLEASE SELECT THE FILE'.'<br>';
                    }
                }
} 
if(!empty($name) 
&& !empty($password) 
&& !empty($address) 
&& !empty($gender) 
&& !empty($age) 
&& !empty($file)){
        echo 'Name: '.$name.'<br>';
        echo 'Password: '.$password.'<br>';
        echo 'Address: '.$address.'<br>';
        echo 'Gender: '.$gender.'<br>';
        echo 'Age: '.$age.'<br>';
        echo 'File: '.$file.'<br>';
            if(empty($_POST['game'])){
                echo 'Select atleast 1 game';
            }else{
                foreach($_POST['game'] as $value){
                        echo 'Game selected: '.$value.'<br>';
                    }
                }
        }   
}    
                 
?>

<html>
    <head>
    <link rel="stylesheet" href="form1.css"></link>
    <!--<script src="form1.js" type="text/javascript"></script>-->
    </head>
<center>   
<table >
<form action="form1.php" method="POST"  onsubmit="return valid()">

<tr>
<th colspan="2"><strong>User Form</strong></th>
</tr>

<tr>
<td>Enter Name</td>
<td><input type="text" name="name" id="name"></td>
</tr>

<tr>
<td>Enter Password</td>
<td><input type="password" name="password" id="password"></td>
</tr>

<tr>
<td>Enter Address</td>
<td><textarea name="address" cols="22" rows="4" id="address"></textarea></td>
</tr>

<tr>
<td>Select Game</td>
<td><input type="checkbox" name="game[]" id="Hockey" value="Hockey" multiple>Hockey<br>
    <input type="checkbox" name="game[]" id="Football" value="Football" multiple>Football<br>
    <input type="checkbox" name="game[]" id="Badminton" value="Badminton" multiple>Badminton<br>
    <input type="checkbox" name="game[]" id="Cricket" value="Cricket" multiple>Cricket<br>
    <input type="checkbox" name="game[]" id="Vollyball" value="Vollyball" multiple>Vollyball<br></td>
</tr>

<tr>
<td>Gender</td>
<td><input type="radio" name="gender" value="female" id="female">Female
    <input type="radio" name="gender" value="male" id="male">Male</td>
</tr>

<tr>
<td>Select your age</td>
<td><input type="number" placeholder="select" name="age" id="age"></td>
</tr>

<tr>
<td colspan="2"><center><input type="file" name="file" id="file"></center></td>
</tr>

<tr>
<td colspan="2"><center><input type="reset" value="Reset">
                <input type="submit" name="submit" value="Submit Form" ></td></center>
</tr>

</form>
</table>
</center>
</html>   