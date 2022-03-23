<?php require_once 'inc/connection.php'?> <!--Connecting to the function of delete-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/c4592fd8fe.js" crossorigin="anonymous"></script>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS\Homepage.css">
    <title>Homepage</title>
</head>
<body>
  <!--logo with the name of company at the top-->
    <header class="site-header sticky-top py-1">
        <a href="Homepage.php"><img class="logo-image" src="Images_Homepage\Kazakhstan.svg.png" alt="Logo-Kazakhstan" height="50px"></a>
        <h4>Zaman</h4>
        <button class="btn1"><a href="Logout.php"><i class="fa-solid fa-right-from-bracket fa-lg"></i></a></button>
        <!--navigation bar-->
        <nav class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2 d-none d-md-inline-block" href="History.php">History</a>
            <a class="py-2 d-none d-md-inline-block" href="Trip.php">Trip</a>
            <a class="py-2 d-none d-md-inline-block" href="Cost.php">Cost</a>
            <a class="py-2 d-none d-md-inline-block " href="Booking.php">Booking</a>
            <a class="py-2 d-none d-md-inline-block " href="Covid.php">Covid</a>
            <a class="py-2 d-none d-md-inline-block " href="Register.php">Sign up</a>
            <a class="py-2 d-none d-md-inline-block " href="Login.php">Sign in</a>
        </nav>
    </header>

    <!--Uploading an image and the story, it will redirect to "new1.php"-->
    <div id="content" style="margin:120px 24rem 120px 24rem">
        <form action="new1.php" method="POST" enctype="multipart/form-data">
         <div class="mb-3">
           <label for="formFile" class="form-label">Choose the your lovely image place and write the story</label>
           <input class="form-control" type="file" name="image" >
         </div>
        <div class="form-floating">
           <textarea class="form-control" placeholder="Leave a story here" name="text" style="height: 150px" ></textarea>
           <label for="floatingTextarea2">Leave a story here</label>
        </div>
        <hr class="my-4">
        <button class="w-100 btn btn-primary btn-lg" type="submit" name = "upload" value = "Upload Image">Upload a story</button>
        </form>
     </div>

     <!--Contact information in three social platforms-->
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center"> <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1"><svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg></a>
      <span class="text-muted">&copy; Made with passion and love by Nurzhan</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-muted" href="https://twitter.com/"><i class="fa-brands fa-twitter fa-2x"></i><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
      <li class="ms-3"></i><a class="text-muted" href="https://www.instagram.com/"><i class="fa-brands fa-instagram fa-2x"></i><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="https://www.facebook.com/"><i class="fa-brands fa-facebook fa-2x"></i><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
    </ul>
  </footer>
  </body>
</html>