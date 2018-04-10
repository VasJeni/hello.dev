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

  <table class="table table-dark">
      <thead>
      <tr>
          <th scope="col">Email</th>
          <th scope="col">Password</th>
      </tr>
      </thead>
      <tbody>
      <tr>
          <td> <?php echo $_POST['inputEmail']; ?></td>
          <td><?php echo $_POST['password']; ?></td>
      </tr>
      </tbody>
  </table>
    <footer class="footer">
      <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
      </div>
    </footer>
  </body>
</html>
