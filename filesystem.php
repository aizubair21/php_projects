<?php

echo basename("htocs/filesystem.php",".php");
echo'<br>';
echo'<br>';
print_r(disk_total_space("../htdocs"));
echo'<br>';

$total_space = disk_total_space("../htdocs");
echo'<br>';
print_r("K B : ".$total_space/1024);
echo'<br>';
echo'<br>';
print_r("M B : ".$total_space/2048);
echo'<br>';

$myFile = fopen("dictionary.txt", "r");
while (!feof($myFile)) {

  $single_file = fgets($myFile, filesize("dictionary.txt"));
  echo'<pre>';
  print_r($single_file);
  echo'<pre>';


}

print_r(file("dictionary.txt"));
echo"<br>";

$file_array = file("dictionary.txt");
// print_r(is_array($file_array));
 for ($n=0; $n < count($file_array); $n++) { 
   echo'<br>';

   var_dump(trim($file_array[$n]));
   print_r("this line A repeted : " .substr_count(trim($file_array[$n]), "a"). " times\n");

   print_r("this line n repeted : " .substr_count(trim($file_array[$n]), "n"). " times\n");
   echo'<br>';
 }
