<?php
include '28-1-5.php';
foreach($ip_blocked as $ip){
    if($ip==$ip_address){
        die('your ip address,'.$ip_address.'has been block');
    }
}
?>
<h1>WELCOME!!!!!</h1>

