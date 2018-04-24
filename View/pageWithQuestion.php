<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">
        <title>Album example for Bootstrap</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    </head>
    <body>
        <main role="main">
            <section class="jumbotron text-center">
                <div class="container">
                    <h1 class="jumbotron-heading">Увага питання</h1>
                    <p class="lead text-muted"><?php echo $question->getQuestion($random);
                        ?>
                    </p>
                    <div class="d-flex justify-content-around">
                        <form action="index.php" method="post">
                            <input type="hidden" value="1" name="answer">
                            <input class="btn btn-primary my-2" type="submit" value="так">
                        </form>
                        <form action="index.php" method="post">
                            <input type="hidden" value="0" name="answer">
                            <input class="btn btn-primary my-2" type="submit" value="ні">
                        </form>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>
