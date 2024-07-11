<?php

session_start();
if(strcmp($_POST["asignaturaAsistencia"], "Abrir este menú de selección") !== 0 && strcmp($_POST["periodoAcademicoAsistencia"], "Abrir este menú de selección") !== 0){
    $_SESSION["asignaturaAsistencia"]=$_POST["asignaturaAsistencia"];
    $_SESSION["periodoAcademicoAsistencia"]=$_POST["periodoAcademicoAsistencia"];
    header("Location: ../vistas/asistencia.php");
}else{
    header("Location: ../vistas/principal.php");
}

?>
