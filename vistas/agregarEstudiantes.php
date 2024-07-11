<?php
session_start();
$curso=$_SESSION["asignatura"];
$periodoAcademico=$_SESSION["periodoAcademico"];
include('../conexionDB/conexion.php');
//INICIO CÓDIGO PARA MOSTRAR ASIGNATURAS CREADAS
    $sql = "SELECT * FROM `asignaturas` WHERE `Id`='$curso'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $nombreAsignatura=$row["asignacion"];
        }
    } 
//FIN CÓDIGO PARA MOSTRAR ASIGNATURAS CREADAS  
//INICIO CÓDIGO PARA MOSTRAR ASIGNATURAS CREADAS
$sql2 = "SELECT * FROM `Usuarios` WHERE `asignatura`='$curso' AND `periodo`='$periodoAcademico'";
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0) {
    $cantidad=0;
    while($row = $result2->fetch_assoc()) {
    $cantidad+=1;
    }
}else{
    $cantidad=0;
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
        <div class="card border-dark mb-3">
            <div class="card-body  text-center">
                <strong>Módulo registro de estudiantes</strong>
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
        <p><strong>Cantidad de estudiantes registrados : <?php echo $cantidad?></strong></p>
        <?php include("../controladores/guardarRegistroEstudiante.php")?>
    </div>
    <div class="container">
        <div class="card border-dark mb-3">
            <div class="card-body">
                <form method="POST" action="agregarEstudiantes.php">
                    <input type="hidden" id="idAsignatura" name="idAsignatura" value="<?php echo $curso ?>">
                    <div class="mb-3">
                        <label for="nombre" class="form-label"><strong>Nombre</strong></label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="codigo" class="form-label"><strong>Código</strong></label>
                        <input type="text" class="form-control" id="codigo" name="codigo">
                    </div>
                    <div class="mb-3">
                        <label for="programa" class="form-label"><strong>Programa</strong></label>
                        <select class="form-select" id="programa" name="programa" aria-label="Default select example">
                            <option selected>Abrir este menú de selección</option>
                            <option value="Ingeniería estadística">Ingeniería estadística</option>
                            <option value="Ingeniería eléctrica">Ingeniería eléctrica</option>
                            <option value="Ingeniería civil">Ingeniería civil</option>
                            <option value="Ingeniería sistemas">Ingeniería sistemas</option>
                            <option value="Ingeniería industrial">Ingeniería industrial</option>
                            <option value="Ingeniería electrónica">Ingeniería electrónica</option>
                            <option value="Ingeniería mecánica">Ingeniería mecánica</option>
                            <option value="Ingeniería ambiental">Ingeniería ambiental</option>
                            <option value="Ingeniería biomédica">Ingeniería biomédica</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label"><strong>Correo</strong></label>
                        <input type="email" class="form-control" id="correo" name="correo">
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>






</body>

</html>