<?php
/**
 * Created by PhpStorm.
 * User: Geomanser
 * Date: 08.04.2018
 * Time: 9:47
 */
print_r($_POST);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../img/planet-land_318-33281.png">

    <title>Sticky Footer Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/sticky-footer.css" rel="stylesheet">
  </head>

  <body>

    <!-- Begin page content -->
    <main role="main" class="container">
      <h1 class="mt-5">Sticky footer</h1>
      <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS.</p>
    <?php
        foreach ($_POST as $key=>$value){

        }
    ?>

        <p>Use <a href="../sticky-footer-navbar">the sticky footer with a fixed navbar</a> if need be, too.</p>
    </main>

    <footer class="footer">
      <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
      </div>
    </footer>
  </body>
</html>
