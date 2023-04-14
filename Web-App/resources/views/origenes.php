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
            <h1>Origenes sobre el Maiz en Guatemala</h1>
            <hr>
            <p>El maiz dependiendo de la cultura, ha tenido diferentes origenes, y no es nada sorprendente que en algunos lugares de Guatemala, se posea una historia sobre el origen, en este caso se recaudaron las siguientes versiones sobre el origen del maiz.</p>
            <ul>
                <?php 
                    foreach ($cont as $cont) {
                        echo "<li>";
                        echo "<h3>" . $cont->lugar_origen . "</h3>";
                        echo "<p>" . $cont->historia . "</p>";
                        echo "</li>";
                        echo "<br>";
                    }
                ?>  
            </ul>
            <img src="../resources/img/Origen.jpg" alt="">
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