<?php 
include('../conexionDB/conexion.php');
if($_POST["eliminarEst"]){ 
    $var1=$_POST["eliminarEst"];
    $sql = "DELETE FROM `Usuarios` WHERE `Id`='$var1'";
    if ($conn->query($sql) === TRUE) {
        header("Location:../vistas/listarEstudiantes.php");
      } else {
        echo "Error deleting record: " . $conn->error;
      }
}

?>
<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $row["Id"]?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo $row["nombre"]?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Desea eliminar al estudiante de la base de datos ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <form method="POST" action="../controladores/eliminarEstudiante.php">
                    <input type="hidden" id="eliminarEst" name="eliminarEst" value="<?php echo $row["Id"]?>">
                    <button type="submit" class="btn btn-primary">Sí, confirmo</button>
                </form>
            </div>
        </div>
    </div>
</div>