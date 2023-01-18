<?php
include('connection.php');
$con = connection();

$id=$_GET['id'];

$sql = "SELECT * FROM   users  WHERE id='$id'";
$query = mysqli_query($con,$sql);
$row= mysqli_fetch_array($query);  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Document</title>
</head>
<body>
    <div class="users-form">
        <h1>Editar Usuario</h1>
        <form action="edit_user.php" method="POST">
            
            <input type="hidden" name="id" value="<?= $row['id']?>">
            <input type="text" name="tipo_documento_id " placeholder="Tipo de Documento" value="<?= $row['tipo_documento_id']?>">
            <input type="text" name="numero_documento" placeholder="Numero de Documento" value="<?= $row['numero_documento_id']?>">
            <input type="text" name="nombre_1" placeholder="Primer Nombre" value="<?= $row['nombre_1']?>">
            <input type="text" name="nombre_2" placeholder="Segundo Nombre" value="<?= $row['nombre_2']?>">
            <input type="text" name="apellido_1" placeholder="Primer Apellido"  value="<?= $row['apellido_1']?>">
            <input type="text" name="apellido_2" placeholder="Segundo Apellido"  value="<?= $row['apellido_2']?>">
            <input type="text" name="genero_id" placeholder="Seleccione su Género" value="<?= $row['genero_id']?>">
            <input type="text" name="departamento_id" placeholder="Seleccione su Departamento" value="<?= $row['departamento_id']?>">
            <input type="text" name="municipio_id" placeholder="Seleccione su Municipio" value="<?= $row['municipio_id']?>">

            <input type="submit" value="Actualizar Información">

        </form>
    </div>
</body>
</html>