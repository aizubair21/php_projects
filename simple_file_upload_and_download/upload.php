<?php

if (isset($_REQUEST["submit"])) {

    
    echo "<pre>";
        print_r($_FILES["upload_cv"]);
    echo "</pre>";
    
    if ($_FILES["upload_cv"]['name'] != ''){

        if ($_FILES['upload_cv']['type'] == 'application/pdf' ) {
           
            if (move_uploaded_file($_FILES["upload_cv"]["tmp_name"], "uploads/". $_FILES["upload_cv"]['name'])) {
                ?>
                    <script>
                        alert("Success, Upload done.");
                    </script>
                <?php
            }else {
                ?>
                    <script>
                        alert("Faild to upload ! !");
                    </script>
            <?php
            }

        }else {
            ?>
                <script>
                    alert("Only pdf file support !");
                </script>
            <?php
        }

    }else {
        ?>
            <script>
                alert("Please, Select a file first !");
            </script>
        <?php
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
    <link rel="stylesheet" href="bootstrap-5.1.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css">
</head>
<body>
    
    <div class="container">
        <div class="mian_body" style="margin:auto">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-6">
                    <div class="card" style="margin-top: 50px">
                    <div class="bg-primary text-white p-5 text-align-center" style="font-weight: 800; font-size:25px;">
                        Server Content Upload
                    </div>
                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data">
                                <legend>Upload Your File</legend>
                                <div>
                                    <label class="form-label" for="file">Select File :</label>
                                    <input type="file" class="form-control form-input" name="upload_cv" id="file">

                                </div>
                                <br>    
                                <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="bootstrap-5.1.0-dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>