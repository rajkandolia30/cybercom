<?php
$browser=get_browser(null, true);
print_r($browser);
echo '<br><br>'.$browser['browser'].'<br>';

$browser=strtolower($browser['browser']);
echo $browser.'<br>';
if($browser!='chrome'){
    echo 'Use chrome';
}
?>