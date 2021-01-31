<?php
//Write 
/*$handle=fopen('29-1.text','w');
fwrite($handle, 'Family'."\n");
fwrite($handle, 'Member');
fclose($handle);
//echo 'file closed';*/

//Append
/*if(isset($_POST['name'])){
    $name=$_POST['name'];
    if(!empty($name)){
        $handle=fopen('29-1.text','a');
        fwrite($handle, $name."\n");
        fclose($handle);

        echo 'Current names in file: ';

        $count=1;
        $readin=file('29-1.text');
        $readin_count=count($readin);

        foreach($readin as $fname){
            echo trim($fname);
            if($count<$readin_count){
                echo ', ';
            }
            $count++;
        }
    }else{
        echo 'Please enter the text';
    }
}*/

//open a file(explode)
/*$filename='29-1.text';
$handle= fopen($filename, 'r');
$datain= fread($handle, filesize($filename));
//echo $datain;
$nameArray= explode(',', $datain);

foreach($nameArray as $name){
    echo $name.'<br>';
}
//echo $nameArray[0];*/

//implode
$nameArray =array('nirali', 'raj', 'prince', 'visu');
$string= implode('-', $nameArray);
echo $string;


?>

<form action="29-file.php" method="POST">
Name:<input type="text" name="name"><br><br>
<input type="submit" value="submit">
</form>