<?php
//timestamp
$time=time();
echo 'Current time in seconds: '.$time.'<br>';
$current_time=date('H:m:s', $time);
echo 'Current time is (hour:minute:second): '.$current_time.'<br>';  //
$current_date=date('d--D--M--Y');
echo 'Current date is (date:day:month:year): '.$current_date.'<br>';           
$timenow=date('d--D--M--Y @ H:m:s');
echo 'Current day and time '.$timenow.'<br>';
$timemodified=date('d--D--M--Y @ H:m:s', $time-1000);
echo 'Modified time '.$timemodified.'<br>';
$datemodified=date('d--D--M--Y @ H:m:s', strtotime('-2 month +2 week'));
echo 'Modified date '.$datemodified.'<br><br>';

//Random number generation
$rn=rand();
echo 'Random number: '.$rn.' maximum number: '.getrandmax().'<br>';
    if(isset($_POST['roll'])){
        $rand=rand(1, 6);
        echo 'Dice: '.$rand;
    }
?>

<form action="28-1-1.php" method="POST">
<input type="submit" name="roll" value="Roll a dice">
</form>

<?php
//present server
$script_name = $_SERVER['SCRIPT_NAME'];
echo $script_name.'<br>';
//from another
include '28-1-2.php';
if(isset($_POST['submit'])){
    echo 'Done..<br>';
}
?>