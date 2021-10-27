<?php 
if (!isset($_GET['Users_number_dni'])){
	header('location: ../Procedures/Select.php');
	}
    include '../Connection/Connection.php';

	$id = $_GET['Users_number_dni'];

	$sentencia = $conexion_bd ->prepare("SELECT * FROM users WHERE Users_number_dni=?;");
	$resultado = $sentencia ->execute ([$id]);
	$Dato = $sentencia->fetch(PDO::FETCH_OBJ);
	//print_r($persona);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>EDITAR</title>
 </head>
 <body>
 	<center>
 		<h3>EDITAR USUARIO</h3>
 		<form method="POST" action="../Procedures/Update.php">
 			<table>
 			<tr>
 					<td>NOMBRE</td>
 					<td><input type="test" name="Users_names" value=<?php echo $Dato->Users_names?>> </td>
 				</tr>
 				<tr>
 					<td>APELLIDO</td>
 					<td><input type="test" name="Users_surname_one" value=<?php echo $Dato->Users_surname_one ?>></td>

 				<tr>
 					<td>NOMBRE DE USUARIO</td>
 					<td><input type="test" name="Users_name_user" value=<?php echo $Dato->Users_name_user ?>></td>
 				</tr>
 				<tr>
 					<td>EMAIL</td>
 					<td><input type="test" name="Users_email" value=<?php echo $Dato->Users_email?>></td>
 				</tr>	
 				<tr>

 					<input type="HIDDEN" name="Users_number_dni">
 					<input type="hidden" name="Users_number_dni" value="<?php echo $Dato->Users_number_dni; ?>">
 					<td colspan="2"><input type="submit" value="EDITAR ESTUDIANTE"></td>
 				</tr>
 			</tr>
 			</table>
 		</form>
 	</center>
 
 </body>
 </html>