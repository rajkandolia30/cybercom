<?php
$http_client_ip = $_SERVER['HTTP_CLIENT_IP'];
$http_x_forward = $_SERVER['HTTP_X_FORWARDED'];
$remote_addr = $_SERVER['REMOTE_ADDR'];
if(!empty($http_client_ip)){
    $ip_address=$http_client_ip;
}else if(!empty($http_x_forward)){
    $ip_address=$http_x_forward;
}else{
    $ip_address=$remote_addr;
}
echo $ip_address;

?>