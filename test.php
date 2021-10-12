
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

// echo "hello ";
$number_array = [1,2,3,4,5,6,7,8,9];
echo'<pre>';
// print_r($number_array);
echo'<pre>'; 

function last_Element ($arr) {
  // $array_total_index = count($arr) - 1;
  // // echo $array_total_index;
  
  // for ($n=$array_total_index; $n >=0 ; $n--) { 
  //    $temp_array = $arr[$n] ;
  //    echo $temp_array;
  //   //  return $temp_array;
  // }
  
  return array_reverse($arr);
}

// print_r(last_Element($indexed_array));


/*PHP advanced*/ 
/*Date and time */

#"D" means weak day;
// date_default_timezone_set("Bangladesh");
// echo'<br>';
// print_r("'D' means weak day: " .date("D"));
// echo'<br>';

// #"M" means current month;
// echo'<br>';
// print_r("'M' means name of current month: " .date("M"));
// echo'<br>';

// #"Y" means full years;
// echo'<br>';
// print_r("'Y' means full year: " .date("Y"));
// echo'<br>';

// #"d" means current date of month;
// echo'<br>';
// print_r("'d' means current data of month: ". date("d"));
// echo'<br>';

// #"m" means number of month;
// echo'<br>';
// print_r("'m' means numer of month : " .date("m"));
// echo'<br>';

// #"y" means number of year;
// echo'<br>';
// print_r("'y' means just year :". date("y"));
// echo'<br>';
// echo'<br>';

// print_r("Today is :" .date("d-M-Y-D")."day");
// echo'<br>';

// #Time setting
// #"H" means 0-24 Hour
// echo'<br>';
// print_r("current time is: " .date("H"));
// echo'<br>';

// #"h" means 12-hour formate of an hour with leading 0-12

// $tomorrow = strtotime("+12 Weeks");
// echo'<br>';
// print_r(date("d-M-Y l",$tomorrow));
// echo'<br>';

// $to_day = strtotime("sunday");
// $end_day = strtotime("+6 weeks", $to_day);
// // $next_6_weeks = strtotime("+6 weeks", $to_day);

// echo "next 6 sunday : <br>";
// echo "<table> 
//   <tr>
//     <td> A/C Holder Name : Rahimunesa </td>
//     <td> A/C Status : Sving </td>
//     <td> H_Name : A. Rahim </td>
//   </tr>
// </table>";
// echo '<table border="1"> <tr> <td colspan="3">start:'.date("d/M/Y").'</td> <td colspan="3">End:'.date("d/M/Y", $end_day).'</td> </tr> <tr">';
// while ($to_day < $end_day) {
//   echo'<td>' .date("d- M ", $to_day) ."<br>".'</td>';
//   $to_day = strtotime("+1 weeks", $to_day);
// }
// echo '<tr> <tr> <td><input type="text" style="width:100px"></td> <td></td> <td></td> <td></td> <td></td> <td></td> </tr></table';

$file = fopen("dictionary.txt", "r");
$my_inpt = "amimul ihdan zubair\n";
fwrite($file, $my_inpt);
#end of file
while (!feof($file)) {
  $single_file = fgets($file, filesize("dictionary.txt"));
  echo $single_file;

} ;
fclose($file);


