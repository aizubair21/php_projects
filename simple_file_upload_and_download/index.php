<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfollio</title>
    <link rel="stylesheet" href="bootstrap-5.1.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css">
</head>
<body>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            
        }
        body {
            overflow: hidden;
        }
        .main_body  {
            height:90vh;
            background-image: url('img.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
            z-index: 1;
            
        }
        .main_body::after {
            content : "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, .5);
            z-index: -1;
        }
        #wrapper {
            position:absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 2;
        }
        .download_button {
            padding:5px 30px;
            border-radius:25px;
            font-size:20px;
            color:rgba(255,0,0,.5);
            font-weight:600; 
            background-color: white;
            position: relative;

        }
       
        .download_button::after {
            content: "";
            position: absolute;
            left: -25px;
            top: -35%;
            transform: translateY(-50%);
            background-color: red;
            width: 75px;
            height: 75px;
            transform: rotate(45deg);
            box-shadow: -2px 0px 5px 2px rgba(255, 255, 255, .5);
            transition: all linear .3s;
            z-index: -1;
        }
        #card {
            padding-top: 170px;
            
        }
        .card {
            background-image: linear-gradient(180deg, red, transparent);
            z-index: -1;
        }
    </style>
    <nav class="bg-info">
        <div class="container">
            <ul class="nav justify-content-end p-3 text-black" style="">
                <li class="nav-item">
                    <a href="#" class="nav-link text-black font-bold active" aria-current="page" >Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-black font-bold" >Portfollio</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-black font-bold" >Resume</a>
                </li>
                <li class="nav-item">
                    <a href="download.php?file=my_cv.pdf" class="nav-link" style="border: 1px solid red; border-radius:25px; color:white;background-color:brown;">Download CV <i class="fas fa-file-download"></i> </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="main_body">
        <div class="container">
            <div id="wraper p-5" style="display: block; text-align:center; line-height:50px; ">
                   <h2 style="text-align:left; line-height:90px;letter-spacing:-5px; text-transform:uppercase; font-size:75px; font-weight:bold; padding-top:70px; color:white">
                        On The Way to <br><strong style="color:rgba(255,0,0,1); background-color: white; padding:5px ;"> Web Development </strong>

                   </h2><hr style="color:white">

                   <p style="padding:5px; font-size:40px;text-align:left; color:white; text-transform:capitalize; font-weight:800;">
                       I'm Here with two years of Development experience. 
                   </p>
                   <a class="btn download_button" id="btn" target="_black" style="float:left" href="cv.pdf">View CV  </a>
 
                   
            </div>
        </div>
    </div>


<script src="bootstrap-5.1.0-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>