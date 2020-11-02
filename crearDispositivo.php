<?php 
    include 'conexion.php';

    $imei=$_POST['imei'];
    $marca=$_POST['marca'];
    $modelo=$_POST['modelo'];
    $precio=$_POST['precio'];

    $insertar="INSERT INTO dispositivo(imei,marca,modelo,precio) 
                VALUES('$imei','$marca','$modelo','$precio')";
    $resultado=mysqli_query($conexion,$insertar);

    if (!$resultado) {
        echo    '<script>
                     alert("Error al registrar Hijo") ;
                     window.history.go(-1);
                </script>';
    }else{
        echo    '<script>
                     alert("Dispositivo exitosamente registrado") ;
                </script>';
        header("location:dispositivo.php");
    }
    mysqli_close($conexion);
?>