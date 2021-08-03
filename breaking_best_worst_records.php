<?php

echo '<h1>PROBLEM SOLVING_breaking best worst records  </h1>';
function printArray($arr){
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}



function breakingRecords($score) {
    $max = $score[0]; $min = $score[0]; $cmx = 0; $cmn = 0;
    for($i=1; $i<count($score); $i++) {
        if ($score[$i] > $max) {
            $cmx++;
            $max = $score[$i];
        }
        if ($score[$i] < $min) {
            $cmn++;
            $min = $score[$i];
        }
    }
    
    return [$cmx, $cmn];

}
$score = [10,5,20,20,4,5,2,25,1];
$records = breakingRecords($score);
printArray($records);