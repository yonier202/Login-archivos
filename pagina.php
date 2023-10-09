<?php
    session_start();
    if (($_SESSION['verifica'])) {
        $entrada="";
        $entrada.= '
        <link rel="stylesheet" href="styles.css">
        <body>
            <div>
                <h1 class="title">BIENVENIDO ' .$_SESSION['name'];
                $entrada.= '        
                </h1>

            </div>
        </body>
        ';
        echo $entrada;
    }else{
        header("Location: login.php");
    }
?>