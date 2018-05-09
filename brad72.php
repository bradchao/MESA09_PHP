<?php
    $cont = file_get_contents("https://cloud.culture.tw/frontsite/trans/SearchShowAction.do?method=doFindTypeJ&category=6");

    //var_dump($cont);

//    $obj1 = new MyTest2(1,2,3);
//    foreach ($obj1 as $k => $v){
//        echo "{$k} : {$v}<br>";
//    }

    $root = json_decode($cont);
    foreach ($root as $k => $v){
        $title = $v->title;
        $showUnit = $v->showUnit;
        echo "{$title} : {$showUnit}<br>";
    }


    class MyTest2 {
        var $x, $y, $z;
        function __construct($x,$y,$z){
            $this->x = $x;
            $this->y = $y;
            $this->z = $z;
        }
    }
