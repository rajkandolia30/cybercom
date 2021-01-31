<?php
//uploading a file
@$name=$_FILES['file']['name'];
@$size=$_FILES['file']['size'];
@$type=$_FILES['file']['type'];
@$temp=$_FILES['file']['tmp_name'];
@$err=$_FILES['file']['error'];
$maxsize=1000000;
$location='Raj/';
$extention=strtolower(substr($name, strpos($name, '.')+ 1));
    if(isset($name)){
        if(!empty($name)){
             //echo '<b>Name of the file</b> '.$name.'<br><b>Size of the file</b> '.$size.'<br><b>Type of the file</b> '.$type.'<br><b>Temporary location of the file</b> '.$temp.'<br><b>Error in the file</b> '.$err.'<br>';
            if(move_uploaded_file($temp, $location.$name) && $size<$maxsize && $type=='image/jpeg' && ($extention=='jpeg' || $extention=='jpg')){
                echo 'File uploaded successfuly to <strong>'.$location.'</strong><br>';
            }else{
                echo 'Error in uploading file it might be due to:<br>1 Error in location.<br>2 Chooses file of smaller size.<br>3 File must have extesion jpeg/jpg.<br>4 File must be IMAGE(jpeg/jpg).';
            }
        }else{
            echo '<strong>Please choose the file</strong>';
        }
    }

?>

<form action="29-fileupload.php" method="POST" enctype="multipart/form-data"><br>
<b>Choose:</b><br>
<input type="file" name="file"><br><br>
<input type="submit" value="Upload">
</form>
