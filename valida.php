<?php

$archivo="cuentas.txt";
$cuentas=fopen($archivo,"r");
$contenido=fread($cuentas, filesize($archivo));
$lineas = explode("\n", $contenido);
$acceso=false;
foreach ($lineas as $linea) {
    list($user, $contraseña)=explode("|",$linea);

    if ($_POST['username']==$user && $_POST['password']==$contraseña) {
        $acceso=true;
        break;
    }
}
fclose($cuentas);

if ($acceso) {
    session_start();
    $_SESSION['verifica']=true;
    $_SESSION['name']=$user;
    header("Location:pagina.php");
}else{
    header("Location: login.php");
}



?>