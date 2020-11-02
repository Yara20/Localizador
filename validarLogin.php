<?php 
    include 'conexion.php';

    $usuario=$_POST['usuario'];
    $clave=md5($_POST['clave']);

    //conectando a la base de datos
    $consulta="SELECT * FROM usuario WHERE usuario='$usuario' and clave='$clave'";
    $resultado=mysqli_query($conexion,$consulta);

    $filas=mysqli_num_rows($resultado);
    if($filas>0){
        header("location:inicio.php");
    }else{
        echo    '<script>
                     alert("Error en la autenticacion") ;
                     window.history.go(-1);
                </script>';
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>