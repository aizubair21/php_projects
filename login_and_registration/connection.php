<?php

$conn = mysqli_connect('localhost','root','','user');

$key = $_SESSION["key"] ?? '';

function getData($key){
    $conn = mysqli_connect('localhost','root','','user');
    $data = "SELECT * FROM user WHERE id='$key'";
    $result = mysqli_query($conn, $data);
    if(mysqli_num_rows($result) > 0) {
        return $row = mysqli_fetch_assoc($result);
       
    }else {
        return "Not found !";
    }
}

