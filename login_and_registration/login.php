
<?php
 require "nav.php";


if (isset($_SESSION['key'])) {
    header("location: dashboard.php");
}

require 'connection.php';
$name_error = '';
$pass_error = '';

if (isset($_POST["login"])) {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    $data = "SELECT * FROM user WHERE user_name='$user_name'";
    $result = mysqli_query($conn, $data);
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
       if(password_verify($password,$row['password'])) {

           $_SESSION['key'] = $row['id'];
           header("location: dashboard.php");

       }else {
           $pass_error = "Password not matched !";
       }
    }else {
       $name_error = "Username not register yet. <a class='text text-info' href='register.php'> register now</a>";
    }

}

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
                <div class="col-3">
                </div>

                <div class="col-5">
                    <div class="card">
                        <div class="bg-primary text-white p-3" style="font-size:20px; text-align:center; font-weight:bold">
                            Log in
                        </div>
                    <form action="login.php" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="user_name">
                                    <label for="floatingInput">User Name</label>
                                    <strong class="text text-danger">
                                        <?php echo $name_error ?>
                                    </strong>
                                </div>

                                <div class="form-floating">
                                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                                    <label for="floatingPassword">Password</label>
                                    <strong class="text text-danger">
                                        <?php echo $pass_error ?>
                                    </strong>
                                </div><br>

                                <div>
                                    <button class="btn btn-primary btn-lg"  name="login" type="submit">Login</button>
                                </div>


                                <hr>
                            </div>
                            <div style="padding:5px 0px">
                                <div class="d-flex justify-content-evenly align-items-baseline">
                                    <p>Have an account ?</p>
                                    <a href="register.php" class="text text-info">Register now !</a>
                                </div>
                                <div style="text-align:center; padding-bottom:5px">
                                    <a href="#" class="text text-danger p-2"> Forgote Your Password ?</a>
                                </div>
                            </div>
                        
                        </div>
                    </form>
                </div>
            </div>
       </div>
    </div>
</body>
</html>