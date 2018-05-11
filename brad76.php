<?php
    $cont = file_get_contents("books.xml");

    $xml = simplexml_load_string($cont);
    $errors = libxml_get_errors();
    foreach ($errors as $error){
        echo "ERROR: {$error}<br>";
    }



