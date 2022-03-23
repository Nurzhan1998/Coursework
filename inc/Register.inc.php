<?php
// To inspect if the user fill the form into "register.php" instead of "Register.inc.php"
if (isset($_POST["submit"])) {
   $name = $_POST["name"];
   $email = $_POST["email"];
   $username = $_POST["username"];
   $password = $_POST["password"];

   require_once 'connection.php';
   require_once 'functions.inc.php';

    // To ensure that user did not miss anything in the form
   if (emptyInputSignup($name,$email,$username,$password) !== FALSE) {
       echo header("location: ../Register.php?error=emptyinput");
       exit();
   }
   if (invalidusername($username) !== FALSE) {
       echo header("location: ../Register.php?error=invalidusername");
       exit();
   }
   if (invalidemail($email) !== FALSE) {
       echo header("location: ../Register.php?error=invalidemail");
       exit();
   }
   if (matchpassword($password) !== FALSE) {
       echo header("location: ../Register.php?error=notmatching");
       exit();
   }
   if (existsuser($db, $username, $email) !== FALSE) {
       echo header("location: ../Register.php?error=existinguser");
       exit();
   }
 // if everything is okay, it will create a new user
   createUser($db,$name,$email,$username,$password);


// Otherwise it will redirect to "Register.php"
} else {
    echo header("location: ../Register.php");
    exit();
}


?>