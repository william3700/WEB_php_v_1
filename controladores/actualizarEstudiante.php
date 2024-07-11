<?php 
include('../conexionDB/conexion.php');
if($_POST["actualizarEst"]){
    $var3=$_POST["actualizarEst"];
    $nombreA=strtoupper($_POST["nombreActualizar"]);
    $correoA=$_POST["correoActualizar"];
    $asignaturaA=$_POST["asignaturaActualizar"];
    $programaA=$_POST["programaActualizar"];
    $codigoA=$_POST["codigoActualizar"];
    $sql3 = "UPDATE `Usuarios` SET  `nombre`='$nombreA',`codigo`='$codigoA',`programa`='$programaA',`asignatura`='$asignaturaA',`correo`='$correoA' WHERE `Id`='$var3'";
    if ($conn->query($sql3) === TRUE) {
        //echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    header("Location:../vistas/listarEstudiantes.php");
}

?>
<!-- Modal -->
<div class="modal fade" id="exampleModalActualizar<?php echo $row["Id"]?>" tabindex="-1"
    aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Módulo actualización</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="../controladores/actualizarEstudiante.php">
                    <!--INICIO FORMULARIO ACTUALIZACIÓN-->
                    <div class="mb-3">
                        <label for="nombreActualizar" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombreActualizar" name="nombreActualizar"
                            value="<?php echo strtoupper($row["nombre"])?>">
                    </div>
                    <div class="mb-3">
                        <label for="codigoActualizar" class="form-label">Código</label>
                        <input type="text" class="form-control" id="codigoActualizar" name="codigoActualizar"
                            value="<?php echo $row["codigo"]?>">
                    </div>
                    <div class="mb-3">
                        <label for="programaActualizar" class="form-label">Programa</label>
                        <!---->
                        <select class="form-select" id="programaActualizar" name="programaActualizar"
                            aria-label="Default select example">
                            <option selected><?php echo $row["programa"]?></option>
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
                        <!---->
                    </div>
                    <div class="mb-3">
                        <label for="asignaturaActualizar" class="form-label">Asignatura</label>
                        <input type="text" class="form-control" id="asignaturaActualizar" name="asignaturaActualizar"
                            value="<?php echo $row["asignatura"]?>">
                    </div>
                    <div class="mb-3">
                        <label for="correoActualizar" class="form-label">Correo</label>
                        <input type="text" class="form-control" id="correoActualizar" name="correoActualizar"
                            value="<?php echo $row["correo"]?>">
                    </div>
                    <!--FIN FORMULARIO ACTUALIZACIÓN-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                <input type="hidden" id="actualizarEst" name="actualizarEst" value="<?php echo $row["Id"]?>">
                <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>