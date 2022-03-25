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
    <!--CSS style-->
    <link rel="stylesheet" href="CSS\Homepage.css">
    <title>Homepage</title>
</head>
<body>
  <!--logo with the name of company at the top-->
    <header class="site-header sticky-top py-1">
        <img class="logo-image" src="Images_Homepage\Kazakhstan.svg.png" alt="Logo-Kazakhstan" height="50px">
        <h4>Zaman</h4>
        <button class="btn1"><a href="Logout.php"><i class="fa-solid fa-right-from-bracket fa-lg"></i></a></button>
        <br>
        <!--navigation bar-->
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
    <!--Welcoming state to the users -->
    <main>
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="display-4 fw-normal">Welcome</h1>
                <p class="lead fw-normal">I am happy that you are going to look at multiple varities of trips across Kazakhstan.</p>
                <a class="btn btn-outline-secondary" href="#"><i class="fa-brands fa-app-store-ios fa-lg"></i> Download</a>
            </div>
            <div class="Kazakhstan">
                <img src="Images_Homepage\Kazakhstan_map.png" alt="Location of Kazakshtan" height="250px">
            </div>
            <div class="KazakhKhanate">
                <img src="Images_Homepage\KazakhKhanate.png" alt="Kazakh Khanate countryball" height="200px"> 
            </div>
            <div class="KazakhKhanateCountryball">
                <img src="Images_Homepage\Kazakh_Khanate.svg.png" alt="Kazakh Khanate" height="150px"> 
            </div>
        </div>
     <!--Individual carousel for Kazakhstan -->
      <section>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-pause="hover">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <h3 class="text">After the dismembering of the Golden Horde and White Horde, Kazakh Khanate was founded in the Zhetysu region of southeastern Kazakhstan in 1465 both Janybek Khan and Kerei Khan, who are from the line of Genghis Khan. Then, the Kazakhs were divided into three groups called "zhuzami". </h3>
              <img class="flag" src="Images_Homepage\Kazakh_Khanate.svg.png" alt="First Kazakh country" height="100px">
            </div>
            <div class="carousel-item">
              <h3 class="text">From 1922, the Kazakh khanate joined to USSR. It was the second-largest republic in soviet countries. It is capital was Almaty in the south part of the country. Unfortunately, forced collectivization had a negative impact on the nomad's lifestyle, as a result, 1.500.000 people died from starvation. Interesting fact that it was initially called Kirghiz ASSR and after 1925, it was renamed Kazakh ASSR.</h3>
              <img class="flag" src="Images_Homepage\Kazakh_Soviet_Socialist_Republic.svg.png" alt="KazSSR" height="100px">
            </div>
            <div class="carousel-item">
              <h3 class="text">Kazakhstan declared independence on 16 December 1991. The first president of Kazakhstan was Nursultan Nazarbayev. Later, the government relocated the capital from Almaty to Astana in 1997. </h3>
              <img class="flag" src="Images_Homepage\Kazakhstan.svg.png" alt="Kazakhstan" height="100px">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>
    </main>

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