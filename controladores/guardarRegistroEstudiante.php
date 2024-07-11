<?php 
include('../conexionDB/conexion.php');
$periodoAcademico=$_SESSION["periodoAcademico"];
//FIN CÓDIGO PARA MOSTRAR ASIGNATURAS CREADAS
if($_POST){
    $id_asignatura=$_POST["idAsignatura"];
    $nombre_estudiante=strtoupper($_POST["nombre"]);
    $codigo_estudiante=$_POST["codigo"];
    $programa_estudiante=$_POST["programa"];
    $correo_estudiante=$_POST["correo"];
    if(!empty($nombre_estudiante) && !empty($codigo_estudiante) && !empty($correo_estudiante) && strcmp($programa_estudiante, "Abrir este menú de selección") !== 0){
        //INICIO CÓDIGO PARA BUSCAR USUARIOS CREADOS
        $sql2 = "SELECT * FROM `Usuarios` WHERE `codigo`='$codigo_estudiante' OR `correo`='$correo_estudiante'";
        $result2 = $conn->query($sql2);
        if ($result2->num_rows > 0) {
            $cantidad=0;
            while($row = $result2->fetch_assoc()) {
            $cantidad+=1;
            }
        }else{
            $cantidad=0;
        }; 
        //FIN CÓDIGO PARA BUSCAR USUARIOS CREADOS
        if($cantidad>0){
            echo "El estudiante ya se encuentra registrado en el sistema.";
        }else{
            $sql = "INSERT INTO `Usuarios`(`nombre`, `codigo`, `programa`, `asignatura`, `correo`, `periodo`) VALUES ('$nombre_estudiante','$codigo_estudiante','$programa_estudiante','$id_asignatura','$correo_estudiante','$periodoAcademico')";
            $conn->query($sql);  
            header("Location:../vistas/agregarEstudiantes.php");
            echo "Estudiante fue registrado con éxito";
        };
    }else{
        echo "No pueden existir campos vacios o debe seleccionar un programa.";
    };
};
?>