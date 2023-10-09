<?php
    session_name('LOGIN');
    session_start();

    //destruye la sesion y sus datos
    session_destroy();

    //solo elimina las variables(datos)
    // session_unset();
    // echo "<script>
    // window.location.href('index.php');
    // </script>";
        // verifica si hay encabezados enviados

    if (headers_sent()) {
        header("Location: login.php");
    }else{
        echo "<script>
        window.location.href='login.php';
        </script>";
    }
?>