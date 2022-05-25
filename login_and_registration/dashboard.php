<?php

require "nav.php";
include "connection.php";

if(!isset($_SESSION["key"])){
    header("location: login.php");
}

$key = $_SESSION["key"] ?? "";
$row = getData($key);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <div class="main_body" >
       <div class="container">
            <div class="row" style="margin-top: 30px; padding:10px; ">

                <div class="card">
                    <div class="card-body">
                        <?php 
                            if (isset($key)){
                        ?>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name :</th>
                                        <th>User Name :</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td><?php echo $row["name"] ?? "Not Found !"; ?></td>
                                        <td><?php echo $row["user_name"] ?? "Not Found !"; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        <?php
                            }else {
                                ?>
                                    <div class="alert alert-warning">
                                        Not Login Yet. please <a class="text text-info" href="login.php">login</a> at first.
                                    </div>
                                <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
       </div>
    </div>
</body>
</html>