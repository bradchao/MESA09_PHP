<?php
    $cont = file_get_contents("books.xml");

    $xml = simplexml_load_string($cont);
    $errors = libxml_get_errors();
    foreach ($errors as $error){
        echo "ERROR: {$error}<br>";
    }

    var_dump($xml);
    echo '<hr>';
    echo $xml->getName() . ":" . $xml->count();
    echo '<hr>';
    foreach ($xml as $v){
        echo gettype($v) . ":" . $v->getName() . '<br>';
    }
    echo '<hr>';
    $attrs = $xml->book[0]->attributes();
    foreach ($attrs as $k => $v){
        echo "{$k} : {$v}<br>";
    }
    echo '<hr>';
    $cs = $xml->book[0]->children();
    foreach ($cs as $k => $v){
        echo "{$k} : {$v}<br>";
    }
    echo '<hr>';
    $as = $xml->book[0]->authors->author;
    foreach ($as as $k=>$v){
        echo "{$k} : {$v}<br>";
    }







