<?php

function show_array_with_index ($arr) {
  echo "<br>";
  for ($i=0; $i <= count($arr) ; $i++) { 
    print_r(" $i : $arr[$i] <br>");
  };
  echo "<br>";
};

function show_array_item ($m_array) {
  echo "<br>";
  foreach ($m_array as $items) {
    echo "$items ";
  }
  echo "<br>";
};

function show_indexed_item ($m_array, $index) {
  echo "<br>";
  if (in_array($index, $m_array)) {
    echo "$index indexed item is:  $m_array[$index]" ;
  } else {
    echo "$index index not abailavle in array.";
  };
  echo "<br>";
};

function delete_item_from_array ($arr, $index) {
  $temp_array = [];
  #loop to get targetee aray element
  if (array_key_exists($index, $arr) != 0) {
    
    for ($a=0; $a <= count($arr); $a++) { 
      $elment = $arr[$a];
      /*push element to temp_array one by one #without targeted index*/
      if ($a != $index) {
        array_push($temp_array, $elment);
      }
    };
    /*delet last index, as one of item is missing, but index are still*/

    array_pop($temp_array);
    echo "deleted $index index from array";
    return $temp_array;
  } else {
    return $index ."not found in array";
  };
};

function min_max ($arr){
  $str_item = [];
  $str_len  = '';
  $minimun_value = 0;
  $maximun_value = 0;


  for ($a=0; $a <count($arr) ; $a++) { 

    $str_len = strlen($arr[$a]);
      array_push($str_item, $str_len);
  }

  // print_r($str_item);

  // get minimum and manimun value, it contains string number whitch is more big or less
  $min = min($str_item);
  $max = max($str_item);


  //get minimun and maximun index and then get min and max value from trageted arry;
  $maximun_value = $arr[array_search($max,$str_item)];
  $minimun_value = $arr[array_search($min, $str_item)];
 
  $value = [ $minimun_value, $maximun_value] ;
  var_dump($value);
  return $value;


};