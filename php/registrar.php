<?php
        include "conexion.php";
      

        if(isset($_POST['nombres']) && !empty($_POST['nombres']) &&
        isset($_POST['apellidos']) && !empty($_POST['apellidos']) &&
        isset($_POST['tipo_documento']) && !empty($_POST['tipo_documento']) &&
        isset($_POST['n_documento']) && !empty($_POST['n_documento']) &&
        isset($_POST['contraseña']) && !empty($_POST['contraseña']) &&
        isset($_POST['contraseña2']) && !empty($_POST['contraseña2']) &&
        isset($_POST['celular']) && !empty($_POST['celular']) &&
        isset($_POST['direccion']) && !empty($_POST['direccion']) &&
        isset($_POST['t_user']) && !empty($_POST['t_user']) &&
        isset($_POST['genero']) && !empty($_POST['genero']) ){
            $nombres = $_POST['nombres'];
            $apellidos = $_POST['apellidos'];
            $documento = $_POST['tipo_documento'];
            $ndocuments = $_POST['n_documento'];
            $correo = $_POST['correo'];
            $contrasena = $_POST['contraseña'];
            $contrasena2 = $_POST['contraseña2'];
            $celular = $_POST['celular'];
            $direccion = $_POST['direccion'];
            $t_user = $_POST['t_user'];
            $genero = $_POST['genero'];
        }
        else{
           
            header('Location: ../registrar.html');
        }

        
        $result2=mysqli_query($conn,"SELECT * FROM usuarios where n_documento='".$ndocuments."' or correo='".$correo."'");
        $row_cnt = mysqli_num_rows($result2);
        if($row_cnt>0){
            echo "El usuario ya esta registrado";
        }
        else{
            echo "Registrado con exito ";
            $result=mysqli_query($conn,"INSERT INTO `usuarios` ( `nombres`, `apellidos`, `tipo_documento`, `n_documento`, `correo`, `contraseña`, `n_celular`, `direccion`, `id_tipos_usuarios`,`sexo`) VALUES ( '".$nombres."', '".$apellidos."', '".$documento."', '".$ndocuments."', '".$correo."', '".$contrasena."', '".$celular."', '".$direccion."', '".$t_user."', '".$genero."');");
        }

    

?>