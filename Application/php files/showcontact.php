<?php
 $host='localhost';
 $user='root';
 $password_con='';
 $db='application';
 $con=mysqli_connect($host, $user, $password_con, $db);
$result="";
$select="SELECT * FROM contacts";
                    if($query=mysqli_query($con,$select)){
                        if(mysqli_num_rows($query)>0){
                                while($row = mysqli_fetch_array($query)){
                                $result.="<tr>
                                <td>$row[id]</td>
                                <td>$row[name]</td>
                                <td>$row[email]</td>
                                <td>$row[phone]</td>
                                <td>$row[title]</td>
                                <td>$row[created]<button type='button' id='$row[id]'>button</button></td>
                                </tr>";
                                  
                               }
                        }
                    }
                    return $result;
?>