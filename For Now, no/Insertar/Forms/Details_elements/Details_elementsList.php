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
                <th>Disponible</th>
                <th>Descripción</th>
                <th>Observación</th>
                <th>Serial</th>
                <th>Estado</th>
                <th>Seguro</th>
                <th>Foto de observación</th>
                <th>Fecha de compra</th>
                <th>Fecha de registro</th>
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