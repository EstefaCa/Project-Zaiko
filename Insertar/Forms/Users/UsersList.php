<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Telefono</th>
                <th>Dirección</th>
                <th>identidad</th>
                <th>Ciudad</th>
                <th>Apodo</th>
                <th>Correo</th>
                <th>Fecha de registro</th>
                <th>Rol</th>
                <th>Actualizar</th>
                <th>Desactivar</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require_once "../../../Connection/Connection.php";
                require_once "Procedures/Read.php";
            ?>
        </tbody>
    </table>
    
</body>
</html>