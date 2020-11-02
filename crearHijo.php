<?php 
    include 'conexion.php';

    $codigoPais=$_POST['codigoPais'];
    $celular=$_POST['celular'];
    $operadorMovil=$_POST['operadorMovil'];
    $nombreHijo=$_POST['nombreHijo'];
    $idUsuario=$_POST['idUsuario'];
    $idDispositivo=$_POST['idDispositivo'];


    $insertar="INSERT INTO hijo(codigoPais,celular,operadorMovil,nombreHijo,idUsuario,idDispositivo) 
                VALUES('$codigoPais','$celular','$operadorMovil','$nombreHijo','$idUsuario','$idDispositivo')";
    $resultado=mysqli_query($conexion,$insertar);

    if (!$resultado) {
        echo    '<script>
                     alert("Error al registrar Hijo") ;
                     window.history.go(-1);
                </script>';
    }else{
        echo    '<script>
                     alert("Hijo exitosamente registrado") ;
                </script>';
        header("location:hijo.php");
    }
    mysqli_close($conexion);
?>