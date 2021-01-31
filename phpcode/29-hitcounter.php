<?php
//hit counter function
/*$file= '29-2.text';
function hitcounter(){
    global $file;
    $handle= fopen($file, 'r');
    $current= fread($handle, filesize($file));
    fclose($handle);
    $current_inc= $current + 1;
    
    $handle= fopen($file, 'w');
    fwrite($handle, $current_inc);
    fclose($handle);

}
echo 'Increamenting values in '. $file.'<br>';
hitcounter();*/

//unique hit counter unique user
function hit_unique(){
    $ip_address=$_SERVER['REMOTE_ADDR'];
    $ipfile= file('29-ip.text');
    foreach($ipfile as $ip){
            $ip_single=trim($ip);
            if($ip_address == $ip_single){
                $found=true;
                break;
            }else{
                $found=false;
            }
    }
    if($found == false){
        $filename='29-ipcounter.text';
        $handle1=fopen($filename, 'r');
        $cur= fread($handle1, filesize($filename));
        fclose($handle1);
        $cur_inc = $cur + 1;

        $handle1= fopen($filename, 'w');
        fwrite($handle1, $cur_inc);
        fclose($handle1);

        $handle=fopen('29-ip.text', 'a');
        fwrite($handle, $ip_address."\n");
        fclose($handle);
    }
}
hit_unique();



?>