<?php 
    $cont = json_decode($json);
    $nombreMaya;
    $descripcion;
    $informacion;
    $usos;
    foreach($cont as $cont) {
        $nombreMaya = $cont->nombreMaya;
        $descripcion = $cont->descripcion;
        $informacion = $cont->informacion;
        $usos = $cont->usos;
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Maiz</title>
        <link rel="stylesheet" href="../resources/css/bootstrap.min.css">
        <link rel="stylesheet" href="../resources/css/homeStyles.css">
    </head>
    <body>
        <header>
            <div class="header-content">
                <div class="logo">
                    <h1>Maiz<b>Blog</b></h1>
                </div>
                <div class="mssg">
                    <h1>Descubre Nuevas <b>Cosas</b></h1>
                </div>
            </div>
        </header>
        <div class="container-content">
            <article>
                <h1>El Maiz en Guatemala</h1>
                <hr>
                <h5>Traducido en Lengua Maya como: 
                    <?php
                        echo $nombreMaya;
                    ?>
                </h5>
                <p>
                    <?php
                    echo $descripcion;
                    ?>
                </p>
                <br>
                <h1>Conoce un poco más!!!</h1>
                <p>
                    <?php
                        echo $informacion;
                    ?>
                </p>
                <br>
                <h2>Usos en Guatemala:</h2>
                <p>
                    <?php
                        echo $usos;
                    ?>
                </p>
                <br>
                <hr>
                <img src="../resources/img/Maiz.jpg" alt="" class="cont">
                <img src="../resources/img/Usos.jpg" alt="" class="cont">
            </article>
        </div>
        <div class="container-footer">
            <footer>
                <div class="logo-footer">
                    <img src="../resources/img/LogoFooter.png" alt="">
                </div>
                <hr>
                <h5>luiscifuentes202030482@cunoc.edu.gt</h5>
                <h5>202030482</h5>
            </footer>
        </div>
    </body>
</html>