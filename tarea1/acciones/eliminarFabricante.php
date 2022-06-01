<?php

include('../Conec.php');

$codigoFabricante = $_GET['id'];

$eliminarFabricante = "DELETE  FROM  fabricante WHERE codigo = '$codigoFabricante'";

$resutado = mysqli_query($conexion,$eliminarFabricante);

header('Location: ../fabricantes.php');

?>