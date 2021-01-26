<?php
//comments single line
/*multiple line comment
in php */ 
echo '<b><u>Echo session in php</u></b><br>';
echo ('echo with bracket\'\' <br>');
print ("print with (\"\")<br>");
print "print2 with only \"\"<br>";
print ('print with (\'\')<br>');
$name ='Raj<br>';
echo $name;
$age = 23;
echo $age;

$date=22;
$month='January';
$year=2021;

echo '<br>Today\'s date is '.$date.' '.$month.' '.$year;
echo "<br>Today's date is $date $month $year";

if ($date==22)
{
    echo '<br>it\'s 22nd';
}
else if ($date==12)
{
    echo '<br>it\'s 12th';
}
else
{
    echo '<br>it\'s not either 12th or 22nd';
}
?>


<h1><?php echo $name; ?></h1>
Age:<input type="text" value="<?php echo $age; ?>">