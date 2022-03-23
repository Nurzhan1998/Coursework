<?php

// Here I created the functions that will work properly, checking that passes all the requerements
function emptyInputSignup($name,$email,$username,$password) {
    $result;
    if (empty($name) || empty($email) || empty($username) || empty($password)) {
    $result = true;
    } else {
        $result = false;
    }
    return $result;
}
// if the username is not proper, it will give an error
function invalidusername($username) {
    $result;
    //format of the username, using search algorithm
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    $result = true;
    } else {
        $result = false;
    }
    return $result;
}
// if the email is not proper, it will give an error
function invalidemail($email) {
    $result;
    // ensuring that is an email with @
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $result = true;
    } else {
        $result = false;
    }
    return $result;
}
// if the password doesn't match, it will give an error
 function matchpassword($password) {
   $result;
   if ($password !== $password) {
   $result = true;
   } else {
    $result = false;
   }
    return $result;
}

// Ensuring that the user registered before login to the system. Otherwise, he can't enter to the system
function existsuser($db, $username, $email)  {
    $sql = "SELECT * FROM signup2 WHERE userName = ? OR userEmail = ?;";
    // submitting all the data into table signup2. All the data should go to the right colum(username:username, email:email...)
    $in = mysqli_stmt_init($db);
    // This is just safety measure to prevent destroying database, the user can put the code in the form instead of real user data and may damage or alter the database
    if (!mysqli_stmt_prepare($in,$sql)) {
         echo header("location: ../Register.php?error=infailed");
       exit();
    }
    // if everything goes smoothly, user will pass the data and execute it
    mysqli_stmt_bind_param($in, "ss", $username, $email);
    mysqli_stmt_execute($in);
    
    // the user can't sign up twice with the same data that he passed previously to database
    $resultData = mysqli_stmt_get_result($in);

    if ($row = mysqli_fetch_assoc($resultData)) {
       return $row;
    }
    else {
        $result = false;
        return $result;

    }

    mysqli_stmt_close($in);
}
// sign up function and inserting data to database
function createUser($db,$name,$email,$username,$password)  {
    $sql = "INSERT INTO signup2 (name, userEmail, userName, userPassword) VALUES (?, ?, ?, ?);";
    // To initialize the new data with database
    $in = mysqli_stmt_init($db);
    if (!mysqli_stmt_prepare($in,$sql)) {
         echo header("location: ../Register.php?error=infailed");
       exit();
    }
    // Password protection. (password_hash) - automatically updates and make it secure again if there any sort of hacker attack
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    // "ssss" - showing that we have 4 data(name,email,username and password)
    mysqli_stmt_bind_param($in, "ssss", $name, $email,$username,$password);
    mysqli_stmt_execute($in);
    mysqli_stmt_close($in);
    echo header("location: ../Login.php?error=none");
    exit();
}


?>