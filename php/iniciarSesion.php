<?php
        
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];
        include "conexion.php";
        $result=mysqli_query($conn,"SELECT * FROM usuarios where correo='".$correo."'");

        $row_cnt = mysqli_num_rows($result);

        if ($row_cnt){
            $result=mysqli_query($conn,"SELECT * FROM usuarios where correo='".$correo."' AND contraseña='".$contraseña."'");
            $row_cnt = mysqli_num_rows($result);
            if ($row_cnt){
                echo "Si existe el usuario";
            } 
            else{
                echo "Contraseña incorrecta";
            }
        } 
        else{
            echo "No existe el usuario";
        }
        

     
?>
