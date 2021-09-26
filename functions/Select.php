<?php 

include '../Connection/Connection.php';

$sentencia = $conexion_bd -> query("SELECT * FROM users;");
$Usuarios = $sentencia -> fetchAll(PDO::FETCH_OBJ);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
 	<title>Usuarios</title>
 </head>
 <body>
 <div class="container">
        <div class="row">  <br>    <br>  
            <h3 style="text-align:center">LISTADO DE USUARIOS </h3>
        </div>
 	<div class="row table-responsive">
				<table class="table table-striped">
	    <thead>
 	      <tr> 
 			<td>Numero Documento</td>
 			<td>Nombre</td>
 			<td>Apellido</td>
			<td>Rol</td>
 			<td>Email</td>
			<td>Estado</td>
 			<td>Editar</td>
 			<td>Eliminar</td>
 		  </tr>
 		</thead>  
 		<div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                 <a href="../Links/SystemAdmin/Dashboard_SystemAdmin.php" class="btn btn-primary">Regresar</a>
            </div>
			<div class="col-xs-12 col-sm-6 col-md-6">
                 <a href="SelectD.php" class="btn btn-primary">Usuarios Desactivados</a>
            </div>
        </div>
 		<?php 
 		foreach ($Usuarios as $dato) {
			 if ($dato->Users_active == 1) {

 			?>
 		 <tr> 
 			<td><?php echo $dato->Users_number_dni; ?></td>
 			<td><?php echo $dato->Users_names; ?></td>
 			<td><?php echo $dato->Users_surname_one; ?></td>
 			<td>
				<?php 
					switch ($dato->Role_Role_id) {
						case $dato->Role_Role_id == 1 :
							echo 'Administrador de sistemas';
							break;
						case $dato->Role_Role_id == 2 :
							echo 'Administrador de Dependencia';
							break;
					}
			 	?>
			 </td>
 			<td><?php echo $dato->Users_email; ?></td>
			<td>
				<?php 
				if ($dato->Users_active == 1) {
					echo 'Activo';
				}else {
					echo 'Inactivo';
				}
					
				?>
			</td>
 			<td><a href="../Forms/UpdateF.php?Users_number_dni=<?php echo $dato->Users_number_dni;?>">Editar</a></td>
 			<td><a href="Delete.php?Users_number_dni=<?php echo $dato->Users_number_dni;?>">Eliminar</a></td>
 		</tr>
 		<?php
			 }
		}	
 		 ?>
 	</table>
 </center>

 </body>
 </html>