<?php
include('../conexionDB/conexion.php');
if($_POST["cambiar"]){
    $idCambio=$_POST["cambiar"];
    $nuevoNombre=$_POST["nombreAsignaturaCambiar"];
    $nuevoGrupo=$_POST["grupoAsignaturaCambiar"];
    $nuevoAsignacion=$nuevoNombre." Grupo ".$nuevoGrupo;
    $sql = "UPDATE `asignaturas` SET `nombre`='$nuevoNombre',`grupo`='$nuevoGrupo',`asignacion`='$nuevoAsignacion' WHERE `Id`='$idCambio'";
    if ($conn->query($sql) === TRUE) {
     // echo "Record updated successfully";

    } else {
      //echo "Error updating record: " . $conn->error;
    }
    $conn->close();
    header("Location: ../vistas/crearCurso.php");
}

?>
<!-- Modal -->
<div class="modal fade" id="exampleModalActualizarAsignatura<?php echo $row["Id"]?>" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Módulo de actualización</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="../controladores/actualizarAsignatura.php">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nombreAsignaturaCambiar" class="form-label">Nombre asignatura</label>
                        <input type="text" class="form-control" value="<?php echo $row["nombre"]?>"
                            id="nombreAsignaturaCambiar" name="nombreAsignaturaCambiar">
                    </div>
                    <div class="mb-3">
                        <label for="grupoAsignaturaCambiar" class="form-label"><strong>Grupo</strong></label>
                        <select class="form-select" id="grupoAsignaturaCambiar" name="grupoAsignaturaCambiar"
                            aria-label="Default select example">
                            <option selected><?php echo $row["grupo"]?></option>
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <input type="hidden" id="cambiar" name="cambiar" value="<?php echo $row["Id"]?>">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>