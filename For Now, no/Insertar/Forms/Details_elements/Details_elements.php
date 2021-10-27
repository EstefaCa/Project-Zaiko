<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles</title>
</head>
<body>
    <form action="" method="post">
        <label for="">¿Está disponible?</label>
        <select name="Details_available" id=""></br>
            <option value="1">Sí</option>
            <option value="2">No</option>
        </select></br>
        <label for="">Descripción del elemento</label>
            <input type="text" name="Details_description"></br>
        <label for="">Estado</label>
        <select name="Details_state" id=""></br>
            <option value="1">Bueno</option>
            <option value="2">Malo</option>
        </select></br>       
        <label for="">Observación del elemento</label> 
            <input type="text" name="Details_observation">
        <label for="">Valor del elemento</label>
            <input type="number" name="Details_purchase_value">
        <label for="">Fecha de compra</label> 
            <input type="date" name="Details_date_of_purchase">
            <input type="submit" value="Guardar">

    </form>
    <?php
        if (isset($_POST['Details_available'],$_POST['Details_description'],$_POST['Details_observation'],$_POST['Details_state'],
        $_POST['Details_purchase_value'],$_POST['Details_date_of_purchase'])) {
            require_once "../../../Connection/Connection.php";
            require_once "Procedures/Insert.php";
        }
    ?>
</body>
</html>