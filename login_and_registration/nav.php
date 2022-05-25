<?php
session_start();
if (isset($_GET["logout"])) {
    echo "log out";
    session_destroy();
    header("location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="bootstrap-5.1.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css">

</head>
<body>
    
    <div class="container">
        <nav style="box-shadow:2px 2px 2px  rgba(0,0,0, .5);">
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">login</a>
                </li>
                <?php if (isset($_SESSION['id'])) {
                    ?>
                     <li class="nav-item">
                        <a class="nav-link" href="logout.php">Log out</a>
                    </li>
                    <?php
                } ?>
            </ul>
        </nav>

    </div>


    <script src="bootstrap-5.1.0-dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-5.1.0-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>