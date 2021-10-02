
  <?php

    $db_name = "myDB";
    $servername = "localhost";
    $username = "root";
    $password = "";
    

    //connect to mysql databsase

    $conn_with_server = mysqli_connect($servername,$username,$password);
    if ($conn_with_server) {
      echo "Server connected";
    } else {
      echo" connectin failed: " .mysqli_connect_error();
    };
    echo'<br>';


    //connect to a database !

    $sql_connect_with_database = mysqli_connect($servername,$username,$password,$db_name);

    if ($sql_connect_with_database) {
      # code...
      echo ("Database connected successfully !");
    } else {echo "database not connected !" .mysqli_connect_error();};


    echo'<br>';
  

    //sql to creat table into connected Database, 

    // $sql_table = "CREATE TABLE loginForm (
    //   id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //   f_name VARCHAR(20) NOT NULL,
    //   email VARCHAR(50) NOT NULL
    //   )";
    //   //last cels of table are emiting ",".

    // if ($sql_connect_with_database->query($sql_table) === true) {
    //   # code...
    //   echo "table created ";
    // } else {
    //   echo "table is not createde ! as, " .$sql_connect_with_database->error;
    // };


    echo'<br>';


    //sql to insert Data to Database

    $sql_to_insert_data = "INSERT INTO loginForm (f_name, email) VALUE ('zubair3','zubair.mail@gmail.com')";
    if (mysqli_query($sql_connect_with_database, $sql_to_insert_data)) {
      # code...
      echo "data Insert done";
    } else {
      echo $sql_connect_with_database->error;
    }
    echo'<br>';

  ?>
