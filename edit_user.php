<?php
include("connection.php");
$con = connection();

$id = $_POST['id'];
$tipo_documento_id = $_POST['tipo_documento_id'];
$numero_documeto = $_POST['numero_documento'];
$nombre_1 = $_POST['nombre_1'];
$nombre_2 = $_POST['nombre_2'];
$apellido_1 = $_POST['apellido_1'];
$apellido_2 = $_POST['apellido_2'];
$genero_id = $_POST['genero_id'];
$departamento_id = $_POST['departamento_id'];
$municipio_id = $_POST['municipio_id'];

$sql = "UPDATE users SET tipo_documento_id='$tipo_documento_id', numero_documento='$numero_documeto', nombre_1='$nombre_1', nommbre_2='$nombre_2', apellido_1='$apellido_1', apellido_2='$apellido_2' genero_id='$genero_id', departamento_id='$departamento_id', municipio_id='$municipio_id' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>