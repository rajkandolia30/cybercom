<?php
//file handlig
$directory='Raj';
    if($handle= opendir($directory. '/')){
        echo 'You are inside : \''.$directory.'\'<br>';
            while($file = readdir($handle)){
                if($file!='.' && $file!='..'){
                    echo '<a href="'.$directory.'/'.$file.'">'.$file.'</a><br>';
                    //echo '<img src"'.$directory.'/'.$file.'">'.$file.'</img><br>';
                }
            }

}

//file exist or not
$file='Raj/file.text';
if(file_exists($file)){
    echo '<br>'.'File already exists.'.'<br>';
}else{
    $handle=fopen($file, 'w');
    fwrite($handle, 'Created...First file');
    fclose($handle);
}

$file='Raj/file1.text';
if(file_exists($file)){
    echo 'File already exists.'.'<br>';
}else{
    $handle=fopen($file, 'w');
    fwrite($handle, 'Created...Second file');
    fclose($handle);
}

$file='Raj/file2.text';
if(file_exists($file)){
    echo 'File already exists.'.'<br>';
}else{
    $handle=fopen($file, 'w');
    fwrite($handle, 'Created...Third file');
    fclose($handle);
}

//deleting files
$deleted= 'Raj/file2.text';
    if(unlink($deleted)){
        echo 'File <strong>'.$deleted.'</strong> has been deleted succesfully<br>';
    }else{
        echo 'File nox exist or deleted already';
    }

//rename file
$renamefile= 'Raj/file1.text';
$torename= 'file0.text';
    if(rename($renamefile, $torename)){
        echo 'File has been renamed from <strong> '.$renamefile.' </strong>to<strong> '.$torename.'</strong> successfully.'.'<br>';
    }else{
        echo 'file not exist';
    }
?>