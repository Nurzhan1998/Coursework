<?php

// Connection to database called "data1"
$servername = "localhost";
$dbname = "data1";
$usernamedb = "root";
$passworddb = "";

$db = new mysqli($servername, $usernamedb, $passworddb, $dbname,);

if($db -> connect_error) {
 die("Connection failed: " . $db -> connect_error);
}

// Booking.php functions

// To check if book button have been clicked
if (isset($_POST['book'])) {
    
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $payment = $_POST['payment'];
    $zip = $_POST['zip'];

    $db -> query("INSERT INTO book1(First_name, Last_name, Email, Mobile_number, Address, Country, Payment, Zip) 
    VALUES ('$firstName', '$lastName', '$email', '$mobile', '$address', '$country', '$payment', '$zip') ") or die($db -> error);
}

// Setting the delete function
if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $db -> query("DELETE FROM book1 WHERE id=$id") or die($db->error());
}

//End of booking.php functions

// Upload_story.php functions 

$message = "";

if(isset($_POST['upload'])) {
    // It will store the images on the "uploads" folder
    $select = "uploads/" .basename($_FILES['image']['name']);

    //All the data that was putting into input file and written in textarea will be taken from the form
    $image = $_FILES['image']['name'];
    $text = $_POST['text'];

    //Then it goes to database(table image)
    $sql = "INSERT INTO images (image,text) VALUES ('$image', '$text')";
    mysqli_query($db,$sql); // stores the submitted data to database

    //Dsiplay the image on the "new1.php", without this it simply doesn't display
    if(move_uploaded_file($_FILES['image']['tmp_name'], $select)) {
     $message = "Image uploaded";
    } else {
     $message = "There was a problem uploading image";
    }

}

// Setting the delete function
if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $db -> query("DELETE FROM images WHERE id=$id") or die($db->error());
}

// End of the upload_story.php

  
?>