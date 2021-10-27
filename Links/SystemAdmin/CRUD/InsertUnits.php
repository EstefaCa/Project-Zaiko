 <?php
$Units_name = $_POST['Units_name'];
$Users_number_dni = $_POST['Users_number_dni'];
$Units_active = 1;

$Sentencia = $conexion_bd->prepare("SELECT * FROM users WHERE Users_number_dni = $Users_number_dni;");
$Sentencia->execute();


if ($Sentencia >= 1) {

    $Sentencia = $conexion_bd->prepare("INSERT INTO units(Units_name,Units_active)VALUES(?,?)");
    $Resultado = $Sentencia->execute([$Units_name,$Units_active]);


} else {
    echo "El número de identidad que introduciste no se encuentra en la base de datos, por favor revisar.";
}

?>