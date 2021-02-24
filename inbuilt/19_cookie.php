<?php
 session_start();

 $_SESSION["name"]= "lalit";
 echo $_SESSION["name"];
 session_destroy();
 
