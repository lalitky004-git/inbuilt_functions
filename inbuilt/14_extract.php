<?php
$givenpath = 'www.example.com/public_html/index.php?q=123';
$sem = substr(strrchr($givenpath, "/"), 1);
$final = strstr($sem, '?', true);
echo $final."\n";
?>