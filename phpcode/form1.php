<?php
        $name=$_POST['name'];
        $password=md5($_POST['password']);
        $address=$_POST['address'];
        @$gender=$_POST['gender'];
        $age=$_POST['age'];
        $file=$_POST['file'];
        echo 'Name: '.$name.'<br>';
        echo 'Password: '.$password.'<br>';
        echo 'Address: '.$address.'<br>';
        if(empty($_POST['game'])){
            echo 'Select atleast 1 game';
        }else{
              foreach($_POST['game'] as $value){
                  echo 'Game selected: '.$value.'<br>';
              }
        echo 'Gender: '.$gender.'<br>';
        echo 'Age: '.$age.'<br>';
        echo 'File: '.$file.'<br>';
            }
     
?>

<html>
    <head>
    <link rel="stylesheet" href="form1.css"></link>
    <script src="form1.js" type="text/javascript"></script>
    </head>
<center>   
<table >
<form action="form1.php" method="POST" name="form1" >

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
<td><input type="checkbox" name="game[]" value="Hockey" multiple>Hockey<br>
    <input type="checkbox" name="game[]" value="Football"multiple>Football<br>
    <input type="checkbox" name="game[]" value="Badminton"multiple>Badminton<br>
    <input type="checkbox" name="game[]" value="Cricket"multiple>Cricket<br>
    <input type="checkbox" name="game[]" value="Vollyball"multiple>Vollyball<br></td>
</tr>

<tr>
<td>Gender</td>
<td><input type="radio" name="gender" id="gender1" value="female">Female
    <input type="radio" name="gender" id="gender2" value="male">Male</td>
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
                <input type="submit" value="Submit Form" onclick="valid()"></td></center>
</tr>

</form>
</table>
</center>
</html>   