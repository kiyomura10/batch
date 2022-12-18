<?php

$fp = fopen(__DIR__ . "/input.csv","r");
$i = 0;
$man =0;
$woman = 0;
while($employee = fgetcsv($fp)){
     $i++;
    if($i == 1){
     
        continue;

    }
   
    if($employee[4] == "男性"){
        $man++;
    }else{
        $woman++;
    }

}

fclose($fp);

$fpOut = fopen(__DIR__ . "/output.csv", "w");

$header = ["男性","女性"];
fputcsv($fpOut, $header);

$outputData = [$man,$woman];
fputcsv($fpOut,$outputData);

fclose($fpOut);





?>