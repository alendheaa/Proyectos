<?php
    session_start();
    require_once 'conexion.php';

    if(isset($_POST['registrar'])){
        $nombre = $_POST['usuario'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $checkEmail = $enlace->query("SELECT email FROM usuarios WHERE email ='$email'");

        if($checkEmail->num_rows > 0){
            $_SESSION['register_error'] = '¡El email se encuentra registrado!';
            $_SESSION['active_form'] = 'register';
        }else{
            $enlace->query("INSERT INTO usuarios (nombre_usuario, email, clave) VALUES ('$nombre', '$email', '$password')");
        }

        header("Location: ../login.php");
        exit();
    }

    //Inicia LOGIN.PHP

    if(isset($_POST['entrar'])){
        $email=$_POST['email'];
        $password=$_POST['password'];

        $result = $enlace->query("SELECT * FROM usuarios WHERE email = '$email'");

        if($result->num_rows > 0){
            $user = $result->fetch_assoc();
            if(password_verify($password, $user['password'])){
                $_SESSION['name'] =$user['name'];
                $_SESSION['email'] =$user['email'];

                header("Location: ../pageUser.php");
                exit();
            }
        }

        header("Location: ../login.php");
        exit();
    }

?>