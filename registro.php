<?php
include ("connexion.php");
if(isset($_POST['register'])){
    if(
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['contr']) >= 1
    ){
        $nombre=trim($_POST['nombre']);
        $contraseña=trim($_POST['contr']);
        $consulta="INSERT INTO register (nombre, contraseña)
            VALUES('$nombre','$contraseña')";
        $resultado=mysqli_query($conex,$consulta);
        header("Location: primero.html");
        if($resultado){
            ?>
            <h3 class="Success">Tu registro se ha completado</h3>
            <?php
        }
    }
}
?>