


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">

        <title>Album example for Bootstrap</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

        <!-- Custom styles for this template -->
        <link href="album.css" rel="stylesheet">
    </head>

    <body>
        <main role="main">
            <section class="jumbotron text-center">
                <div class="container">
                    <h1 class="jumbotron-heading">Увага питання</h1>
                    <p class="lead text-muted"><?php echo $question;
                        ?>
                    </p>
                    <div class="d-flex justify-content-around">
                        <form action="setAnswer.php" method="post">
                            <input type="hidden" value="1" name="yes">
                            <input class="btn btn-primary my-2" type="submit" value="1">
                        </form>

                        <form action="setAnswer.php" method="post">
                            <input type="hidden" value="2" name="no">
                            <input class="btn btn-primary my-2" type="submit" value="2">
                        </form>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>
