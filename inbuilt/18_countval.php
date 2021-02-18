<?php
$givenarr=[1,4,2,5,5,6,2,5,8,9,1,56,12,56];
$arrCount=array();
        for($i=0;$i<14;$i++)
        {
          $key=$givenarr[$i];
          if($arrCount[$key]>=1)
            {
              $arrCount[$key]++;
            } else{
              $arrCount[$key]=1;
        }
     }
        echo "<pre>";
        print_r($arrCount);