<?php 
    include_once("conexion.php");
    $idHijo=$_POST['idHijo'];
    $ci=$_POST['ci'];
    $nombres=$_POST['nombres'];
    $primerApellido=$_POST['primerApellido'];
    $segundoApellido=$_POST['segundoApellido'];
    $fechaNacimiento=$_POST['fechaNacimiento'];
    $sexo=$_POST['sexo'];
    $codigoPais=$_POST['codigoPais'];
    $celular=$_POST['celular'];
    $direccion=$_POST['direccion'];
    $imei=$_POST['imei'];

    $sentencia=$conexion->prepare("UPDATE usuario SET ci=:ci, nombres=:nombres, primerApellido=:primerApellido, 
                                    segundoApellido=:segundoApellido, fechaNacimiento=:fechaNacimiento, sexo=:sexo,
                                    codigoPais=:codigoPais,celular=:celular, direccion=:direccion, imei=:imei
                                    WHERE idHijo=:idHijo;");

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
    $sentencia->bindParam(':imei',$imei);

    if ($sentencia->execute()) {
        return  header ("location:inicio.php");
    }else{
        echo    '<script>
                     alert("Error") ;
                </script>';
    }