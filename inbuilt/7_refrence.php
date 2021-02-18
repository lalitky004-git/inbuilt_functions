<?php 
function refer(&$ref)
{
    $ref=$ref*2;
    return $ref;
}

$val=5;
$ans=refer($val);
print_r($ans)
?>