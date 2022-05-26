<?php
    session_start();
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
    <style>
        nav {
            background-color: rgba(0,0,0, 0.1);
        }
        .nav-link {
            color: black;
            font-size: 15px;
            font-weight: 500;
            text-transform: capitalize;
        }
        .active {
            color: green;
        }
        .default {
            color: black;;
        }
    </style>
    <div class="container">
        <nav style="box-shadow:0px 0px 2px  rgba(0,0,0, .5);">
            <ul class="nav justify-content-end">
               
               
                <?php if (isset($_SESSION['key'])) {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="welcome.php">Welcome</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">Dashboard</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Log out</a>
                    </li>
                    <?php
                }else {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link active <?php if(basename(__FILE__) == "index.php") { ?> active <?php }else{ ?> default <?php } ?>" aria-current="page" href="index.php">home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php if(basename(__FILE__) == "welcome.php") { ?> active <?php }else{ ?> default <?php } ?>" href="welcome.php">welcome</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="login.php">login</a>
                    </li>
                    <?php
                }  
                
                ?>
            </ul>
        </nav>

    </div>

<pre>
    <!-- <?php print_r($_SESSION); ?> -->
</pre>


    <script src="bootstrap-5.1.0-dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-5.1.0-dist/js/bootstrap.bundle.min.js"></script>
    <script>
      
    </script>
</body>
</html>