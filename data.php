
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

echo '
    <table border="1">
      <tr>
        <th>Name</th>
        <th>Class</th>
        <th>ID</th>
        <th>Address
          <table border="1">
            <tr>
              <th>Dist</th>
              <th>Sub_Dist</th>
              <th>Post</th>
              <th>Village</th>
              <th>Post_Code</th>
            </tr>
            <tr>

            </tr>
          </table>
        </th>
        <th> Student Querry
          <table border="1">
            <tr>
              <th>Academic</th>
              <th>Result</th>
            </tr>
          </table>
        </th>
      </tr>';
       foreach ($student_into as $students) {
          print_r($students);
      echo '
      <tr>
        <th>'.$students["name"].'</th>
        <th>'.$students["class"].'</th>
        <th>'.$students["id"].'</th>
        <th>
          <table border="1">
            <tr>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
            <tr>

            </tr>
          </table>
        </th>
        <th>  
          <table border="1">
            <tr>
              <th></th>
              <th></th>
            </tr>
          </table>
        </th>
      </tr>';
  
      };
      echo '</table>';
    // print_r($input_name);
    
  ?>
