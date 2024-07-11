<?php
    include('../conexionDB/conexion.php');
    if($_POST["idEliminarAsignatura"]){
    $idEliminar=$_POST["idEliminarAsignatura"];
    $sqlVerificar = "SELECT * FROM `Usuarios` WHERE `asignatura`='$idEliminar'";
    $resultVerificar = $conn->query($sqlVerificar);
    if ($resultVerificar->num_rows > 0) {
        //echo "La asignatura no puede ser eliminada tiene estudiantes inscritos.";
        header("Location: ../vistas/crearCurso.php");
    } else {
        $sqlDelete = "DELETE FROM `asignaturas` WHERE `Id`='$idEliminar'";
            if ($conn->query($sqlDelete) === TRUE) {
            //echo "Record deleted successfully";
            header("Location: ../vistas/crearCurso.php");
            } else {
            //echo "Error deleting record: " . $conn->error;
            }
    }
    }
?>
<!-- Modal -->
<div class="modal fade" id="exampleModalEliminarAsignatura<?php echo $row["Id"]?>" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo $row["nombre"]?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Desea eliminar esta asignatura ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form method="POST" action="../controladores/eliminarAsignatura.php">
                    <input type="hidden" id="idEliminarAsignatura" name="idEliminarAsignatura"
                        value="<?php echo $row["Id"]?>">
                    <button type="submit" class="btn btn-primary">Sí, confirmo</button>
                </form>
            </div>
        </div>
    </div>
</div>