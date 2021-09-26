<?php
session_start();
if (isset($_SESSION['Users_name_user'],$_SESSION['Users_email'])){
    header("Location: ../SystemAdmin/Dashboard_SystemAdmin.php"); 

}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Zaiko</title>
	<link rel="stylesheet" type="text/css" href="../../Assets/css/Login/Login.css">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container">
		<div class="img">
			<img src="../../Assets/img/bg.svg">
		</div>
		<div class="login-content">
			<form action="" method="POST">
				<img src="../../Assets/img/Avatar1.svg">
				<h2 class="Title">Bienvenido</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Usuario o email</h5>
           		   		<input type="text" class="input" maxlength="60" name="Users_name_user" required="" value="">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Contraseña</h5>
           		    	<input type="password" class="input" maxlength="15" name="Users_password" required="">
            	   </div>
            	</div>
            	<a href="#" class="Lost">¿Olvidaste la contraseña?</a>
            	<input type="submit" class="btn" value="Siguiente">
				<?php
				if (isset($_POST['Users_name_user'],$_POST['Users_password'])) {
					require_once "../../Connection/Connection.php";
					require_once "../Login/Login_code.php";
				}	

				?>
            </form>
        </div>
    </div>
	<script type="text/javascript" src="../../Assets/js/Login.js"></script>
   </body>
</html>