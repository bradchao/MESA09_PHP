<?php
    include_once 'Bike.php';

    $brad = new People();
    $brad->setBike();
    echo $brad->bike->getSpeed();

    $you = new People();
    $you->setBike();
    $you->bike->upSpeed();
    $you->bike->upSpeed();
    $you->bike->upSpeed();
    echo $you->bike->getSpeed();


