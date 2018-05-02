<?php
    include_once 'Bike.php';

    $myId = new TWId('', true, 0);
    echo $myId->getId() . '<br>';

    if (TWId::checkTWId($myId->getId())){
        echo 'OK';
    }else{
        echo 'XX';
    }
