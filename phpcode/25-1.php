<?php
include 'header.php';
// die and exit
echo 'Hello';
//die(); or exit();
echo ' World<br>';
    if(1){
        echo 'on if loop';
    }else{
        //die('if loop terminated'); //or using exit('');
    }


//expression matching for matching sub string
$string='Hello my name is raj';
    if(preg_match('/not/', $string)){
        echo '<br>match found';
    }else{
        echo '<br>match not found<br>';
    }


//functions
function Name(){
    echo 'raj<br>';
}
Name();

function Sum($x,$y){
    return $x+$y;                   // or echo $x+$y;
}
echo Sum(50,10).'<br>';
echo Sum(40,1.5).'<br>';            //in floating point
echo Sum(10,20,13).'<br>';          //omit third

function todayDate($date1,$date2,$date3){
    echo $date1.' '.$date2.' '.$date3.'<br>';
}
todayDate('Monday',21,2021);
todayDate(21,'monday',2021);
todayDate(21,2021,'monday');

function division($x,$y){
    return $x/$y;
}
$sum=division(sum(10,10),sum(0,5));
echo $sum.'<br>';

//echo $user_ip = $_SERVER('REMOTE_ADDR');

function display(){
    global $sum;                    //variable from outside
    echo $sum.'<br>';
}
display();

//string
$string = 'This is string.....hello every one';
$string_word_count =  str_word_count($string);  //($string,1,'.&@#');converts to array
//print_r($string_word_count);                  //defines all symbols in uper arguments
echo $string_word_count;

$string_shuffled = str_shuffle($string);
echo '<br>'.$string_shuffled.'<br>';

$half = substr($string_shuffled,  0, 5);      
echo $half.'<br>';

$string_reversed = strrev($string);        
echo $string_reversed;

$string1='this is my practice session about php';
$string2='this is php session';
similar_text($string1, $string2, $result);
echo '<br>similarity: '.$result;

$string_length=strlen($string1);
echo '<br>length is '.$string_length;
echo '<br>length is '.strlen($string2).'<br>';

$string4='&nbsp&nbsp This is string with space.&nbsp&nbsp';   
echo '1'.$string4.strlen($string4).'<br>';                  //
echo '2'.trim($string4).strlen($string4).'<br>';
echo '3'.ltrim($string4).strlen($string4).'<br>';
echo '4'.rtrim($string4).strlen($string4).'<br>';

$string5 = 'This is <html> tag'.'<br>';  //
echo addslashes($string5);
echo htmlentities($string5).'<br>';
echo htmlentities(addslashes($string5));
?>


