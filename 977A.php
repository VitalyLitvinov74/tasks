<?php
/**
 * Created by PhpStorm.
 * User: Vitaly
 * Date: 21.01.2019
 * Time: 23:45
 */
list($n, $k) = explode(' ', trim(fgets(STDIN)));
//$n = 512;
//$k=4;
    for($i=0; $i<$k; $i++){
        if($n%10!=0){
            $n=$n-1;
        }else{
            $n=$n/10;
        }
    }
    echo $n;

