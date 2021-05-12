<?php
$x=file_get_contents('https://tobia-web.wz.cz/hry/hladovy-karel/raw.txt');  
$y=1;  
$z=$x+$y;  
$fp = fopen('raw.txt', 'w');
fwrite($fp, $z);
fclose($fp);
header("Location: https://tobia-web.wz.cz/hry/hladovy-karel");
exit();
?>