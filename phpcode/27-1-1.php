<?php
include 'header.php';
include_once 'header.php';

require 'header.php';
require_once 'header.php';

//Matching space using function 
$string='This is string with space';
$string1='Thisisstringwithoutspace';
function hasSpace($string){
    if(preg_match('/ /', $string)){
        echo 'It has space in it: '.$string.'<br>';
    }else {
        echo 'It does not have a space: '.$string.'<br>';
    }
}
hasSpace($string);
hasSpace($string1);

//Stringlength
echo strlen($string).'<br>';
echo strlen($string1).'<br>';

$name='Raj Kandolia';
for($i=1; $i<=strlen($name); $i++){
    echo $i.'<br>';
}

//String position
$string6='This is a string and is example of position';
$find='is';
$offset=0;
$slen=strlen($find);
echo 'Postion of ['.$find.'] in string ['.$string6.'] is: '.strpos($string6,$find,0).'<br>';
while($spos=strpos($string6,$find,$offset)){
    echo '['.$find.'] found at: '.$spos.'<br>';
    $offset=$spos+$slen;
}

//Replacing of string
$string7='This is a string, this is a string';
$replace=array('is', 'ring');
$replacewith=array('IS','RING');
echo substr_replace($string7, 'not', 23, 2).'<br>';
echo str_replace('ring','',$string7).'<br>';
echo str_replace($replace,'',$string7).'<br>';
echo str_replace($replace, $replacewith, $string7).'<br>';

//To upper and lower
echo strtoupper($string).'<strong> and </strong>'.strtolower($string1).'<br>';
if(isset($_GET['user_name']) && !empty($_GET['user_name'])){
            $user_name =$_GET['user_name'];
            $tolower=strtolower($user_name);
                
                if($tolower == 'raj'){
                     echo 'Thanks for the response!!!!.'.$tolower;
                 }
}
?>
<form action="27-1-1.php" method="GET">
Name <input type="text" name="user_name"><br>
    <input type="submit" name="submit"><br>
</form>