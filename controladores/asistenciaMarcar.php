<button type="button" class="btn btn-success" data-bs-toggle="modal"
    data-bs-target="#exampleModalAsistencia<?php echo $row["Id"]?>">
    OK
</button>
<!-- MODAL MARCAR ASISTENCIA -->
<div class="modal fade" id="exampleModalAsistencia<?php echo $row["Id"]?>" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo $row["nombre"]?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Desea marcar la asistencia ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <form method="POST" action="../vistas/asistencia.php">
                    <input type="hidden" id="checkListAsistencia" name="checkListAsistencia" value="Asistencia">
                    <input type="hidden" id="checkListA" name="checkListA" value="<?php echo $row["Id"]?>">
                    <button type="submit" class="btn btn-primary">Sí, confirmo</button>
                </form>
            </div>
        </div>
    </div>
</div>