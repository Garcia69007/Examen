<?php

include('Conec.php');

if(isset($_POST['enviar'])){

    $Nombre = $_POST ['Nombre'];
    $ApeP =$_POST ['ApePaterno'];
    $ApeM= $_POST ['ApeMaterno'];
    $Telefono = $_POST ['Telefono'];
    $Correo = $_POST ['Correo'];
    $User =$_POST ['Usuario'];
    $Contra = $_POST ['Contra'];

    $insertarDatos = "INSERT INTO Datos (Nombre,ApePaterno,ApeMaterno,Telefono,Correo,Usuario,Contra) 
    VALUES('$Nombre','$ApeP','$ApeM','$Telefono','$Correo','$User','$Contra');";
    
    $resultado = mysqli_query($conexion,$insertarDatos);

    if(!$resultado){
        echo '<script>alert("Los datos no se insertaron")</script>';
    }else{
        echo '<script>alert("Los datos se insertaron")</script>';
    }
}

header('location: Formulario.php');
?>