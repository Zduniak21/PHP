<?php

class SortedArray {
  
  var $sortedArray;
  
  function setarray($number1, $number2, $number3, $number4, $number5, $number6, $number7){
    $array = array($number1, $number2, $number3, $number4, $number5, $number6, $number7);
    $this -> sortedArray = sort($array);
  }
  
  function getSortedArray() {
    sort($this -> sortedArray);
    print_r($this -> sortedArray);
  }
}

$member1 = new SortedArray();
$member1 = setarray(11, 2, -6, 0, 6, 2, 4);
$member1 -> getSortedArray();