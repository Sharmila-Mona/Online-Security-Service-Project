<?php

// Database connection
$mysqli = new mysqli('localhost', 'root', '', 'security') or die(mysqli_error($mysqli));


// Insert user information into the database SIGNUP
if (isset($_POST['sub'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $date_of_birth = $_POST['dateofbirth'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $contact = $_POST['contact'];
  $address = $_POST['address'];


  $sql = "SELECT * FROM user_info WHERE email='$email'" or die($mysqli->error);
  $result = $mysqli->query($sql);
  $row = $result->fetch_assoc();

  if ($result) {

      if (mysqli_num_rows($result) >= 1) {
      } else {
          $mysqli->query("INSERT INTO user_info (id, name, email, date_of_birth, username, password, contact, address) VALUES (NULL, '$name', '$email', '$date_of_birth', '$username', '$password', '$contact', '$address')") or die($mysqli->error);

          header("Location: login.php");
      }
  } else {
      header("Location: signup.php");
  }
}

// LOGIN
if (isset($_POST['login'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM user_info WHERE username='$username' AND password='$password'" or die($mysqli->error);
    $result = $mysqli->query($sql);

    $row = $result->fetch_assoc();
    if ($result) {

        if (mysqli_num_rows($result) >= 1) {
            
            header("Location: test.php");
            
        } else {
            header("Location: user_login.php");
        }
    }
}


mysqli_close($conn);
?>