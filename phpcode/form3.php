<?php
if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    @$gender=$_POST['gender'];
    $month=$_POST['month'];
    $date=$_POST['date'];
    $year=$_POST['year'];
    $country=$_POST['country'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $repassword=$_POST['repassword'];
    @$agree=$_POST['agree'];

    if(empty($fname)
    || empty($lname)
    || empty($gender)
    || empty($month)
    || empty($date)
    || empty($year)
    || empty($country)
    || empty($email)
    || empty($phone)
    || empty($password)
    || empty($repassword)
    || empty($agree)){
        if(empty($fname)
        && empty($lname)
        && empty($gender)
        && empty($month)
        && empty($date)
        && empty($year)
        && empty($country)
        && empty($email)
        && empty($phone)
        && empty($password)
        && empty($repassword)
        && empty($agree)){
            echo 'Please enter all fields';
        }else{
            if(empty($fname)){
                echo 'PLEASE ENTER THE FIRST NAME'.'<br>';
            }
            if(empty($lname)){
                echo 'PLEASE ENTER THE LAST NAME'.'<br>';
            }
            if(empty($month)){
                echo 'PLEASE ENTER THE MONTH'.'<br>';
            }
            if(empty($date)){
                echo 'PLEASE ENTER THE DATE'.'<br>';
            }
            if(empty($year)){
                echo 'PLEASE ENTER THE YEAR'.'<br>';
            }
            if(empty($country)){
                echo 'PLEASE ENTER THE COUNTRY'.'<br>';
            }
            if(empty($email)){
                echo 'PLEASE ENTER THE EMAIL'.'<br>';
            }
            if(empty($phone)){
                echo 'PLEASE ENTER THE PHONE'.'<br>';
            }
            if(empty($password)){
                echo 'PLEASE ENTER THE PASSWORD'.'<br>';
            }
            if(empty($repassword)){
                echo 'PLEASE ENTER THE RE-PASSWORD'.'<br>';
            }
            if(empty($agree)){
                echo 'PLEASE ACCEPT THE TERMS'.'<br>';
            }

        }        

}
if(!empty($fname)
&& !empty($lname)
&& !empty($gender)
&& !empty($month)
&& !empty($date)
&& !empty($year)
&& !empty($country)
&& !empty($email)
&& !empty($phone)
&& !empty($password)
&& !empty($repassword)
&& !empty($agree)){
    echo 'Name: '.$fname.' '.$lname.'<br>';
    echo 'Date: '.$month.$date.$year.'<br>';
    echo 'Gender: '.$gender.'<br>';
    echo 'Country: '.$country.'<br>';
    echo 'Email: '.$email.'<br>'; 
    echo 'Phone: '.$phone.'<br>';
    echo 'Password: '.$password.'<br>';
    echo 'RePassword: '.$repassword.'<br>';
                
                                
    $error='Coudn\'t connected';
    $host='localhost';
    $user='root';
    $password_con='';
    $database='forms';
    $con=mysqli_connect($host, $user, $password_con ,$database);
            if($con){
                    echo 'connected to '.$database.'<br>';
                        $insert="INSERT INTO form3 (fname,lname,birthdate,gender,country,email,phone,password,repassword) VALUES ('$fname','$lname','$date/$month/$year','$gender','$country','$email','$phone','$password','$repassword')";
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
            <link rel="stylesheet" href="form3.css">
            <!--<script src="form3.js" type="text/javascript"></script>-->
            </head>
<table>
<form action="form3.php" method="POST" onsubmit="return valid()">

<tr class="color">
<th colspan="2" class="left">Sign Up</th>
</tr>

<tr>
    <td class="right">FIRST Name</td>
    <td><input type="text" name="fname"  placeholder="Enter First Name" id="fname">
    <div class="error"><p id="fname_error"></p></div></td>
</tr>

<tr>
    <td class="right">Last Name</td>
    <td><input type="text" name="lname"  placeholder="Enter Last Name" id="lname">
    <div class="error"><p id="lname_error"></p></div></td>
</tr>

<tr>
    <td class="right">Date of Birth</td>
    <td>
        <select name="date" id="date">
        <option selected disabled value=""></option>
        <option value="date">Date</option>
        <option value="1" >1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        </select>
            <select name="month" id="month">
            <option selected disabled value=""></option>
            <option value="month">Month</option>
            <option value="January" >January</option>
            <option value="February">February</option>
            <option value="March">March</option>
            <option value="April">April</option>
            <option value="May">May</option>
            <option value="June">June</option>
            <option value="July">July</option>
            <option value="September">Sepyember</option>
            <option value="October">October</option>
            <option value="November">November</option>
            <option value="December">December</option>
            </select>
                    <select name="year" id="year">
                    <option selected disabled value=""></option>
                    <option value="year">Year</option>
                    <option value="2000" >2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    </select>
    <div class="error"><p id="date_error"></p></div></td>
</tr>

<tr>
    <td class="right">Gender</td>
    <td><input type="radio" name="gender" id="female" value="female">Female
        <input type="radio" name="gender" id="male" value="male">Male
        <div class="error"><p id="gender_error"></p></div></td>
</tr>

<tr>
    <td class="right" >Country</td>
    <td><select name="country" id="country">
            <option selected disable value=""></option>
            <option value="country">Country</option>
            <option value="India" >India</option>
            <option value="Afghanistan">Afghanistan</option>
            <option value="Albania">Albania</option>
            <option value="Algeria">Algeria</option>
            </select>
    <div class="error"><p id="country_error"></p></div></td>
</tr>

<tr>
    <td class="right">E-mail:</td>
    <td><input type="text" name="email" placeholder="Enter Email" id="email">
    <div class="error"><p id="email_error"></p></div></td>
</tr>

<tr>
    <td class="right">Phone</td>
    <td><input type="number" name="phone" placeholder="Enter Phone" id="phone">
    <div class="error"><p id="phone_error"></p></div></td>
</tr>

<tr>
    <td class="right">Password</td>
    <td><input type="password" name="password"  placeholder="Enter Password" id="password">
    <div class="error"><p id="password_error"></p></div></td>
</tr>

<tr>
    <td class="right">Confirm Password</td>
    <td><input type="password" name="repassword"  placeholder="Re-Enter Password" id="repassword">
    <div class="error"><p id="repassword_error"></p></div></td>
</tr>

<tr>
    <td class="right" colspan="2"><input type="checkbox" name="agree" value="1" id="agree">
    I Agree to the Terms of use
    <div class="error" ><p  id="agree_error" ></p></div></td>
</tr>

<tr class="color">
    <td colspan="2" class="right"><input type="submit" name="submit" value="Submit">
        <input type="submit" value="Cancel"></td>
</tr>

</form>
</tabel>
</html>