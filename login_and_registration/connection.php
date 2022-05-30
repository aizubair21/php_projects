<?php


$conn = mysqli_connect('localhost','root','','user');

$key = $_SESSION["key"] ?? '';

if ($key) {
    $GLOBALS['auth_user'] = getData($key);
}

//echo $auth_user["user_name"];

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

function getCurd($key){
    $conn = mysqli_connect('localhost','root','','user');
    $data = "SELECT * FROM crud WHERE id='$key'";
    $result = mysqli_query($conn, $data);
    if(mysqli_num_rows($result) > 0) {
        return $row = mysqli_fetch_assoc($result);
       
    }else {
        return "Not found !";
    }
}




function isInDatabase ($user_name) {
    $conn = mysqli_connect('localhost','root','','user');
    $data = "SELECT * FROM user WHERE user_name='$user_name'";
    $result = mysqli_query($conn, $data);
    if(mysqli_num_rows($result) > 0) {
        return mysqli_fetch_assoc($result);
       
    }
}

