<?php

if(isset($_GET['day'])
    && isset($_GET['date'])
    && isset($_GET['year'])){
        $day=htmlentities($_GET['day']);
        $date=htmlentities($_GET['date']);
        $year=htmlentities($_GET['year']);
        if(!empty($day)
            && !empty($date)
            && !empty($year)){
                echo 'So the date is: '.$day.' '.$date.' '.$year;
            }else{
                echo 'Please fill all fields';
            }
        }
?>
<form action="28-1-9.php" method="GET">
<strong>Day:</strong><input type="text" name="day"><br><br>
<strong>Date:</strong><input type="text" name="date"><br><br>
<strong>Year:</strong><input type="text" name="year"><br><br>
<input type="submit" name="submit" value="submit"><br>
</form>

<?php
$match='password';
if(isset($_POST['password'])){
    $password=$_POST['password'];
    if(!empty($password)){
        if($password==$match){
            echo 'Password matched';
        }else{
            echo 'Password not matched';
        }

    }else{
        echo 'Please enter a password';
    }

}
?>
<form action="28-1-9.php" method="POST">
<strong>Password:</strong><input type="password" name="password"><br><br>
<input type="submit" name="submit" value="submit">
</form>