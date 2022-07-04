<?php
    include("cont_db2.php");

    if (isset($_POST['Enviar'])){
        if (strlen($_POST['name']) >=1 && strlen($_POST['Nocontrol']) >=1 && strlen($_POST['contra']) >=1 && strlen($_POST['fecha']) >=1) {
            $nombre = trim($_POST['name']);
            $NoControl = trim($_POST['Nocontrol']);
            $contra = trim($_POST['contra']);
            $fecha = trim($_POST['fecha']);
            $consulta = "INSERT INTO alumnos(nombre,NoControl, contra, fecha)
             VALUES ('$nombre','$NoControl','$contra','$fecha')";
             $resultado = mysqli_query($conex,$consulta);
            // $consulta = "INSERT INTO registro(nombre, email,fecha_regis)
            // VALUES ('$name','$email','$fecha_regis')";
            // $resultado = mysqli_query($conex,$consulta);



            if ($resultado){
                ?>
                <h3> Te has inscrito</h3>
                <?php
            }else {   
                ?>
                <h3>error</h3>
                <?php
            }
        }   else { 
            ?>
            <h3>completa los datos</h3>
            <?php
        }
    }
?>