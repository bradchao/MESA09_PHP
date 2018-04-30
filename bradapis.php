<?php
function createAnswer($n){
    $tmp = range(0,9);
    shuffle($tmp);
    $ret = '';
    for ($i = 0; $i < $n; $i++){
        $ret .= $tmp[$i];
    }
    return $ret;
}

function checkAB($a, $g){
    $A = $B = 0;
    for ($i = 0; $i< strlen($a); $i++){
        // 分別針對單一字元進行比對 $i
        if (substr($a, $i, 1) === substr($g, $i, 1)){
            $A++;
        }else if (strpos($a, substr($g, $i, 1)) !== false){
            $B++;
        }
    }

    return "{$A}A{$B}B";
}