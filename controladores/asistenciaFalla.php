<button type="button" class="btn btn-danger" data-bs-toggle="modal"
    data-bs-target="#exampleModalFalla<?php echo $row["Id"]?>">
    X
</button>
<!-- MODAL MARCAR FALLA -->
<div class="modal fade" id="exampleModalFalla<?php echo $row["Id"]?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo $row["nombre"]?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Desea marcar la falla ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <form method="POST" action="../vistas/asistencia.php">
                    <input type="hidden" id="checkListFalla" name="checkListFalla" value="Falla">
                    <input type="hidden" id="checkListF" name="checkListF" value="<?php echo $row["Id"]?>">
                    <button type="submit" class="btn btn-primary">Sí, confirmo</button>
                </form>
            </div>
        </div>
    </div>
</div>