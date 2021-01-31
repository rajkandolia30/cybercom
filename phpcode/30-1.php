<?php
//md5
$string='rajkandolia';
//echo  md5($string);
if(isset($_POST['password'])){
    if(!empty($_POST['password'])){
        $password=md5($_POST['password']);
        $file='password.text';
        $handle=fopen($file, 'r');
        $fread=fread($handle, filesize($file));
        if($fread==$password){
            echo 'Successful.';
        }else{
            echo 'Inccorect password';
        }
        fclose($handle);
    }else{
        echo 'Please enter password';
    }
}

//senting email
$to='rajkandolia307@gmail.com';
$subject='php learning';
$body='Hello...<br>This tis practice sesseion.<br><br>Thank you';
$header='From : PHPAcademy <someone@gmail.com>';
/*if(mail($to, $subject, $body, $header)){
    echo 'Sent succesfully';
}else{
    echo 'There was an error senting Email';
}*/

//xml
$xml = simplexml_load_file('30-1.xml');
/*echo $xml->member[0]->name.' is '.$xml->member[0]->age.'<br>';
echo $xml->member[1]->name.' is '.$xml->member[0]->age.'<br>';
echo $xml->member[2]->name.' is '.$xml->member[0]->age.'<br>';*/
foreach ($xml->member as $member){
     echo $member->name.' is '.$member->age.'<br>';
    
    foreach($member->education as $school){
        echo 'School-'.$school->school.'<br>';
        echo 'diploma-'.$school->diploma.'<br>';
        echo 'degree-'.$school->degree.'<br>';
    }
}
    
    
    

    
    



?>

<form action="30-1.php" method="POST">
Password:<input type="password" name="password"><br><br>
<input type="submit" value="Submit">
</form>