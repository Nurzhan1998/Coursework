<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Your booking</title>
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
            <a class="py-2 d-none d-md-inline-block" href="Covid.php">Covid</a>
            <a class="py-2 d-none d-md-inline-block" href="upload_story.php">Story</a>
            <a class="py-2 d-none d-md-inline-block" href="Register.php">Sign up</a>
            <a class="py-2 d-none d-md-inline-block" href="Login.php">Sign in</a>
        </nav>
     </header>
    
     <?php require_once 'inc/connection.php'?>
     <div class = "container">
     <?php
     // Selecting the data from images table
     $result = $db -> query("SELECT * FROM book1") or die($db -> error);
     ?>
     <div class="row justify-content-center">
       <table class="table">
         <thead>
           <tr>
             <th> First Name </th>
             <th> Last Name </th>
             <th> Email </th>
             <th> Mobile Number </th>
             <th> Address </th>
             <th> Country </th>
             <th> Payment </th>
             <th> Zip </th>
             <th colspan = "1"> Action </th>
           </tr>
         </thead>
         <?php  
         // Pulling the data from database
         while ($row = $result -> fetch_assoc()):?>
         <tr>
           <td> <?php echo $row['First_name']; ?></td>
           <td> <?php echo $row['Last_name']; ?></td>
           <td> <?php echo $row['Email']; ?></td>
           <td> <?php echo $row['Mobile_number']; ?></td>
           <td> <?php echo $row['Address']; ?></td>
           <td> <?php echo $row['Country']; ?></td>
           <td> <?php echo $row['Payment']; ?></td>
           <td> <?php echo $row['Zip']; ?></td>
           <td> 
             <a href="new.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Cancel an appointment</a>
          </td>
         </tr>
         <?php endwhile; ?>
       </table>
     </div>
     </div>
    
     <?php
     // display the result on the screen
     function pre_r($array) {
         echo '<pre>';
         print_r($array);
         echo '</pre>';
     }
     ?>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>

      <?php
         $target_dir = "uploads/";
         $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"] );

         if (move_uploaded_file($_FILES["fileToUpload"] ["tmp_name"], $target_file)) {
         
            echo '<script>alert("The file has been uploaded")</script>';}  
         else {
            echo "";}
      ?>

     <!--Contact information in three social platforms-->
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