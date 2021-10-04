<?php
include("connection.php");

$address = [
  "district"=>"bhola",
  "sub_dist"=>"lalmohan",
  "village"=>"lord",
  "word"=>"lordhardinge",
  "word_no"=>"05",

];
$info = array(
  "name"=>"jani na",
  "f_name"=>"lokman hakim",
  "m_name"=>"romana tabassum",
);

$indexed_array = ["zubair","rayhan","kamal","king","pondith","icche nodi","mora manus","otithi pakhi","nijun","thithi"];


#show an arry by one by one with idex
function show_array_fine ($arr) {
  for ($i=0; $i <= count($arr) ; $i++) { 
    # code...
  
    print_r(" $i : $arr[$i] <br>");
  };
  
} 
echo "main array <br> ";
show_array_fine($indexed_array);

echo "<br> ";

#this function comes with only for indexed array
#if you want to remonve item from associative array, you must define the key.
#You can not remove associative or multidimentional array element by index.
#one provlem is, it returned the last index, (provlem is into one element wes removed, so last index going to be free from value).
function delete_item_from_array ($arr, $index) {
  $temp_array = [];

  #loop to get targetee aray element
  for ($i=0; $i <= count($arr) ; $i++) { 
    # code...
    $elment = $arr[$i];
    if ($i != $index) {
      # code...
      array_push($temp_array, $elment);
    }
  };
  return $temp_array;
}
echo "<br>";
show_array_fine(delete_item_from_array($indexed_array, 6));
;

echo "<br>";
$student = [
  $address, $info,
];
;

var_dump($student[0]["word_no"]);
echo "<br>";
//
function if_exists ($ar, $val) {
  $is_in_array = array_key_exists($val, $ar);
  if ($is_in_array != 1) {
    echo "'$val' not exists !";
  } else {
    $is_found = $ar[$val];

    if ($is_found != "") {
      echo " $val is : $is_found";
    } else {
      echo "Empty document !";
    }
  }
};

echo "<br>";
if_exists($info,"f_name");
// echo  (array_key_exists("village",$address));

