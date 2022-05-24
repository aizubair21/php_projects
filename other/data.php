
  <?php

    // $db_name = "myDB";
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    

    // //connect to mysql databsase

    // $conn_with_server = mysqli_connect($servername,$username,$password);
    // if ($conn_with_server) {
    //   echo "Server connected";
    // } else {
    //   echo" connectin failed: " .mysqli_connect_error();
    // };
    // echo'<br>';


    // //connect to a database !

    // $sql_connect_with_database = mysqli_connect($servername,$username,$password,$db_name);

    // if ($sql_connect_with_database) {
    //   # code...
    //   echo ("Database connected successfully !");
    // } else {echo "database not connected !" .mysqli_connect_error();};


    // echo'<br>';
  

    // //sql to creat table into connected Database, 

    // // $sql_table = "CREATE TABLE loginForm (
    // //   id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    // //   f_name VARCHAR(20) NOT NULL,
    // //   email VARCHAR(50) NOT NULL
    // //   )";
    // //   //last cels of table are emiting ",".

    // // if ($sql_connect_with_database->query($sql_table) === true) {
    // //   # code...
    // //   echo "table created ";
    // // } else {
    // //   echo "table is not createde ! as, " .$sql_connect_with_database->error;
    // // };


    // echo'<br>';


    // //sql to insert Data to Database

    // // $sql_to_insert_data = "INSERT INTO loginForm (f_name, email) VALUE ('zubair3','zubair.mail@gmail.com')";
    // // if (mysqli_query($sql_connect_with_database, $sql_to_insert_data)) {
    // //   # code...
    // //   echo "data Insert done";
    // // } else {
    // //   echo $sql_connect_with_database->error;
    // // }
    // // echo'<br>';



      //multidimentional associated array !
    $student_into = [
      "zubair" => [
        "name"=>"zubair",
        "class" => "Inter 1st",
        "id"=>"ABC123",
        "address" => [
          "p_addr" => [
            "district" => "Bhola",
            "sub_dist" => "lalmohan",
            "post" => "lahordhi",
            "village" => "mayakanon",
            "post_code" => "2540",
          ],
          "c_addr" => [
            "district" => "Kushtia",
            "sub_dist" => "shoilkupa",
            "post" => "shoilkupa",
            "village" => "modhukhali",
            "post_code" => "1540",
          ],
        ],
        "student_query" => [
          "academic" => "Brilliant", "result" => "Pass",
        ],
      ],
      "Rayhan" => [
        "name"=>"Rayhan",
        "class"=>"inter 2nd",
        "id"=> "ABC234",
        "address" => [
          "p_addr" => [
            "district" => "Pabns",
            "sub_dist" => "kanaipur",
            "post" => "sadhu khali",
            "village" => "mayakanon",
            "post_code" => "2540",
          ],
          "c_addr" => [
            "district" => "Jhenidhah",
            "sub_dist" => "shoilkupa",
            "post" => "sheikhpara",
            "village" => "modhupur",
            "post_code" => "1540",
          ],
        ],
        "student_query" => [
          "academic" => "Brilliant", "result" => "Pass",
        ],
      ],
    ];
    
    // array_push($input_name, $zaki,)

; 


//loop througn array 

foreach ($student_into as $key => $students) {

  ["name" => $name, "class" => $class, "id" => $id,"address" => $address, "student_query" => $student_query,] = $students;


  echo "<pre>";
 //  print_r($address);
  echo "<pre>";
  echo "<br>";

   foreach ($address as $addr_value) {
     //get all address array elemt and set to a variable
    ["district" => $p_district, "sub_dist" => $p_sub_district , "post" => $p_post, "village" => $p_village , "post_code" => $p_ppost_code, "district" => $c_district, "sub_dist" => $c_sub_district , "post" => $c_post, "village" => $c_village , "post_code" => $c_ppost_code,] = $addr_value;
   
   }


   foreach ($student_query as $student_query_element) {
     ["academic" => $comment, "result" => $result,] = $student_query_element;
   }

 
  echo "<pre>";
   // print_r($student_query["academic"]);
  echo "<pre>";

//make a table to print array element 
echo '
<style>
   th,td {
     font-size: 15px;
     text-wrap: wrap;
     padding: 2px;
   }
</style>
    <table border="1" style="text-align:center; border-collapse: collapse">
      <tr>
        <th>Name</th>
        <th>Class</th>
        <th>ID</th>
        <th>
          <table border="1" style="border-collapse: collapse">
            <tr>present Address</tr>
            <tr>
              <th style="width:20%">District</th>
              <th style="width:20%">Sub_District</th>
              <th style="width:20%">Post Name</th>
              <th style="width:20%">Village </th>
              <th style="width:20%">Post_Code</th>
            </tr>
          </table>
        </th>
        <th> Query
          <table>
          <th>Academic</th>
          <th>Result</th>
          </table>
        </th>
      </tr>
      <tr>
        <td>'.$name.'</td>
        <td>'.$class.'</td>
        <td>'.$id.'</td>
        <td>
          <table border="1" style="border-collapse: collapse; text-align: center">
            <tr>
              <td style="width:20%">'.$p_district.'</td>
              <td style="width:20%">'.$p_sub_district.'</td>
              <td style="width:20%">'.$p_post.'</td>
              <td style="width:20%">'.$p_village.'</td>
              <td style="width:20%">'.$p_ppost_code.'</td>
            </tr>
          </table>
        </td>
        <td>  
          <table border="1" style="border-collapse: collapse">
            <tr>
              <td >'.$student_query["academic"].'</td>
              <td style="width:100%">'.$student_query["result"].'</td>
            </tr>
          </table>
        </th>
      </tr>';
  
      };
      echo '</table>';
    // print_r($input_name);
  
  

  
  

  ?>