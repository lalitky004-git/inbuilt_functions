<?php
$str='The brown fox';
$strtoins='quick';
$res = substr_replace($str,$strtoins.' ',4,0);
print $res;
?>