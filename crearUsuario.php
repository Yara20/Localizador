<?php 
    include 'conexion.php';

    $nombreCompleto=$_POST['nombreCompleto'];
    $ci=$_POST['ci'];
    $correo=$_POST['correo'];
    $codigoPais=$_POST['codigoPais'];
    $celular=$_POST['celular'];
    $usuario=$_POST['usuario'];
    $clave=md5($_POST['clave']);    
    $idRol=$_POST['idRol'];

    $insertar=" INSERT INTO usuario(nombreCompleto,ci,correo,codigoPais,celular,usuario,clave,idRol) 
                VALUES('$nombreCompleto','$ci','$correo','$codigoPais','$celular','$usuario','$clave','$idRol')";
    $resultado=mysqli_query($conexion,$insertar);

    if (!$resultado) {
        echo    '<script>
                     alert("Error al registrar Usuario") ;
                     window.history.go(-1);
                </script>';
    }else{
        echo    '<script>
                     alert("Usuario exitosamente registrado") ;
                </script>';
        header("location:usuarios.php");
    }
    mysqli_close($conexion);
?>