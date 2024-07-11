<?php
session_start();
if(strcmp($_POST["asignatura2"], "Abrir este menú de selección") !== 0 && strcmp($_POST["periodoAcademico"], "Abrir este menú de selección") !== 0){
    $_SESSION["asignatura2"]=$_POST["asignatura2"];
    $_SESSION["periodoAcademico"]=$_POST["periodoAcademico"];
    header("Location: ../vistas/listarEstudiantes.php");
}else{
    header("Location: ../vistas/principal.php");
}
?>