<?
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
$id = $_GET["deletId"];
echo $id;
echo'<br>';
$delet_data = "DELETE FROM user_info WHERE id=$id";

if (mysqli_query($conn_to_db, $delet_data)) {
  header("location:index.php");
} else {
  echo "have an error" .mysqli_error($conn_to_db);
}