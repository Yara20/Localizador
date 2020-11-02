<?php 
    include_once("conexion.php");
    $idUsuario=$_POST['idUsuario'];
    $ci=$_POST['ci'];
    $nombres=$_POST['nombres'];
    $primerApellido=$_POST['primerApellido'];
    $segundoApellido=$_POST['segundoApellido'];
    $fechaNacimiento=$_POST['fechaNacimiento'];
    $sexo=$_POST['sexo'];
    $codigoPais=$_POST['codigoPais'];
    $celular=$_POST['celular'];
    $direccion=$_POST['direccion'];
    $usuario=$_POST['usuario'];
    $correo=$_POST['correo'];
    $clave=md5($_POST['clave']);
    $idRol=$_POST['idRol'];

    $sentencia=$conexion->prepare("UPDATE usuario SET ci=:ci, nombres=:nombres, primerApellido=:primerApellido, 
                                    segundoApellido=:segundoApellido, fechaNacimiento=:fechaNacimiento, sexo=:sexo,
                                    codigoPais=:codigoPais,celular=:celular, direccion=:direccion, usuario=:usuario,
                                    correo=:correo, clave=:clave, idRol=:idRol
                                    WHERE idUsuario=:idUsuario;");

    $sentencia->bindParam(':idUsuario',$idUsuario);
    $sentencia->bindParam(':ci',$ci);
    $sentencia->bindParam(':nombres',$nombres);
    $sentencia->bindParam(':primerApellido',$primerApellido);
    $sentencia->bindParam(':segundoApellido',$segundoApellido);
    $sentencia->bindParam(':fechaNacimiento',$fechaNacimiento);
    $sentencia->bindParam(':sexo',$sexo);
    $sentencia->bindParam(':codigoPais',$codigoPais);
    $sentencia->bindParam(':celular',$celular);
    $sentencia->bindParam(':direccion',$direccion);
    $sentencia->bindParam(':usuario',$usuario);
    $sentencia->bindParam(':correo',$correo);
    $sentencia->bindParam(':clave',$clave);
    $sentencia->bindParam(':idRol',$idRol);

    if ($sentencia->execute()) {
        return  header ("location:inicio.php");
    }else{
        echo    '<script>
                     alert("Error") ;
                </script>';
    }