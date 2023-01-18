<?php
include('connection.php');
$con = connection();
$sql = "SELECT * FROM users";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Usuarios Crud</title>
</head>
<body>
    <div class="users-form">
        
        <h1>Crear Usuario</h1>
        <form action="insert_user.php" method="POST">
            
            
            <input type="text" name="tipo_documento_id " placeholder="Tipo de Documento">
            <input type="text" name="numero_documento" placeholder="Numero de Documento">
            <input type="text" name="nombre_1" placeholder="Primer Nombre">
            <input type="text" name="nombre_2" placeholder="Segundo Nombre">
            <input type="text" name="apellido_1" placeholder="Primer Apellido">
            <input type="text" name="apellido_2" placeholder="Segundo Apellido">
            <input type="text" name="genero_id" placeholder="Seleccione su Género">
            <input type="text" name="departamento_id" placeholder="Seleccione su Departamento">
            <input type="text" name="municipio_id" placeholder="Seleccione su Municipio">

            <input type="submit" value="Agregar">
        </form>
    </div>

    <div class="users-table">
        
        <h2> Usuarios Registrados </h2>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Tipo de Documento</th>
                    <th>Número de Documento</th>
                    <th>Nombre Uno</th>
                    <th>Nombre Dos</th>
                    <th>Apellido Uno</th>
                    <th>Apellido Dos</th>
                    <th>Género</th>
                    <th>Departamento</th>
                    <th>Municipio</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th> <?= $row['id'] ?> </th>
                        <th><?= $row['tipo_documento_id'] ?> </th>
                        <th><?= $row['numero_documento']?> </th>
                        <th><?= $row['nombre_1']?> </th>
                        <th><?= $row['nombre_2'] ?> </th>
                        <th><?= $row['apellido_1'] ?> </th>
                        <th><?= $row['apellido_2']?> </th>
                        <th><?= $row['genero_id']?> </th>
                        <th><?= $row['departamento_id']?> </th>
                        <th><?= $row['municipio_id']?> </th>
                        
                        <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_user.php?id=<?= $row['id'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>  
                <?php endwhile; ?> 
            </tbody>
        </table>

    </div>
</body>
</html>