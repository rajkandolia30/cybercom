<?php

$handle=fopen('29-1.text','w');
fwrite($handle, 'This is my new file'."\n");
fwrite($handle, 'file practicing');
fclose($handle);

echo 'file closed';



?>