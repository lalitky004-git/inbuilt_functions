<?php
$cookie_name="lalit";
$cookie_value="kumar";
setcookie($cookie_name, $cookie_value, time() + (86400 *30), "/");
?>
<html>
<body>
<?php
if(!isset($COOKIE1[$cookie_name])){
    echo "Cookie is named'" . $cookie_name . "' is not set!";
}
else{
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "value is:"  . $COOKIE1($cookie_name);
}
?>
</body>
</html>