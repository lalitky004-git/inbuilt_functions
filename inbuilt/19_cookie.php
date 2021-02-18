<?php
 session_start();

 $SESSION1["name"]= "lalit";
 echo $SESSION1["name"];
 session_destroy();
 