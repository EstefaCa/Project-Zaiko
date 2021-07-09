<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../../Assets/css/Login/Login.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500&family=Raleway:ital,wght@0,300;1,100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container">
		<div class="img">
			<img src="../../Assets/img/bg.svg">
		</div>
		<div class="login-content">
			<form action="../SystemAdmin/Dashboard_SystemAdmin.php">
				<img src="../../Assets/img/Avatar1.svg">
				<h2 class="Title">Bienvenido</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Usuario</h5>
           		   		<input type="text" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Contraseña</h5>
           		    	<input type="password" class="input">
            	   </div>
            	</div>
            	<a href="#" class="Lost">¿Olvidaste la contraseña?</a>
            	<input type="submit" class="btn" value="Siguiente">
            </form>
        </div>
    </div>
	<script type="text/javascript" src="../../Assets/js/Login.js"></script>
   </body>
</html>