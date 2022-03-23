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
  <!--End of Font Awesome-->
  <!--Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"> </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"> </script>
  <!--CSS style-->
  <link rel="stylesheet" href="CSS\Homepage.css">
  <title>Trip</title>
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
      <a class="py-2 d-none d-md-inline-block" href="Cost.php">Cost</a>
      <a class="py-2 d-none d-md-inline-block" href="Booking.php">Booking</a>
      <a class="py-2 d-none d-md-inline-block" href="Covid.php">Covid</a>
      <a class="py-2 d-none d-md-inline-block" href="upload_story.php">Story</a>
      <a class="py-2 d-none d-md-inline-block" href="Register.php">Sign up</a>
      <a class="py-2 d-none d-md-inline-block" href="Login.php">Sign in</a>
    </nav>
  </header>

  <h2 class="City"> Cities </h2>
  <!--4 major tourist cities-->
  <div class="container">
    <div class="row g-2">
      <div class="col-6">
        <div class="p-3 border bg-light">
          <h5> Astana </h5>
          <img src="Images_Trip\Astana.jpg"
            alt="Astana" height="300px" width="350px">
          <p class="Capital">Volutpat blandit aliquam etiam erat velit scelerisque in dictum.
            Vestibulum sed arcu non odio euismod lacinia at quis.Dolor magna eget est lorem ipsum.
            Blandit volutpat maecenas volutpat blandit aliquam etiam. Semper eget duis at tellus at urna condimentum.
            Consectetur adipiscing elit pellentesque habitant morbi tristique senectus et netus.
          </p>
        </div>
      </div>
      <div class="col-6">
        <div class="p-3 border bg-light">
          <h5> Almaty </h5>
          <img src="Images_Trip\Almaty.jpg"
            alt="Almaty" height="300px" width="350px">
          <p class="Capital">Libero nunc consequat interdum varius sit amet mattis vulputate enim. Arcu odio ut sem nulla pharetra. 
            Nunc eget lorem dolor sed viverra ipsum. Augue eget arcu dictum varius duis at consectetur lorem. Elementum nibh tellus molestie nunc non blandit massa enim. 
            Vitae tempus quam pellentesque nec nam aliquam sem. Tellus elementum sagittis vitae et leo duis ut.
          </p>
        </div>
      </div>
      <div class="col-6">
        <div class="p-3 border bg-light">
          <h5> Aktau </h5>
          <img src="Images_Trip\Aktau.jpg"
            alt="Almaty" height="300px" width="350px">
          <p class="Capital">Lectus vestibulum mattis ullamcorper velit. Tellus at urna condimentum mattis. 
            Aliquet sagittis id consectetur purus ut faucibus pulvinar elementum integer. Nullam eget felis eget nunc lobortis. 
            Ut sem nulla pharetra diam sit amet nisl suscipit. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien.
          </p>
        </div>
      </div>
      <div class="col-6">
        <div class="p-3 border bg-light">
          <h5> Burabai </h5>
          <img src="Images_Trip\Burabai.jpg"
            alt="Almaty" height="300px" width="350px">
          <p class="Capital">Congue mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar. 
            Est placerat in egestas erat. Eu tincidunt tortor aliquam nulla facilisi cras fermentum odio. 
            Fermentum leo vel orci porta non pulvinar neque laoreet. 
            Lacus vestibulum sed arcu non odio euismod lacinia at quis. Id semper risus in hendrerit.
          </p>
        </div>
      </div>
    </div>
  </div>

  <h2 class="City"> Tourist attractions </h2>
  <!--4 most attractive places-->
  <div class="container">
    <div class="row g-2">
      <div class="col-6">
        <div class="p-3 border bg-light">
          <h5> Beket-Ata </h5>
          <img src="Images_Trip\Beket-Ata.jpg"
            alt="Beket-Ata" height="300px" width="350px">
          <p class="Capital">Malesuada fames ac turpis egestas sed. Interdum velit laoreet id donec ultrices tincidunt arcu non sodales. 
            Lobortis feugiat vivamus at augue eget arcu dictum varius duis. Netus et malesuada fames ac turpis egestas integer. 
            Suspendisse faucibus interdum posuere lorem ipsum. Egestas diam in arcu cursus. 
          </p>
        </div>
      </div>
      <div class="col-6">
        <div class="p-3 border bg-light">
          <h5> Arystan Bab and Khoja Ahmed Yassawi </h5>
          <img src="Images_Trip\Arystan Bab and Khoja Ahmed Yassawi.jpg"
            alt="Almaty" height="300px" width="350px">
          <p class="Capital">Vulputate odio ut enim blandit volutpat maecenas volutpat blandit aliquam. 
            Blandit cursus risus at ultrices mi tempus imperdiet. Et ligula ullamcorper malesuada proin libero. 
            Pharetra et ultrices neque ornare aenean euismod. 
            Dictumst quisque sagittis purus sit amet volutpat. Faucibus pulvinar elementum integer enim neque volutpat.
          </p>
        </div>
      </div>
      <div class="col-6">
        <div class="p-3 border bg-light">
          <h5> BAO </h5>
          <img src="Images_Trip\BAO.jpg"
            alt="Almaty" height="300px" width="350px">
          <p class="Capital">Porta lorem mollis aliquam ut porttitor. Eget mi proin sed libero. 
            Volutpat commodo sed egestas egestas. At tempor commodo ullamcorper a lacus vestibulum sed arcu. 
            Turpis massa tincidunt dui ut ornare lectus. 
            Risus nullam eget felis eget nunc lobortis. Cursus mattis molestie a iaculis at erat.
          </p>
        </div>
      </div>
      <div class="col-6">
        <div class="p-3 border bg-light">
          <h5>  Medeo ice rink </h5>
          <img src="Images_Trip\Medeobanen.jpg"
            alt="Almaty" height="300px" width="350px">
          <p class="Capital">Aliquam sem fringilla ut morbi tincidunt augue interdum. Purus gravida quis blandit turpis cursus in. 
            Quis vel eros donec ac odio tempor orci dapibus ultrices. Ante in nibh mauris cursus mattis. 
            Eget aliquet nibh praesent tristique magna sit amet purus. 
            Vestibulum sed arcu non odio euismod lacinia at. Suspendisse in est ante in nibh mauris cursus mattis molestie.
          </p>
        </div>
      </div>
    </div>
  </div>

    <!--Contact information in three social platforms -->
   <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center"> <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1"> <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg> </a>
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