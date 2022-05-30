<?php 
	
	session_start();
	
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>

 	<h1>Name : <?php echo $_SESSION['user_first_name']; ?></h1>

 	<h1>Email : <?php echo $_SESSION['user_email_address']; ?></h1>

 	<img src="<?php echo $_SESSION['user_image']; ?>">

 	<br><br>

 	<h1><a href="logout.php">Logout</a></h1>
 
 </body>
 </html>