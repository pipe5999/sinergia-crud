<?php
include("connection.php");
$con = connection();

$id = null; 
$tipo_documento_id = $_POST['tipo_documento_id'];
$numero_documeto = $_POST['numero_documento'];
$nombre_1 = $_POST['nombre_1'];
$nombre_2 = $_POST['nombre_2'];
$apellido_1 = $_POST['apellido_1'];
$apellido_2 = $_POST['apellido_2'];
$genero_id = $_POST['genero_id'];
$departamento_id = $_POST['departamento_id'];
$municipio_id = $_POST['municipio_id'];

$sql = "INSERT INTO users VALUES('$id','$tipo_documento_id','$numero_documeto','$nombre_1','$nombre_2','$apellido_1','$apellido_2','$genero_id','$departamento_id','$municipio_id')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}
echo "hola mundo";

?>