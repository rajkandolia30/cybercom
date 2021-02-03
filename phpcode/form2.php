<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $password=$_POST['password'];
    @$gender=$_POST['gender'];
    $address=$_POST['address'];
    @$month=$_POST['month'];
    $date=$_POST['date'];
    $year=$_POST['year'];
    @$status=$_POST['status'];
    @$agree=$_POST['agree'];
    $game=$_POST['game'];
    
    if(empty($name)
    || empty($password)
    || empty($gender)
    || empty($month)
    || empty($address)
    || empty($date)
    || empty($year)
    || empty($status)
    || empty($agree)
    || empty($game)){
            if(empty($name)
            && empty($password)
            && empty($gender)
            && empty($address)
            && empty($month)
            && empty($date)
            && empty($year)
            && empty($status)
            && empty($agree)){
                echo 'Please enter all fieds';
            }else{
                if(empty($name)){
                    echo 'PLEASE ENTER THE NAME'.'<br>';
                }
                if(empty($password)){
                    echo 'PLEASE ENTER THE PASSWORD'.'<br>';
                }
                if(empty($gender)){
                    echo 'PLEASE SELECT GENDER'.'<br>';
                }
                if(empty($address)){
                    echo 'PLEASE ENTER ADDRESS'.'<br>';
                }
                if(empty($month)){
                    echo 'PLEASE SELECT MONTH'.'<br>';
                }
                if(empty($date)){
                    echo 'PLEASE SELECT DATE'.'<br>';
                }
                if(empty($year)){
                    echo 'PLEASE SELECT YEAR'.'<br>';
                }
                if(empty($game)){
                    echo 'PLEASE SELECT GAMES'.'<br>';
                }
                if(empty($status)){
                    echo 'PLEASE SELECT STATUS'.'<br>';
                }
                if(empty($agree)){
                    echo 'PLEASE AGREE THE AGREEMENT'.'<br>';
                }
    }
}
if(!empty($name) 
&& !empty($password) 
&& !empty($gender) 
&& !empty($address) 
&& !empty($month)
&& !empty($date)
&& !empty($year)
&& !empty($status)
&& !empty($game)){
            echo 'Name: '.$name.'<br>';
            echo 'Password: '.$password.'<br>';
            echo 'Gender: '.$gender.'<br>';
            echo 'Address: '.$address.'<br>';
            echo 'Date: '.$month.'/'.$date.'/'.$year.'<br>';
            echo 'Marital status: '.$status.'<br>';
                if(empty($_POST['game'])){
                    echo 'Select atleast 1 game';
                }else{
                      foreach($_POST['game'] as $value){
                          echo 'Game selected: '.$value.'<br>';
                      }
                    }
        foreach($_POST['game'] as $value){
            $game.=$value.',';
        }
        
        $error='Coudn\'t connected';
        $host='localhost';
        $user='root';
        $password_con='';
        $database='forms';
        $con=mysqli_connect($host, $user, $password_con ,$database);
                if($con){
                        echo 'connected to '.$database.'<br>';
                        @$insert="INSERT INTO form2 (name,password,gender,address,birthdate,game,marital_status) VALUES ('$name','$password','$gender','$address','$date/$month/$year','$game','$status')";
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
    <link rel="stylesheet" type="text/css" href="form2.css" >
    <!--<script src="form2.js" type="text/javascript"></script>-->
    </head>
    
<table>
<form action="form2.php" method="POST" onsubmit="return valid()" >
<tr>
<td colspan="2"><strong><center>User Form</center></strong></td>
</tr>
<tr>
<ul>
<td><li>FIRST NAME</li></td>
<td><input type="text" name="name" id="name">
    <div class="error"><p id="name_error"></p></div></td>
</tr>
<tr>
<td><li>PASSWORD</li></td>
<td><input type="password" name="password" id="password">
<div class="error"><p id="password_error"></p></div></td></td>
</tr>

<tr>
<td><li>Gender</li></td>
<td><input type="radio" name="gender" id="female" value="female">Female
    <input type="radio" name="gender" id="male" value="male">Male
    <div class="error"><p id="gender_error"></p></div></td></td>
</tr>

<tr>
<td><li>ADDRESS</li></td>
<td><textarea name="address" cols="22" rows="4" id="address"></textarea>
<div class="error"><p id="address_error"></p></div></td></td>
</tr>

<tr>
<td><li>D.O.B</li></td>
<td><select name="month" id="month">
<option value="" selected disabled></option>
<option value="Jan"  >Jan</option>
<option value="Feb" >Feb</option>
<option value="Mar" >Mar</option>
<option value="Apr" >Apr</option>
<option value="May" >May</option>
<option value="Jun" >Jun</option>
<option value="Jul" >Jul</option>
<option value="Sep" >Sep</option>
<option value="Oct" >Oct</option>
<option value="Nov" >Nov</option>
<option value="Dec" >Dec</option>
</select>
<input type="number" min="01" max="31" name="date" id="date">
<input type="number" min="1950" name="year" max="2021" id="year">
<div class="error"><p id="date_error"></p></div></td>
</tr>

<tr>
<td><li>SELECT GAMES</li></td>
<td><input type="checkbox" name="game[]" value="Hockey"  multiple>Hockey
    <input type="checkbox" name="game[]" value="Football"  multiple>Football
    <input type="checkbox" name="game[]" value="Cricket"multiple>Cricket
    <input type="checkbox" name="game[]" value="Vollyball"multiple>Vollyball
    <div class="error"><p id="game_error"></p></div></td>
    </tr>

<tr>
<td><li>MARITAL STATUS</li></td>
<td><input type="radio" name="status"  value="married">Married
    <input type="radio" name="status"  value="unmarried">Unmarried
    <div class="error"><p id="status_error"></p></div></td>
</tr>
</ul>
<tr>
<td></td>
<td><input type="reset" value="Reset">
    <input type="submit" name="submit" value="Submit"></td>
</tr>

<tr>
<td></td>
<td><input type="checkbox" name="agree" id="agree">I accept this agrement
<div class="error"><p id="agree_error"></p></div></td>
</tr>

</form>
</table>
</html>