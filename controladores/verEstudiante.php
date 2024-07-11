<!-- Modal -->
<div class="modal fade" id="exampleModalver<?php echo $row["Id"]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><strong>Información general</strong></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>Nombre</strong>     :  <?php echo $row["nombre"]?></p>
                <p><strong>Código</strong>     :  <?php echo $row["codigo"]?></p>
                <p><strong>Programa</strong>   :  <?php echo $row["programa"]?></p>
                <p><strong>Asignatura</strong> :  <?php echo $nombreAsignatura?></p>
                <p><strong>Correo</strong>     :  <?php echo $row["correo"]?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>