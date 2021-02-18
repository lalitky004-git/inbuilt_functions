<?php
$string1= '082307'; 
echo substr(chunk_split($string1, 2, ':'), 0, -1)."\n";
?>