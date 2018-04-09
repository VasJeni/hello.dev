<?php
$displayBlockNone='none';
$displayBlock='block';

?>


<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="img/planet-land_318-33281.png">

        <title>Floating labels example for Bootstrap</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
       <link href="css/floating-labels.css" rel="stylesheet">
        <link href="css/MyCSS.css" rel="stylesheet">
    </head>

    <body>
<!--        <form class="form-signin" action="index.php" method="post">-->
            <form class="form-signin" action="checkForm/checkForm.php" method="post">
            <div class="text-center mb-4">
                <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
                <h1 class="h3 mb-3 font-weight-normal">Floating labels</h1>
                <p>Build form controls with floating labels via the <code>:placeholder-shown</code> pseudo-element. <a href="https://caniuse.com/#feat=css-placeholder-shown">Works in latest Chrome, Safari, and Firefox.</a></p>
            </div>

            <div class="form-label-group">
                <input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputEmail">Email address</label>
            </div>

            <div class="form-label-group">
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
        </form>
        <div class="form-signin <?php if  ($_POST==null){echo $displayBlockNone ;} else {echo $displayBlock;}  ?>">
            <div class="text-center mb-4">
                <p>Email <code> <?php echo $_POST['inputEmail']; ?> </code></p>
                <p>Password <code> <?php echo $_POST["password"];?> </code></p>
            </div>
        </div>
    </body>
</html>
