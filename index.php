<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> PHP test </title>
</head>

<style>

  input {
    box-sizing: border-box;
  }
  input[type=number] {
    padding: 5px 10px;
    margin: 5px;
    font-size: 15px;
  }

  input[type=text], input[type=email],input[type=phone] {
    padding: 5px 10px;
    margin: 5px;
    font-size: 15px;
  }

  input[type=submit] {
    padding: 5px;
    font-size: 15px;
    margin: 5px;
  }


</style>

<body>
<?php




$host_name = "localhost";
$user_name  = "root";
$password = "";
$db_name = "myDb";



$conn_to_server = mysqli_connect($host_name, $user_name, $password);
if ($conn_to_server) {
  # code...
  echo "server connected ";
} else { 
  echo "provlem to connect server" .mysqli_connect_error();

};
echo "<br>";

//connect to database 

$conn_to_db = mysqli_connect($host_name,$user_name,$password,$db_name);
if ($conn_to_db) {
  # code...
  echo "Db connected " ;
} else {
  echo "Here an provlem to connect to database" .mysqli_connect_error();
};

echo'<br>';






// 
// $number = [1,5,7];
// echo (max($number));
// echo'<br>';
// echo (min($number));

//CATCH FORM DATA BR SELF

$first_number = $_GET['first_number'] = 20;
$second_nuber = $_GET['second_number'] = 22;
$last_number = $_GET["last_number"] = 25;

$cgpa_number = $_GET["cgpa_number"] = 75;

// make number input to an array, that it much easier to comp...
$arrar_contain_number = [
  $first_number,$second_nuber,$last_number
];

//cgpa condition 

$is_pass = $cgpa_number >= 60 ? "You pass." : "You Fail";
$cgpa = 0.00;
$comment = "Fail";

switch ($cgpa_number) {
  case $cgpa_number >=95 and $cgpa_number <=100:  
    $cgpa = 4.00;
    $comment = "<strong> Brilliang <strong>";
    break;
    
  case $cgpa_number >=90 and $cgpa_number <95 :
    $cgpa = 3.75;
    $comment = "<strong> Outstanding <strong>";
    break;
  case $cgpa_number >=85 and $cgpa_number <90 :
    $cgpa = 3.50;
    $comment = "<strong> Very Good <strong>";
    break;
  case $cgpa_number >=80 and $cgpa_number <85 :
    $cgpa = 3.00;
    $comment = "<strong> Good <strong>";
    break;
  case $cgpa_number >=75 and $cgpa_number <80:
    $cgpa = 2.50;
    $comment = "<strong> Not enough <strong>";
    break;
  case $cgpa_number >=70 and $cgpa_number <75:
    $cgpa = 2.00;
    $comment = "<strong> Too Less <strong>";
    break;
  case $cgpa_number >=65 and $cgpa_number <70 :
    $cgpa = 1.50;
    $comment = "<strong> Have to read more <strong>";
    break;
  case $cgpa_number >=60 and $cgpa_number <65:
    $cgpa = 1.00;
    $comment = "<strong> Must read more <strong>";
    break;
  default:
  $cgpa = 0.00;
  $comment = "<strong> Waiting for next time <strong>";
    break;
}

//make $cgpa int to float 
$cgpa_to_float = number_format($cgpa, 2);

echo'<br>';
$name = "amimul ihsan zubair <br>";


//function for print
function print_e ($item) {
  echo "<br>";
  echo  $item ;
}

function print_v ($item) {
  echo "<br>";
  var_dump($item);
}

//to ser array spacepic item
function show_indexed_item ($m_array, $index) {
  echo "<br>";
  // if (in_array($index, $m_array)) {
  //   echo "$index indexed item is:  $m_array[$index]" ;
  // } else {
  //   echo "$index index not abailavle in array.";
  // };
  
  echo "$index index is : $m_array[$index]";
};

function show_array_item ($m_array) {
  foreach ($m_array as $items) {
    echo "$items ";
  }
};
//custom function end



//custom prectics
// $student = [
//   "zubair","rayhan","ramim","tamin",
// ];
// sort($student);
// show_array_item($student);
// show_indexed_item($student, 2);


// ;
// echo("<h2>*input data pass by POST Method");

?>



<!--
this form data submitted to server..

-->

<!--
  Add contact button bellow
-->
<div class="">
  <button style="background-color: blue; padding:5px 10px; border:none"> <a href="add_contact.php" style="color: white; font-size:15px;
  text-decoration:none;">Add contact</a> </button>
</div>
<table >

<style>
  th, td {
    padding: 5px 15px;
  }
</style>

  <thead>
    <tr >
      <th style="border: 1px solid black; ">Id</th>
      <th style="border: 1px solid black; ">Nmae</th>
      <th style="border: 1px solid black; ">Phone</th>
      <th style="border: 1px solid black; ">E-manil</th>
      <th style="border: 1px solid black; ">Action</th>
    </tr>
  </thead>
  <tbody>
   <?php


   $get_data = "SELECT * FROM user_info";
   $result = mysqli_query($conn_to_db,$get_data);

   while ($row = mysqli_fetch_assoc($result)) {
    echo '
    <tr>
      <td>' .$row["id"]. '</td>
      <td>' .$row["name"]. '</td>
      <td>' .$row["phone"]. '</td>
      <td>' .$row["email"]. '</td>
      <td>
      <button style="backgound-color:blue; color:black; padding:5px 10px"> Update </button>
      <button style="backgound-color:blue; color:black; padding:5px 10px"> Delet </button>
      </td>
    </tr>';
  }


   ?>
  </tbody>
</table>




<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="get" style="margin:auto;">

 <br>
  <fieldset>
    <legend> Test Number function </legend>
    <span>*This form data show PHP_SELF page</span>
    <h2>Giver three number to see which is min or max</h2>
    
    <input type="number" name="first_number" id="f_numbere" placeholder="First numver" autofocus>
    <input type="number" name="second_number" id="s_number" placeholder="second number">
    <input type="number" name="last_number" id="l_number" placeholder="last number">
    <input type="submit" value="submit">
    <br>


    <?php 
      echo'<br>';
      echo ("Your minimun number is: ".min($arrar_contain_number));
      echo'<br>';
      echo ("Your maximum number is: " .max($arrar_contain_number));
      echo'<br>';
    
    ?>


    <br><br>

    <h2>Giver number to see Which CGPA </h2>

    <input type="number" name="cgpa_number" id="cgpa_number" min="1" max="100" autofocus placeholder="Giver your mark: ">
    <input type="submit" value="submit">
    <br>
    <span>*Pass count from 60</span>


    <table border="1" style="text-align: center; margin:10px 5px; width:350px ">
      <tr style="font-weight: 600;">
        <th>Obtain Marks</th>
        <th>Reasult</th>
        <th>CGPA</th>
        <th>Comments</th>
      </tr>
       <?php 

      echo "
          <tr>
            <td> $cgpa_number </td>
            <td> $is_pass </td>
            <td> $cgpa_to_float </td>
            <td> $comment </td>
          </tr>
        "
         ?>
    </table>
   


    <?php 
     

    ?>
  </fieldset>
</form>
</body>
</html> 

