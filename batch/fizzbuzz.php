<?php

$value = $argv[1];

if($value % 3 == 0 && $value % 5 == 0){
    echo 'fizzbuzz'.PHP_EOL;
}else if($value % 5 == 0){
    echo 'buzz'.PHP_EOL;
}else if($value % 3 == 0){
    echo 'fizz'.PHP_EOL;
}else{
    echo $value.PHP_EOL;
}

?>