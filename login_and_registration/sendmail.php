<?php
include "nav.php";
require "connection.php";

$id = $_SESSION["key"] ?? "";
$row = getCurd("$id");

$message = "To verify you mail please visit this link. http://localhost/php_projects/login_and_registration/sendmail.php";
$from = "From: testforlorem02@gmail.com";

if (mail("aizubair9866@gmail.com","Mail Varification",$message,$from)) {?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Varification - Send Varification Mail</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-6">
               <div class="card">
                   <div class="alert alert-info w-100 p-3">
                       A mail send to you belongs to your account. Please, check you G-Mail inbox.
                   </div>
                   <div class="card-body">
                       <div class="d-flex justify-content-evenly align-items-baseline">
                            <a class="btn btn-info btn-lg" href="sendmail.php">Don't get mail ?</a>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
}else {
    echo "not send ";
}
?>