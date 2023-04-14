<?php 
    $cont = json_decode($json);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Maiz</title>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"></script>
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
            <!--Tabla-->
            <article>
            <div class="tabla-container">
                <h2>Tasa de produccion de maiz en los departamentos en Guatemala</h1>
                <hr>
                <table class="table table-info">
                    <thead>
                        <tr>
                            <th scope="col">Codigo del Departamento</th>
                            <th scope="col">Nombre del Departamento</th>
                            <th scope="col">Produccion Generada</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($cont as $cont){
                            echo  "<tr>";
                            echo "<td>" . $cont->id_dept . "</td>";
                            echo "<td>" . $cont->nombre_dept . "</td>";
                            echo "<td>" . $cont->produccion . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <!--Grafica-->
            <div class="grafica-container">
                <h2>Grafica Representativa</h1>
                <hr>
                <div class="grafica-div">
                    <script id="datosJSON" type="application/json">
                    <?php 
                        echo $json; 
                    ?>
                    </script>
                    <canvas id="grafica"></canvas>
                    <script src="../resources/js/grafica.js"></script>
                </div>
            </div>
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