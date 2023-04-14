<?php 
    $cont = json_decode($json);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MaizBlog</title>
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
            <h1>Tipos de Maiz en Guatemala</h1>
            <p>En Guatemala pese a haber diferentes culturas, platillos, costrumbre y tradiciones, tambien presenta diversidad en uno de sus alimentos mas importantes, el maiz presenta variaciones y cada uno en la cultura maya posee un significado. Los tipos de maiz se describiran a continuacion:</p>
            <br>
            <ul>
                <?php
                    foreach ($cont as $cont) {
                        echo "<li>";
                        echo "<h3>Color " . $cont->color . "</h3>";
                        echo "<h5>Significado segun el Popol Vuh</h5>";
                        echo "<p>" . $cont->significadoAng . "</p>";
                        echo "<h5>Significado para la cracion del ser humano</h5>";
                        echo "<p>" . $cont->significadoHum . "</p>";
                        echo "</li>";
                    }
                ?>
            </ul>
            <br>
            <img src="../resources/img/Img_tipos.jpg" alt="">
        </article>
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