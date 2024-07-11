<?php
include('../conexionDB/conexion.php');
$sqlLista = "SELECT * FROM `asignaturas`";
$resultLista = $conn->query($sqlLista);
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
    <title>Document</title>
</head>

<body>
    <br />
    <div class="container">
        <div class="card border-dark mb-3">
            <div class="card-body">
                <strong>Módulo de creación de asignaturas</strong>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary" href="../vistas/principal.php" role="button">Regresar</a>
        </div>
    </div>
    <div class="container">


        <?php include("../controladores/crearAsignatura.php");?>
    </div>
    <br />
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card border-dark mb-3">
                    <div class="card-body">
                        <form method="POST" action="../vistas/crearCurso.php">
                            <div class="mb-3">
                                <label for="nombreCurso" class="form-label"><strong>Nombre
                                        asignatura</strong></label>
                                <input type="text" class="form-control" id="nombreCurso" name="nombreCurso">
                            </div>
                            <div class="mb-3">
                                <label for="grupo" class="form-label"><strong>Grupo</strong></label>
                                <select class="form-select" id="grupo" name="grupo" aria-label="Default select example">
                                    <option selected>Abrir este menú de selección</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="31">21</option>
                                    <option value="32">22</option>
                                    <option value="33">23</option>
                                    <option value="34">24</option>
                                    <option value="35">25</option>
                                    <option value="36">26</option>
                                    <option value="37">27</option>
                                    <option value="38">28</option>
                                    <option value="39">29</option>
                                    <option value="40">40</option>
                                    <option value="41">41</option>
                                    <option value="42">42</option>
                                    <option value="43">43</option>
                                    <option value="44">44</option>
                                    <option value="45">45</option>
                                    <option value="46">46</option>
                                    <option value="47">47</option>
                                    <option value="48">48</option>
                                    <option value="49">49</option>
                                    <option value="50">50</option>
                                    <option value="51">51</option>
                                    <option value="52">52</option>
                                    <option value="53">53</option>
                                    <option value="54">54</option>
                                    <option value="55">55</option>
                                    <option value="56">56</option>
                                    <option value="57">57</option>
                                    <option value="58">58</option>
                                    <option value="59">59</option>
                                    <option value="60">60</option>
                                    <option value="71">71</option>
                                    <option value="72">72</option>
                                    <option value="73">73</option>
                                    <option value="74">74</option>
                                    <option value="75">75</option>
                                    <option value="76">76</option>
                                    <option value="77">77</option>
                                    <option value="78">78</option>
                                    <option value="79">79</option>
                                    <option value="80">80</option>
                                    <option value="81">81</option>
                                    <option value="82">82</option>
                                    <option value="83">83</option>
                                    <option value="84">84</option>
                                    <option value="85">85</option>
                                    <option value="86">86</option>
                                    <option value="87">87</option>
                                    <option value="88">88</option>
                                    <option value="89">89</option>
                                    <option value="90">90</option>
                                    <option value="91">91</option>
                                    <option value="92">92</option>
                                    <option value="93">93</option>
                                    <option value="94">94</option>
                                    <option value="95">95</option>
                                    <option value="96">96</option>
                                    <option value="97">97</option>
                                    <option value="98">98</option>
                                    <option value="99">99</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Crear</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-dark mb-3">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Grupo</th>
                                    <th scope="col">Asignación</th>
                                    <th scope="col">Opción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $contador=1;?>
                                <?php while($row = $resultLista->fetch_assoc()) { ?>
                                <tr>
                                    <th scope="row"><?php echo $contador?></th>
                                    <td><?php echo $row["nombre"]?></td>
                                    <td><?php echo $row["grupo"]?></td>
                                    <td><?php echo $row["asignacion"]?></td>
                                    <td style="width:150px">
                                        <!--INICIO MODAL ACTUALIZAR ASIGNATURA-->
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalActualizarAsignatura<?php echo $row["Id"]?>">
                                            A
                                        </button>
                                        <?php include("../controladores/actualizarAsignatura.php");?>
                                        <!--FIN MODAL ACTUALIZAR ASIGNATURA-->
                                        <!-- INICIO MODAL ELIMINAR ASIGNATURA -->
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalEliminarAsignatura<?php echo $row["Id"]?>">
                                            E
                                        </button>
                                        <?php include("../controladores/eliminarAsignatura.php");?>
                                        <!--FIN MODAL ELIMINAR ASIGNATURA-->
                                    </td>
                                </tr>
                                <?php $contador=$contador+1;?>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>