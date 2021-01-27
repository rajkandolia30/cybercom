<?php
include 'header.php';
//Basic of arrays
$Food = ['Pizza', 'Pasta', 'Vegies'];
echo $Food[0].'<br>';
echo $Food[1].'<br>';
echo $Food[2].'<br>';
$Food[3]='Salad';
echo $Food[3].'<br>';
print_r($Food);
echo '<br>';

//Associative array
$Food1 = ['Pizza'=>100, 'Pasta'=>50, 'Vegies'=>80, 'salad'=>40];
echo '<br>Rs of: '.$Food[0].' is '.$Food1['Pizza'];
echo '<br>Rs of: '.$Food[1].' is '.$Food1['Pasta'];
echo '<br>Rs of: '.$Food[2].' is '.$Food1['Vegies'].'<br>';
print_r ($Food1);
echo '<br><br>';


//Multidimension alarray
$Num =['Even'=>array(2,4,6,8,10),'Odd'=>array(3,5,7,9)];
print_r($Num);
echo '<br>';
print_r($Num['Even']);
echo '<br>';
print_r($Num['Odd']);
echo '<br>';
echo $Num['Even'][0].'<br>';
echo $Num['Odd'][0].'<br>';
echo $Num['Even'][1].'<br>';
echo $Num['Odd'][1].'<br>';
echo $Num['Even'][2].'<br>';
echo $Num['Odd'][2].'<br><br>';


//Each
foreach($Num as $val => $no){
    echo '<strong>'.$val.'</strong><br>';
    foreach($no as $n){
        echo $n.'<br>';
    }
    echo '<br>';
}
?>