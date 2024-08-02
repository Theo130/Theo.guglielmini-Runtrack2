<?php

function premiers($n){
    $flag=0;
    for($i=2;$i<$n;$i++){
        if($n%$i==0){
            $v='n\'est pas premier';
            $flag=1;
            break;
        }
    }
    if ($flag==0){
        $v='est premier';
    }
    if($n==0){
        $v='n\'est pas premier';
    }
    return $v;
}



?>