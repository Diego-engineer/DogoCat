<?php
    include '../../../Modelo/conexionBD.php';

    

    if (isset($_GET['eliminar'])) {
        $idEliminar = $_GET['eliminar'];
        $conexion = new conexionBD();
        $conexion->abrir();

        $sql = "DELETE FROM tbl_animales WHERE Id_Animal = $idEliminar";
        $conexion->consulta($sql);

        if ($conexion->obtenerFilasAfectadas() > 0) {
            echo "Mascota eliminada correctamente.";
        } else {
            echo "Error al eliminar la mascota.";
        }
    }

    // Obtener y mostrar los usuarios existentes
    $conexion = new conexionBD();
    $conexion->abrir();

    $sql = "SELECT * FROM tbl_animales";
    $conexion->consulta($sql);
    $result = $conexion->obtenerResult();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar y eliminar Animales</title>
    <link rel="stylesheet" href="../../Estilos/Tablas.css">
</head>
<body>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Tipo Animal</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Raza</th>
            <th>Tamaño</th>
            <th>Color</th>
            <th>sexo</th>
            <th>Foto</th>
        </tr>

        <?php while ($fila = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $fila['Id_Animal']; ?></td>
                <td><?php echo $fila['Tipo_Animal']; ?></td>
                <td><?php echo $fila['Nombre']; ?></td>
                <td><?php echo $fila['Edad']; ?></td>
                <td><?php echo $fila['Raza']; ?></td>
                <td><?php echo $fila['Tamaño']; ?></td>
                <td><?php echo $fila['Color']; ?></td>
                <td><?php echo $fila['Sexo']; ?></td>
                <td><?php echo $fila['Foto']; ?></td>
                
                <td>
                    <a href="edimasc.php?id=<?php echo $fila['Id_Animal']; ?>">Editar</a>
                    <a href="?eliminar=<?php echo $fila['Id_Animal']; ?>">Eliminar</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    </table> <br><br><br>
    <center><a href="/Vista/Html/Mascotas/Reporte.php" style="display: inline-block; padding: 13px 55px; border: 1px solid black; border-radius: 25px; color: black; text-decoration: none;"> Generar Reporte </a></center> <br>
    <center><a href="/Vista/Html/Inicio/Administrador.php" style="display: inline-block; padding: 13px 55px; border: 1px solid black; border-radius: 25px; color: black; text-decoration: none;"> Atras </a></center>

</body>
</html>