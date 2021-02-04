<?php

$error='Coudn\'t connected';
$host='localhost';
$user='root';
$password_con='';
$database='forms';
//connecting to database
$con=mysqli_connect($host, $user, $password_con, $database);
                if($con){    
                           echo '<strong>Connected to Database-> '.$database.'.</strong><br>';
//select  in table
                           $select="SELECT * FROM form1";
                    if($query=mysqli_query($con,$select)){
                        if(mysqli_num_rows($query)>0){
                            echo '<strong>Connection successful.</strong><br>'.'<br>DATA OF FORM 1 IN TABLE FORM';
                            echo '<table>';
                            echo '<tr>';
                            echo '<th>'.'NAME &nbsp&nbsp'.'</th>';
                            echo '<th>'.'PASSWORD &nbsp&nbsp'.'</th>';
                            echo '<th>'.'ADDRESS &nbsp&nbsp'.'</th>';
                            echo '<th>'.'GAME &nbsp&nbsp'.'</th>';
                            echo '<th>'.'GENDER &nbsp&nbsp'.'</th>';
                            echo '<th>'.'AGE &nbsp&nbsp'.'</th>';
                            echo '<th>'.'FILe &nbsp&nbsp'.'</th>';
                            echo '</tr>';
                                while($row = mysqli_fetch_array($query)){
                                echo '<tr>';
                                echo '<td>'.$row['name'].'</td>';
                                echo '<td>'.$row['password'].'</td>';
                                echo '<td>'.$row['address'].'</td>';
                                echo '<td>'.$row['game'].'</td>';
                                echo '<td>'.$row['gender'].'</td>';
                                echo '<td>'.$row['age'].'</td>';
                                echo '<td>'.$row['file'].'</td>';
                                echo '</tr>' ; 
                               }
                            echo '</table><br>';
                        }
                    }
//select normal
                    $select="SELECT * FROM form2";
                        if($query=mysqli_query($con,$select)){
                            if(mysqli_num_rows($query)>0){
                                echo 'DATA OF FORM 2 IN NORMAL FORM';
                                while($row = mysqli_fetch_array($query)){
                                echo '<br>Name->'.$row['name'];
                                echo '<br>Password->'.$row['password'];
                                echo '<br>Gender->'.$row['gender'];
                                echo '<br>Address->'.$row['address'];
                                echo '<br>Airthdate->'.$row['birthdate'];
                                echo '<br>Game->'.$row['game'];
                                echo '<br>Status->'.$row['marital_status'].'<br><br>';
                                }
                            }
                        }
//select using where
                    $select="SELECT fname from form3 WHERE gender='female'";
                        if($query=mysqli_query($con,$select)){
                            if(mysqli_num_rows($query)>0){
                                echo 'DATA FROM FORM 3 USING WHERE<br>';
                                while($row=mysqli_fetch_array($query)){
                                    echo 'First name: '.$row['fname'].'<br>';
                                }
                            }
                        }
//select using where
                    $select="SELECT fname,lname from form3 WHERE gender='female'";
                        if($query=mysqli_query($con,$select)){
                            if(mysqli_num_rows($query)>0){
                                echo 'DATA FROM FORM 3 USING WHERE<br>';
                                while($row=mysqli_fetch_array($query)){
                                    echo 'First name: '.$row['fname'].'<br>';
                                    echo 'Last name: '.$row['lname'].'<br>';
                                }
                            }
                        }
//update                    
                    $update="UPDATE form3 SET birthdate='1/Jul/2001' WHERE birthdate='1' ";
                        if($querry=mysqli_query($con,$update)){
                            echo 'Row updated<br><br>';
                        }else{
                            echo 'There was error updating row<br>';
                        }
//deleting rows
                    $delete="DELETE FROM form5 WHERE email='abc@gmail.com'";
                        if(mysqli_query($con,$delete)){
                            echo 'Row deleted succesfully<br><br>';
                        }else{
                            echo 'There was error deleting row<br>';
                        }
//joins
$right_join="SELECT `form1`.`name`,`form2`.`name` FROM `form1` RIGHT JOIN `form2` ON `form1`.`name` = `form2`.`name`";
$left_join="SELECT `form1`.`name`,`form2`.`name` FROM `form1` LEFT JOIN `form2` ON `form1`.`name` = `form2`.`name`";
$join="SELECT `form1`.`name`,`form2`.`name` FROM `form1` JOIN `form2` ON `form1`.`name` = `form2`.`name`";
$like="SELECT `name`,`password`,`game`,`gender` FROM `form1` WHERE `name` like 'abc'";
$not_like="SELECT `name` FROM `form1` WHERE `name` NOT LIKE 'abc'";     //like '%a' 
$distinct="SELECT DISTINCT `names`,`email` FROM `form2`";       //remove duplicate data
?>
<form action="1-database.php" method="POST">
NAME:
<input type="text" name="name">
<br><input type="submit" name="submit"><br><br></form>

<?php
//find the name from
/*if(isset($_POST['name']) && isset($_POST['submit'])){
    $name=$_POST['name'];
    $submit=$_POST['submit'];
        if(!empty($name)){
            $query="SELECT name FROM form2 WHERE name like '%".mysqli_real_escape_string($name)."%' ";
            $query_run=mysqli_query($con,$query);
            echo 'ok';
            if(mysqli_num_rows($query)>0){
                while($query_row = mysqli_fetch_assoc($query_run)){
                    echo $query['name'];
                }
            }else{
                echo 'not found';
            }
        }
}
//hit counter
function update_counter(){
    global $con;
    $query="SELECT 'count' FROM hit_counter";
    if($query_run=mysqli_query($con,$query)){
        $count=mysqli_fetch_array($query,0,'count');
        $count_inc=$count+1;
        if($upadte="UPDATE hit_counter SET 'count'='$count_inc'")
        {
            echo 'ok';
        }
        
    }else{
        echo 'error';
    }
}
update_counter(); */                   
                }else{
                    echo $error;
                }
//closing connection
                if(mysqli_close($con)){
                    echo '<strong>Connection close</strong>';
                }
                else{
                    echo 'Error in closing connection';
                }

?>