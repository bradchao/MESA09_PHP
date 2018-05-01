<?php
    $fp = fopen("test1/brad2.txt",'r');


    while ($c = fgetss($fp)){
       echo $c . '<br>';
    }

    fclose($fp);