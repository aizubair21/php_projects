
<?php

require "nav.php";
include 'connection.php';

if (isset($_SESSION['key'])) {
    header("location: dashboard.php");
}

$name_error = "";
$user_name_error = "";
$email_error = "";
$phone_error = "";
$password_error = "";
$error = '';


if (isset($_POST['register'])) {

    $name = $_POST["name"];
    $user_name = $_POST["user_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    if ($user_name == '') {
        $user_name_error = 'Required fill ';
    }elseif($name == ''){
        $name_error = 'Required fill ';
    }elseif($email == ''){
        $email_error = 'Required fill ';
    }elseif($password == ''){
        $password_error = 'Required fill ';
    }else {

        $data = "SELECT * FROM user WHERE user_name='$user_name'";
        $result = mysqli_query($conn, $data);
        $row = mysqli_fetch_assoc($result);
        if(mysqli_num_rows($result) > 0){
            $user_name_error = $user_name." already exists!.";

            if(strlen($_POST['password']) <8 ){
                $password_error = "Password at lest 8 digit.";
            }

        }else {
            if(strlen($_POST['password']) < 8 ){
                $password_error = "Password at lest 8 digit.";
            }else {
               $sql = "INSERT INTO user (name, user_name, email, phone, password) VALUES ('$name','$user_name','$email','$phone','$password')";
                $_SESSION["register"] = "register";
                header("localtion: login.php");
                if (mysqli_query($conn, $sql)) {
                    $name = '';
                    $user_name = '';
                    $email = '';
                    $phone = '';
                }

            }
        }
    }
    // 
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

                <div class="col-6">
                    <div class="card">
                    <div class="bg-primary text-white p-3" style="font-size:20px; text-align:center; font-weight:bold">
                        register as new
                    </div>
                    <?php if(isset($_SESSION['register'])) { ?>
                        <div class="alert alert-success">
                            <p>Register success. <a href="login.php">Login Now</a></p>
                        </div>
                    <?php }else {?>

                   
                    <div class="card-body">

                        <form action="register.php" method="post" enctype="multipart/form-data">
                            <div class="input-group d-flex justify-content-between ">
                                <div>
                                    <label class="form-label" for="name">Name :</label>
                                    <input type="text" name="name" id="name" placeholder="Your Name..." class="form-control form-input" autofocus value="<?php echo $name ?? '' ?>">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="text text-danger">
                                        <?php echo $name_error ?>
                                    </div>
                                </div><br>
                                <div>
                                    <label class="form-label" for="user_name">User Name :</label>
                                    <input type="text" name="user_name" id="user_name" placeholder="Your username name..." class="form-control form-input" value="<?php echo $user_name ?? '' ?>">
                                    <strong class="text text-danger">
                                        <?php echo $user_name_error ?>
                                    </strong>
                                    
                                </div>
                            </div>
                            <br>
                            <div>
                                <label class="form-label" for="email ">Email  :</label>
                                <input type="email" name="email" id="email" placeholder="Your emaail..." class="form-control form-input" value="<?php echo $email ?? '' ?>">
                                <div class="text text-danger">
                                    <?php echo $email_error ?>
                                </div>
                            </div>
                                <br>
                            <div>
                                <label class="form-label" for="phone">Phone :</label>
                                <input type="phone" name="phone" id="phone" placeholder="Your phone number..." class="form-control form-input" value="<?php echo $phone ?? '' ?>">
                                <div class="text text-danger">
                                    <?php echo $phone_error ?>
                                </div>
                            </div>
                            <br>

                            <div>
                                <label class="form-label" for="Password">password :</label>
                                <input type="password" name="password" id="password" placeholder="Your password..." class="form-control form-input">
                                <strong class="text text-danger">
                                    <?php echo $password_error ?>
                                </strong>
                                <div class="text text-danger">
                                    <?php echo $error ?>
                                </div>
                            </div><br>

                            <div class="form-check">
                                <input class="form-check-input " type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                    Agree to terms and conditions
                                </label>
                                <div class="invalid-feedback">
                                    You must agree before submitting.
                                </div>
                            </div><br>

                            <div class="d-flex justify-content-between align-items-baseline">
                                <a class="btn btn-danger" href="index.php">Cancel</a>
                               <button name="register" class="btn btn-primary">Register</button>
                            </div>

                        </form>

                            <hr>
                        </div>

                        <div style="padding:8px" class="d-flex justify-content-evenly align-items-baseline">
                            <p>Already register ? </p>
                            <a href="login.php" class="text text-info">Login Now !</a>
                        </div>
                    </div>
                    <?php 
                        }
                    ?>
                </div>
            </div>
       </div>
    </div>
</body>
</html>