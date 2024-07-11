<?php
session_start();
include('../conexionDB/conexion.php');
$curso2=$_SESSION["asignatura2"];
$periodoAcademico=$_SESSION["periodoAcademico"];
//INICIO CÓDIGO PARA MOSTRAR ESTUDIANTES REGISTRADOS
$sql = "SELECT * FROM `Usuarios` WHERE `asignatura`='$curso2' AND `periodo`='$periodoAcademico'";
$estudiantes = $conn->query($sql);
//FIN CÓDIGO PARA MOSTRAR ESTUDIANTES REGISTRADOS

//INICIO CÓDIGO PARA MOSTRAR ASIGNATURAS CREADAS
$sql = "SELECT * FROM `asignaturas` WHERE `Id`='$curso2'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $nombreAsignatura=$row["asignacion"];
    }
} 
//FIN CÓDIGO PARA MOSTRAR ASIGNATURAS CREADAS 


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
        <div class="card border-dark mb-3">
            <div class="card-body  text-center">
                <strong>Lista de estudiantes</strong>
                <p><?php echo $nombreAsignatura ?></p>
                <p><?php echo $periodoAcademico?></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary me-md-2" href="principal.php" type="button">Regresar</a>
        </div>
    </div>
    <br />
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col" style="width:150px;">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php $contador=1?>
                <?php while($row = $estudiantes->fetch_assoc()) { ?>
                <tr>
                    <th scope="row"><?php echo $contador?></th>
                    <td><?php echo $row["nombre"]?></td>
                    <td style="width:150px;">
                        <!-- BOTON MODAL ACTUALIZAR ESTUDIANTE -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModalActualizar<?php echo $row["Id"]?>">
                            A
                        </button>
                        <?php include("../controladores/actualizarEstudiante.php")?>
                        <!-- BOTON MODAL ELIMINAR ESTUDIANTE -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#exampleModal<?php echo $row["Id"]?>">
                            E
                        </button>
                        <?php include("../controladores/eliminarEstudiante.php")?>
                        <!-- BOTON MODAL VER ESTUDIANTE -->
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#exampleModalver<?php echo $row["Id"]?>">
                            V
                        </button>
                        <?php include("../controladores/verEstudiante.php")?>

                    </td>
                </tr>
                <?php $contador+=1;} ?>
            </tbody>
        </table>
    </div>
</body>
</html>