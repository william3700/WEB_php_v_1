<?php
session_start();
include('../conexionDB/conexion.php');
$sql = "SELECT * FROM `asignaturas`";
$result = $conn->query($sql);
$sql2 = "SELECT * FROM `asignaturas`";
$result2 = $conn->query($sql2);
$sql3 = "SELECT * FROM `asignaturas`";
$result3 = $conn->query($sql3);
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
    <!--INICIO ENCABEZADO-->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sistema de Gestión </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../controladores/cerrarSesion.php">Salir</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--FIN ENCABEZADO-->
    <!--INICIO CONTENIDO-->
    <br />
    <div class="container">
        <div class="card border-dark mb-3">
            <div class="card-body">
                <h4>Administrador</h4>
            </div>
        </div>
    </div>
    <br />
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <!-- BOTÓN MODAL AGREGAR ESTUDIANTES -->
                        <div class="d-grid gap-2">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal1">
                                Registrar estudiantes
                            </button>
                        </div>

                        <!-- MODAL AGREGAR ESTUDIANTES -->
                        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form method="POST" action="../controladores/variablesGlobales.php">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Seleccione el curso</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <label for="asignatura"
                                                class="form-label"><strong>Asignatura</strong></label>
                                            <select class="form-select" id="asignatura" name="asignatura"
                                                aria-label="Default select example">
                                                <option selected>Abrir este menú de selección</option>
                                                <?php while($row=$result->fetch_assoc()){?>
                                                <option value="<?php echo $row["Id"]?>">
                                                    <?php echo $row["asignacion"]?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                        <div class="modal-body">
                                            <label for="periodoAcademico" class="form-label"><strong>Periodo
                                                    académico</strong></label>
                                            <select class="form-select" id="periodoAcademico" name="periodoAcademico"
                                                aria-label="Default select example">
                                                <option selected>Abrir este menú de selección</option>
                                                <option value="2024-I">2024-I</option>
                                                <option value="2024-II">2024-II</option>
                                                <option value="2025-I">2025-I</option>
                                                <option value="2025-II">2025-II</option>
                                                <option value="2026-I">2026-I</option>
                                                <option value="2026-II">2026-II</option>
                                                <option value="2027-I">2027-I</option>
                                                <option value="2027-II">2027-II</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--FIN BOTON MODAL-->
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <!-- BOTÓN MODAL LISTAR ESTUDIANTES -->
                        <div class="d-grid gap-2">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal2">
                                Lista de estudiantes
                            </button>
                        </div>

                        <!-- MODAL LISTAR ESTUDIANTES -->
                        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form method="POST" action="../controladores/variableGlobalListaEstudiantes.php">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel2">Seleccione el curso</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <label for="asignatura"
                                                class="form-label"><strong>Asignatura</strong></label>
                                            <select class="form-select" id="asignatura2" name="asignatura2"
                                                aria-label="Default select example">
                                                <option selected>Abrir este menú de selección</option>
                                                <?php while($row2=$result2->fetch_assoc()){?>
                                                <option value="<?php echo $row2["Id"]?>">
                                                    <?php echo $row2["asignacion"]?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                        <div class="modal-body">
                                            <label for="periodoAcademico" class="form-label"><strong>Periodo
                                                    académico</strong></label>
                                            <select class="form-select" id="periodoAcademico" name="periodoAcademico"
                                                aria-label="Default select example">
                                                <option selected>Abrir este menú de selección</option>
                                                <option value="2024-I">2024-I</option>
                                                <option value="2024-II">2024-II</option>
                                                <option value="2025-I">2025-I</option>
                                                <option value="2025-II">2025-II</option>
                                                <option value="2026-I">2026-I</option>
                                                <option value="2026-II">2026-II</option>
                                                <option value="2027-I">2027-I</option>
                                                <option value="2027-II">2027-II</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--FIN BOTON LISTAR MODAL-->
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <a class="btn btn-primary" href="crearCurso.php" role="button">Crear asignatura</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModalAsistencia">
                                Asistencia
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalAsistencia" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form method="POST" action="../controladores/variablesGlobalesAsistencia.php">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Seleccione el curso</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!--INICIO-->
                                                <div class="modal-body">
                                                    <label for="asignaturaAsistencia"
                                                        class="form-label"><strong>Asignatura</strong></label>
                                                    <select class="form-select" id="asignaturaAsistencia"
                                                        name="asignaturaAsistencia" aria-label="Default select example">
                                                        <option selected>Abrir este menú de selección</option>
                                                        <?php while($row3=$result3->fetch_assoc()){?>
                                                        <option value="<?php echo $row3["Id"]?>">
                                                            <?php echo $row3["asignacion"]?></option>
                                                        <?php }?>
                                                    </select>
                                                </div>
                                                <div class="modal-body">
                                                    <label for="periodoAcademicoAsistencia"
                                                        class="form-label"><strong>Periodo
                                                            académico</strong></label>
                                                    <select class="form-select" id="periodoAcademicoAsistencia"
                                                        name="periodoAcademicoAsistencia"
                                                        aria-label="Default select example">
                                                        <option selected>Abrir este menú de selección</option>
                                                        <option value="2024-I">2024-I</option>
                                                        <option value="2024-II">2024-II</option>
                                                        <option value="2025-I">2025-I</option>
                                                        <option value="2025-II">2025-II</option>
                                                        <option value="2026-I">2026-I</option>
                                                        <option value="2026-II">2026-II</option>
                                                        <option value="2027-I">2027-I</option>
                                                        <option value="2027-II">2027-II</option>
                                                    </select>
                                                </div>
                                                <!--FINAL-->
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="btn btn-primary">Enviar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Registro de notas
                            </button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <a class="btn btn-primary" href="../vistas/actividadesPendientes.php" role="button">Actividades pendientes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--FIN CONTENIDO-->

</body>

</html>