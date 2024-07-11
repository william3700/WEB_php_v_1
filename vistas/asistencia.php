<?php
session_start();
date_default_timezone_set('America/Bogota');
$fechaActual=date("Y-m-d");
$horaActual=date("H:i:s");

include('../conexionDB/conexion.php');
$curso2=$_SESSION["asignaturaAsistencia"];
$periodoAcademico=$_SESSION["periodoAcademicoAsistencia"];
//INICIO CÓDIGO PARA MOSTRAR ESTUDIANTES REGISTRADOS
$sql = "SELECT * FROM `Usuarios` WHERE `asignatura`='$curso2' AND `periodo`='$periodoAcademico'";
$estudiantes = $conn->query($sql);

//FIN CÓDIGO PARA MOSTRAR ESTUDIANTES REGISTRADOS
//INICIO CÓDIGO PARA MOSTRAR ASIGNATURAS CREADAS
    function tituloPagina($curso2,$conn){
        $sql12 = "SELECT * FROM `asignaturas` WHERE `Id`='$curso2'";
        $result12 = $conn->query($sql12);
        if ($result12->num_rows > 0) {
            while($row = $result12->fetch_assoc()) {
            $nombreAsignatura12=$row["asignacion"];
            }
        }
        echo $nombreAsignatura12; 

    }
//FIN CÓDIGO PARA MOSTRAR ASIGNATURAS CREADAS 
if($_POST["checkListAsistencia"]){ 
    $est=$_POST["checkListAsistencia"];
    $idA=$_POST["checkListA"];
    $sqlAsis = "INSERT INTO `Asistencia`(`Id_estudiante`, `fecha`, `periodo`, `estado`, `hora`) VALUES ('$idA','$fechaActual','$periodoAcademico','$est','$horaActual')";
    
    if ($conn->query($sqlAsis) === TRUE) {
      //echo "New record created successfully";
    } else {
      //echo "Error: " . $sql . "<br>" . $conn->error;
    }
    header("Location: ../vistas/asistencia.php");
}else if($_POST["checkListFalla"]){
    $estF=$_POST["checkListFalla"];
    $idAF=$_POST["checkListF"];
    $sqlAsisF = "INSERT INTO `Asistencia`(`Id_estudiante`, `fecha`, `periodo`, `estado`, `hora`) VALUES ('$idAF','$fechaActual','$periodoAcademico','$estF','$horaActual')";
    
    if ($conn->query($sqlAsisF) === TRUE) {
      //echo "New record created successfully";
    } else {
      //echo "Error: " . $sql . "<br>" . $conn->error;
    }
    header("Location: ../vistas/asistencia.php");
}else if($_POST["checkListActualizar"]){
    $estAc=$_POST["checkListActualizar"];
    $idAc=$_POST["checkListAc"];
    $sqlAct = "UPDATE `Asistencia` SET `estado`='$estAc',`hora`='$horaActual' WHERE `Id_estudiante`='$idAc'";

    if ($conn->query($sqlAct) === TRUE) {
    //echo "Record updated successfully";
    } else {
    //echo "Error updating record: " . $conn->error;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body>
    <br />
    <div class="container">
        <div class="card border-dark mb-3  text-center">
            <div class="card-body">
                <strong>Lista de asistencia</strong>
                <p><?php tituloPagina($curso2,$conn) ?></p>
                <p><?php echo $periodoAcademico?></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary" href="../vistas/principal.php" role="button">Regresar</a>
        </div>
    </div>

    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Opción</th>
                </tr>
            </thead>
            <tbody>
                <?php $contador=1?>
                <?php while($row = $estudiantes->fetch_assoc()) { ?>
                <?php $william=$row["Id"];?>
                <?php $contfalla=$conn->query("SELECT * FROM `Asistencia` WHERE `estado`='Falla' AND `Id_estudiante`='$william'")->num_rows;?>
                <?php if($contfalla>0){?>
                <tr style="background-color: rgb(102, 255, 153);">
                    <?php }else{?>
                <tr>
                    <?php } ?>
                    <th scope="row"><?php echo $contador?></th>
                    <td><?php echo $row["nombre"]?></td>
                    <td><?php echo $fechaActual?></td>
                    <td style="width:140px">
                        <?php $conta=$conn->query("SELECT * FROM `Asistencia` WHERE (`estado`='Asistencia' OR `estado`='Falla') AND `Id_estudiante`='$william'")->num_rows;?>
                        <?php if($conta==0){?>
                        <!-- BOTÓN MODAL MARCAR ASISTENCIA -->
                        <?php include("../controladores/asistenciaMarcar.php");?>
                        <!-- BOTÓN MODAL MARCAR FALLA -->
                        <?php include("../controladores/asistenciaFalla.php");?>
                        <?php }else{?>
                        <?php if($contfalla>0){?>
                        <?php include("../controladores/asistenciaActualizar.php");?>
                        <?php }else{?>
                        <p><strong>Revisado</strong></p>
                        <?php }?>
                        <?php } ?>
                    </td>
                </tr>
                <?php $contador+=1?>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>