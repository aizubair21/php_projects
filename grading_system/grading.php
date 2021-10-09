
<?php
$number = $_POST["marks"];



function get_grade_by_switch ($number) {

  switch ($number) {
    case $number >=95 and $number <=100:
      
      $result = "A+";
      $great = 4.00;
      break;

    case $number >=90 and $number <95:

      $result = "A";
      $great = 3.75 ;
      break;

    case $number >=85 and $number <90;

      $result = "B+";
      $great = 3.50;
      break;

    case $number >=80 and $number <85:

      $result = "B";
      $great = 3.00 ;
      break;

    case $number >75 and $number <80:

      $result = "C+";
      $great = 2.50;
      break;

    case $number >=70 and $number <75:

      $result = "C";
      $great = 2.00;
      break;

    case $number >=65 and $number <70:

      $result = "D+";
      $great = 1.50;
      break;

    case $number >=60 and $number <=65:

      $result = "D";
      $great = 1.00;
      break;

    default:
      $result = "FAIL";
      $great = 0.00 ;
      break;
  };
  echo 
  '
  <style>
   th, td {padding: 1px 5px; text-align:center; }
  </style>
  <h3>Reasult Table</h3>
  <table border="1" style="border-collapse:collapse">
    <tr>
      <th>Marks</th>
      <th>Result</th>
      <th>CGPA</th>
    </tr>
    <tr>
      <td>'.$number.'</td>
      <td>'.$result.'</td>
      <td>'.$great.'</td>
    </tr>
  </table>
  ';
}
get_grade_by_switch($number);
;

//custom SWITCH fucntion by else if
function get_grade_by_custom_function ($number) {
  // echo $marks;

  if ($number >=95 and $number <=100) {
      
    $result = "A+";
    $great = 4.00;
  }
  else if ($number >=90 and $number <95){

    $result = "A";
    $great = 3.75 ;
  }
  else if ($number >=85 and $number <90){

    $result = "B+";
    $great = 3.50;
  }
  else if ($number >=80 and $number <85){

    $result = "B";
    $great = 3.00 ;
  }
  else if ($number >75 and $number <80){

    $result = "C+";
    $great = 2.50;
  }
  else if ($number >=70 and $number <75){

    $result = "C";
    $great = 2.00;
  }
  else if ($number >=65 and $number <70){

    $result = "D+";
    $great = 1.50;
  }
  else if ($number >=60 and $number <=65){

    $result = "D";
    $great = 1.00;
  }
  else {$result = "F"; $great = "0.00"; 
  };


  echo 
  '
  <style>
   th, td {padding: 1px 5px; text-align:center; }
  </style>
  <h3>Reasult Table (custom function)</h3>
  <table border="1" style="border-collapse:collapse">
    <tr>
      <th>Marks</th>
      <th>Result</th>
      <th>CGPA</th>
    </tr>
    <tr>
      <td>'.$number.'</td>
      <td>'.$result.'</td>
      <td>'.$great.'</td>
    </tr>
  </table>
  ';

};
get_grade_by_custom_function($number);

// echo $_POST['marks'];
// echo $button_name = $_POST["button_name"] ;
