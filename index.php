<?php

echo '<h1>PROBLEM SOLVING</h1>';

function timeConversion($s) {
    // Write your code here '00:01:00PM'

  $notation = substr($s,8);
  $hr = substr($s,0,2);  
  $slicedStr = substr($s,2,6);
  echo $notation;
  echo '<br/>';
  echo $hr;
  echo '<br/>';
  echo $slicedStr;

  if($notation=='PM' && $hr < 12 ){

    $hr = $hr + 12; 
  }else if($notation=='AM' && $hr==12  ){
    $hr='00';
  }

  echo '<br/>';
  echo $hr;
  echo '<br/>';
  $updatedTime = $hr.$slicedStr; 

  echo $updatedTime;
}


timeConversion('12:45:54PM');

