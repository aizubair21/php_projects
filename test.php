
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> test JS in PHP </title>
  <style>

    body {
      margin: 20px ;
    }
    input {
      padding: 10px;
      font-size: 15px;
    }
  </style>
</head>
<body>
 <form action="data.php" method="GET">

  <input type="text" name="test_name" id="test_name" placeholder="<?php Echo "text input ..."; ?>" onkeyup="testInput(this.value)">

  <input type="submit" value="test"  name="submit">

  <div>
    <p id="result"></p>
  </div>

 </form>
</body>

<script>
  // function testInput(key) {
  //   document.querySelector("#result").innerHTML = key ;
  // }
</script>
</html>
<br>








<?php

;

// for ($z=1; $z <= 10 ; $z++) { 
//  echo "<div style='border: 1px solid gray; padding:5px; display:inline-block; margin:2px'>";
//   for ($y=1; $y <=10 ; $y++) { 
//     echo "$z x $y = " .$z*$y. "<br>";
//   }

// echo "</div>";
// }



echo "<br>";



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

$indexed_array = ["zubair","rayhan","kamal","king","pondith","icche" ,"nodi","mora_manus","otithi_pakhi","nijun","thithi","amar"];
// $indexed_number_array = [1,2,3,4,5,6,7,8,9,10,11];
// shuffle($indexed_number_array);
// show_array_fine($indexed_number_array);
echo "<br>";
#show an arry by one by one with idex






echo'<br>';
// function show_array_with_index ($arr) {
//   for ($i=0; $i <= count($arr) ; $i++) { 
//     print_r(" $i : $arr[$i] <br>");
//   };
// } 

#this function comes with only for indexed array
#if you want to remonve item from associative array, you must define the key.
#You can not remove associative or multidimentional array element by index.
#one provlem is, it returned the last index, (provlem is into one element wes removed, so last index going to be free from value).
// function delete_item_from_array ($arr, $index) {
//   $temp_array = [];

//   #loop to get targetee aray element
//   for ($i=0; $i <= count($arr) ; $i++) { 
//     # code...
//     $elment = $arr[$i];
//     if ($i != $index) {
//       # code...
//       array_push($temp_array, $elment);
//     }
//   };
//   return $temp_array;
// }
echo "<br>";
  
echo "<br>";
$student = [
  $address, $info,
];
echo "<br>";
//
// function if_exists ($ar, $val) {
//   $is_in_array = array_key_exists($val, $ar);
//   if ($is_in_array != 1) {
//     echo "'$val' not exists !";
//   } else {
//     $is_found = $ar[$val];

//     if ($is_found != "") {
//       echo " $val is : $is_found";
//     } else {
//       echo "Empty document !";
//     }
//   }
// };

echo "<br>";
// echo  (array_key_exists("village",$address));

// include("custom_function.php");

echo "hello ";
$number_array = [1,2,3,4,5,6,7,8,9];
echo'<pre>';
print_r($number_array);
echo'<pre>'; 

function last_Element ($arr) {
  $array_total_index = count($arr) - 1;
  // echo $array_total_index;
  
  for ($n=$array_total_index; $n >=0 ; $n--) { 
     $temp_array = $arr[$n] ;
     echo $temp_array;
    //  return $temp_array;
  }
  
}

last_Element($number_array);
echo'<br>';

function min_max ($arr ){
  $str_item = [];
  $str_len  = '';
  $minimun_value = 0;
  $maximun_value = 0;
  for ($a=0; $a <count($arr) ; $a++) { 
    $str_len = strlen($arr[$a]);
      array_push($str_item, $str_len);
  }

  print_r($str_item);
  $min = min($str_item);
  $max = max($str_item);
  $maximun_value = $arr[array_search($max,$str_item)];
  $minimun_value = $arr[array_search($min, $str_item)];
 
  $value = [ $minimun_value, $maximun_value] ;
  var_dump($value);
  return $value;


};

min_max($indexed_array);
echo'<br>';