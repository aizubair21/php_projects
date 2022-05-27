<?php

require "nav.php";
include "connection.php";

if(!isset($_SESSION["key"])){
    header("location: login.php");
}

$key = $_SESSION["key"] ?? "";


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
           <div style=" width:250px">
                <div class="breadcrumb">
                    <?php if(isset($_SESSION['status'])){ ?>
                        
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong><?php echo $_SESSION['status']?></strong>
                                <a href="unset_session.php" type="submit" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"></a>
                            </div>
                    
                    <?php } ?>


                    <?php if(isset($_SESSION['error'])){ ?>
                        
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong><?php echo $_SESSION["error"] ?></strong>
                            <a href="unset_session.php"  type="submit" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"></a>
                        </div>
                
                <?php } ?>


                </div>
           </div>
            <div class="row" style="margin-top: 30px; padding:10px; ">

                <div class="card">
                    <div class="card-body">
                        <div >
                            <a style="float:right;" class="btn btn-primary btn-nd" href="insert.php">Add New</a>
                        </div>
                        <?php 
                            if (isset($key)){
                        ?>
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Sl :</th>
                                        <th>Caption :</th>
                                        <th>Description :</th>
                                        <th>image :</th>
                                        <th>Action :</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php

                                    $data = "SELECT * FROM crud";
                                    $result = mysqli_query($conn, $data);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row["id"] ?? "Not Found !"; ?></td>
                                            <td><?php echo $row["caption"] ?? "Not Found !"; ?></td>
                                            <td><?php echo $row["description"] ?? "Not Found !"; ?></td>
                                            <td>
                                                <img width="70" src="image/<?php echo $row['image'] ?? "" ?>" alt="">
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center align-items-center">
                                                        <a class="btn btn-primary btn-sm" href="update.php?uid=<?php echo $row["id"] ?>"><i class="fas fa-pen"></i></a>
                                                        <form action="delete.php?id=<?php echo $row['id'] ?>" method="POST" enctype="multipart/form-data">
                                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                                        </form>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
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