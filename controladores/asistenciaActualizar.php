<button type="button" class="btn btn-primary" data-bs-toggle="modal"
    data-bs-target="#exampleModalActualizarAsistencia<?php echo $row["Id"]?>">
    Actualizar
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModalActualizarAsistencia<?php echo $row["Id"]?>" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo $row["nombre"]?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Desea actualizar la falla ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <form method="POST" action="../vistas/asistencia.php">
                    <input type="hidden" id="checkListActualizar" name="checkListActualizar" value="Asistencia">
                    <input type="hidden" id="checkListAc" name="checkListAc" value="<?php echo $row["Id"]?>">
                    <button type="submit" class="btn btn-primary">Sí, confirmo</button>
                </form>
            </div>
        </div>
    </div>
</div>