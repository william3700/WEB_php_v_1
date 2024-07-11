<?php
session_start();
if(strcmp($_POST["asignatura"], "Abrir este menú de selección") !== 0 && strcmp($_POST["periodoAcademico"], "Abrir este menú de selección") !== 0){
    $_SESSION["asignatura"]=$_POST["asignatura"];
    $_SESSION["periodoAcademico"]=$_POST["periodoAcademico"];
    header("Location: ../vistas/agregarEstudiantes.php");
}else{
    header("Location: ../vistas/principal.php");
}


?>

