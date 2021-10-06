
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
      $zakir = [
      "name"=>"zakir",
      "village"=>"pabna",
      "id"=>uniqid(10),
      "dipt"=>"DIS",
      ],
      $zubair = [
        "name"=>"zubair",
        "village"=>"Bhola",
        "id"=>uniqid(10),
        "dipt"=>"DIT",
      ],
      $Rayhan = [
        "name"=>"Rayhan",
        "village"=> "lord",
        "id"=>uniqid(10),
        "dipt"=>"DIT",
      ],
    ];
    
    // array_push($input_name, $zaki,)

; 

echo '
    <table border="1">
      <tr>
        <th>Name</th>
        <th>Adr</th>
        <th>ID</th>
        <th>dipt</th>
      </tr>';
       foreach ($student_into as $students) {
      echo '
      <tr>
        <td>' .$students["name"]. '</td>
        <td>' .$students["village"].'</td>
        <td>' .$students["id"] . '</td>
        <td>' .$students["dipt"].' </td>
      </tr>';
  
      };
      echo '</table>';
    // print_r($input_name);
    
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
 
    <style>
      /*style hone here*/  
    li {
      list-style-type: none;
    }
    /* .main_h {
      position: relative;
    }
    .main_h::before {
      content: "";
      position: absolute;
      top: 5px;
      left: -5px;
      transform: translate(-50%, -50%);
      width: 5px;
      height: 5px;
      background-color: green;
      border-radius: 5px;
    } */


.main_h {
  cursor: pointer;
  -webkit-user-select: none; /* Safari 3.1+ */
  -moz-user-select: none; /* Firefox 2+ */
  -ms-user-select: none; /* IE 10+ */

}

.main_h::before {
  /* content: "\25B8"; */
  content: "\229E";
  color: black;
  display: inline-block;
  margin-right: 6px;
}
.caret-down::before {
  content: "\229F";
  color: green;

}

.child {
  display: none;
}

.active {
  display: block;
  animation: all linear .5s;
}
    </style>
  </head>

  <body>
    <ul style="background-color: gray; width:250px">
      <li  > <span class="main_h">Zubair</span>
        <ul class="child">
          <li>Name :</li>
          <li>class :</li>
          <li>ID :</li>
           <li >
              <span class="main_h">P_addr</span> :
              <ul class="child">
                <li>Dist :</li>
                <li>Sub_dist :</li>
                <li>Post :</li>
                <li>Village :</li>
                <li>Post Code :</li>
              </ul>
           </li>
        </ul>
      </li>
      <li > <span class="main_h">Rayhan</span>
        <ul class="child">
          <li>Name: </li>
          <li> Class :</li>
          <li> ID :</li>
          <li > <span class="main_h">P_addr</span>
            <ol class="child">
              <li>Dist :</li>
              <li>Sub_dist :</li>
              <li>Post :</li>
              <li>Village :</li>
              <li>Post Code :</li>
            </ol>
          </li>
        </ul>
      </li>
    </ul>
  </body>

  <script>

    //js gone here
    var toggler = document.getElementsByClassName("main_h");
    var i;

    for (i = 0; i < toggler.length; i++) {
      toggler[i].addEventListener("click", function() {
        this.parentElement.querySelector(".child").classList.toggle("active");
        this.classList.toggle("caret-down");
        // console.log(this);
        
      });
    }

  </script>
  </html>
