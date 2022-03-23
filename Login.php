<?php
// Connecting to inc folder which stores the function of login system 
include_once("inc/Login.inc.php"); 
?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/c4592fd8fe.js" crossorigin="anonymous"></script>
    <!--End of Font Awesome-->
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"> </script>
    <!--CSS style-->
    <link rel="stylesheet" href="CSS\Homepage.css">
    <title>Login</title>
 </head>
 <body class="text-center">
    <!--logo with the name of company at the top-->
    <header class="site-header sticky-top py-1">
        <a href="Homepage.php"> <img class="logo-image1" src="Images_Homepage\Kazakhstan.svg.png" alt="Logo-Kazakhstan" height="50px"></a>
        <h4 class="LoginZaman">Zaman</h4>
        <!-- navigation bar-->
        <nav class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2 d-none d-md-inline-block" href="History.php">History</a>
            <a class="py-2 d-none d-md-inline-block" href="Trip.php">Trip</a>
            <a class="py-2 d-none d-md-inline-block" href="Cost.php">Cost</a>
            <a class="py-2 d-none d-md-inline-block" href="Booking.php">Booking</a>
            <a class="py-2 d-none d-md-inline-block" href="Covid.php">Covid</a>
            <a class="py-2 d-none d-md-inline-block" href="upload_story.php">Story</a>
            <a class="py-2 d-none d-md-inline-block" href="Register.php">Sign up</a>
            <a class="py-2 d-none d-md-inline-block" href="Login.php">Sign in</a>
        </nav>
    </header>
    <!--The Login form-->
    <main class="form-signin">
        <form action="Login.php" method = "post">
            <h1 class="h3 mb-3 fw-normal">Sign in</h1>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" name="submit" type="submit">Sign in</button>
        </form>
    </main>
</body>
</html>