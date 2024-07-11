<?php
    if($_POST){
        $materia=$_POST["nombreCurso"];
        $grupo=$_POST["grupo"];
        if(!empty($materia) && strcmp($grupo, "Abrir este menú de selección") !== 0){
            $asignacion=$materia." Grupo ".$grupo;
            $sql = "SELECT * FROM `asignaturas` WHERE `nombre`='$materia' AND `grupo`='$grupo'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<strong>*NOTA : La asignatura $asignacion ya existe.</strong>";
                }
            } else {
                $sql = "INSERT INTO `asignaturas`(`nombre`, `grupo`, `asignacion`) VALUES ('$materia','$grupo','$asignacion')";
                if ($conn->query($sql) === TRUE) {
                    echo "Asignatura creada exitosamente.";
                    header("Location: ../vistas/crearCurso.php");
                } else {
                }
            }
        }else{
            echo "<strong>*NOTA : Ninguno de los campos puede estar vacio o debe seleccionar un grupo.</strong>";           
        }
    }
?>