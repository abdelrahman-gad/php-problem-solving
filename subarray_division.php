<?php

require_once('header.php');
echo '<h2>  Subarray Division </h2>';

function birthday($s, $d, $m) {
    $arraySlices=[];
    $matches = 0; // times that the array matched the conditions[sum=day ,  month = length ]
    for ($i=0; $i<count($s) ; $i++) { 
      $slice = array_slice($s,$i,$m);
    //   printArray($slice);
      array_push($arraySlices,$slice);  
    }

    for ($j=0; $j <count($arraySlices) ; $j++) { 
      if(array_sum($arraySlices[$j])==$d){
        echo  'matched <br/>';
        $matches++;
      }
    }
    return $matches;

}


$subArray = [1, 2, 1 , 3, 2];
$day = 3 ; // sum of elements slice 
$month = 2;// length of slice 

birthday($subArray, $day , $month );



