<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="../estilos/login.css">
    <title>Document</title>
</head>

<body>
    <!--INICIO ENCABEZADO-->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sistema de Gestión </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="controladores/login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--FIN ENCABEZADO-->
    <!--INICIO AVISO-->
    <br />
    <div class="container">
        <div class="card border-dark mb-3">
            <div class="card-body">
                <h5>BIENVENID@</h5>
            </div>
        </div>
    </div>
    <!--FIN AVISO-->
    <!--INICIO LOGIN-->
    <div class="container">
        <div class="card border-dark mb-3">
            <div class="card-body">
                <div id="cajaImagen">
                    <img src="../imagenes/login.png" class="img-fluid" alt="...">
                </div>
                <div class="container">
                    <?php
                        include("../conexionDB/conexion.php");
                        $mensaje="";
                        if(!empty($_POST)){
                            $claveAdmin=$_POST["claveAdmin"];
                            $usuarioAdmin=$_POST["usuarioAdmin"];
                            if(!empty($claveAdmin) && !empty($usuarioAdmin)){
                                $sql = "SELECT * FROM `administrador` WHERE `correo`='$usuarioAdmin' AND `clave`='$claveAdmin'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                      $_SESSION[""]=$row["nombre"];
                                      header("Location: ../vistas/principal.php");
                                    }
                                } else {
                                    $mensaje="Usuario/contraseña equivocados.";
                                }
                            }else{
                                $mensaje="Verifique el usuario/contraseña, ningún campo debe estar vacio.";
                            }
                        }
                        echo "<p>".$mensaje."</p>";
                    ?>
                </div>
                <form method="POST" action="login.php">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="usuarioAdmin" class="form-label">Usuario</label>
                            <input type="email" class="form-control" id="usuarioAdmin" name="usuarioAdmin"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="claveAdmin" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="claveAdmin" name="claveAdmin">
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" id="enviarLogin" name="enviarLogin" class="btn btn-primary">Login</button>
                    </div>
                    <br>
                    <div class="d-grid gap-2">
                        <a href="../index.php" class="btn btn-link">Regresar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--FIN LOGIN-->
</body>

</html>