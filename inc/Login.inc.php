<?php
session_start();
// Connecting to database
include_once("inc/connection.php"); 
// Setting the sign up button
if(isset($_POST["submit"])){
  // Checking that username and password filled out the form
  if(empty($_POST["username"]) || empty($_POST["password"])){
    echo "Username and Password need to be filled out in the form.";
    }else{
      // Checking if it is filled out
       $username=$_POST['username'];
       $password=$_POST['password'];
    }
    // TO check that data will be taken from the signup2 table
    $sql="SELECT * FROM signup2 WHERE userName='$username' and userPassword='$password'";
    $result=mysqli_query($db,$sql);


$result_assoc = mysqli_fetch_assoc($result);

// When we enter to the system, it will redirect to "Homepage.php"
if(mysqli_num_rows($result) == 1){
   $_SESSION["username"] = $username;
   header("location: Homepage.php"); 
 }
  
}

//if the user put the wrong username or password, this will give an alert         
if(isset($_POST['submit']) && !isset($_SESSION['username'])){
  echo "<script>alert('Incorrect username or password')</script>";}
          
?>