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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!--CSS style-->
    <link rel="stylesheet" href="CSS\Homepage.css">
    <title>Covid</title>
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
            <a class="py-2 d-none d-md-inline-block" href="Booking.php">Booking</a>
            <a class="py-2 d-none d-md-inline-block" href="upload_story.php">Story</a>
            <a class="py-2 d-none d-md-inline-block" href="Register.php">Sign up</a>
            <a class="py-2 d-none d-md-inline-block" href="Login.php">Sign in</a>
        </nav>
    </header>
    <main>
        <!--Covid instruction-->
        <section id="Covid">
            <h2 class="Covidhead"> Covid-19 </h2>
            <img src="Images_Covid\coronavirus-2.jpg"
                alt="Covid-19" class=ImgGolden height="150px" width="300px">
            <p class="Covid1">
                Amet tellus cras adipiscing enim eu turpis. Accumsan tortor posuere ac ut consequat semper. Urna neque
                viverra justo nec. Enim ut sem viverra aliquet eget sit. Tellus molestie nunc non blandit massa enim nec
                dui nunc. Ipsum dolor sit amet consectetur adipiscing elit pellentesque. Maecenas pharetra convallis
                posuere morbi leo urna molestie. Morbi tincidunt augue interdum velit euismod in pellentesque. Nunc
                aliquet bibendum enim facilisis gravida neque convallis a. Nisl purus in mollis nunc sed. Congue nisi
                vitae suscipit tellus mauris a diam maecenas sed. Nisl suscipit adipiscing bibendum est ultricies
                integer quis auctor elit.
            </p>
            <p class="Covid2">
                Lacus sed viverra tellus in. Sit amet porttitor eget dolor morbi non arcu risus. Odio eu feugiat pretium
                nibh. Et ligula ullamcorper malesuada proin. Consequat mauris nunc congue nisi vitae suscipit tellus
                mauris. Morbi non arcu risus quis varius quam quisque. Arcu cursus euismod quis viverra nibh cras
                pulvinar mattis nunc. Ridiculus mus mauris vitae ultricies. Varius quam quisque id diam. Urna nunc id
                cursus metus aliquam eleifend.
            </p>
            <p class="Covid3">
                Sollicitudin tempor id eu nisl nunc mi. Viverra maecenas accumsan lacus vel facilisis volutpat. Egestas
                maecenas pharetra convallis posuere morbi leo. Feugiat nisl pretium fusce id velit ut tortor pretium
                viverra. Pellentesque eu tincidunt tortor aliquam nulla facilisi cras. Nulla facilisi morbi tempus
                iaculis urna id. Imperdiet dui accumsan sit amet nulla facilisi morbi. Vulputate sapien nec sagittis
                aliquam malesuada.
            </p>

            <p class="Covid4">
                Turpis cursus in hac habitasse platea dictumst quisque sagittis. Non diam phasellus vestibulum lorem.
                Cras fermentum odio eu feugiat. Accumsan tortor posuere ac ut consequat. Eget nulla facilisi etiam
                dignissim diam. Velit ut tortor pretium viverra. Sit amet justo donec enim diam vulputate. Eget egestas
                purus viverra accumsan in nisl nisi scelerisque eu.
            </p>
        </section>

        <div class="container">
            <div class="row">
                <!--Line graph from using the chartjs-->
                <div class="col-4">
                    <div id="Linegraph" style="height: 250px; width: 400px">
                        <canvas id="myChart"></canvas>
                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    <script src="JS/index_covid.js"></script>
                </div>
                <!--Description of Covid situation in Kazakhstan-->
              <div class="col-8">
                <p class="graph">
                Nunc pulvinar sapien et ligula ullamcorper malesuada proin. Ipsum dolor sit amet consectetur.
                Tristique risus nec feugiat in fermentum posuere. Proin libero nunc consequat interdum varius sit amet
                mattis vulputate.
                Eget sit amet tellus cras adipiscing enim eu turpis. Condimentum vitae sapien pellentesque habitant
                morbi tristique senectus et.
                Quam quisque id diam vel quam elementum pulvinar. Nisl suscipit adipiscing bibendum est ultricies. Lorem
                mollis aliquam ut porttitor leo a.
                Tincidunt augue interdum velit euismod in pellentesque. Donec et odio pellentesque diam volutpat.
                Ultrices tincidunt arcu non sodales neque sodales ut etiam sit.
                Urna nunc id cursus metus aliquam eleifend mi in nulla. Habitant morbi tristique senectus et netus et
                malesuada fames ac.
                Nam libero justo laoreet sit amet cursus sit. Nulla aliquet porttitor lacus luctus accumsan tortor
                posuere.
                Nunc sed augue lacus viverra vitae congue eu consequat ac. Diam maecenas sed enim ut sem.
                Faucibus turpis in eu mi bibendum neque egestas congue quisque. Magnis dis parturient montes nascetur
                ridiculus.
                Vestibulum sed arcu non odio euismod lacinia at quis.
                Cras ornare arcu dui vivamus. Pellentesque habitant morbi tristique senectus et netus.
                </p>
               </div> 
            </div>  
        </div>
    </main>

    <!--Contact information in three social platforms-->
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center"> <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1"><svg class="bi" width="30" height="24"><use xlink:href="#bootstrap" /></svg></a> <span class="text-muted">&copy; Made with passion and love by Nurzhan</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-muted" href="https://twitter.com/"><i class="fa-brands fa-twitter fa-2x"></i><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
            <li class="ms-3"></i><a class="text-muted" href="https://www.instagram.com/"><i class="fa-brands fa-instagram fa-2x"></i><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
            <li class="ms-3"><a class="text-muted" href="https://www.facebook.com/"><i class="fa-brands fa-facebook fa-2x"></i><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
        </ul>
    </footer>
</body>
</html>