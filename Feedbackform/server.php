<?php
session_start();

// initializing variables
$name = "";
$email    = "";
$suggestion =" ";
$joke= " ";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'feedback');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $suggestion = mysqli_real_escape_string($db, $_POST['suggestion']);
  $joke = mysqli_real_escape_string($db, $_POST['joke']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($suggestion)) { array_push($errors, "If no suggestion, write none"); }
  if (empty($joke)) { array_push($errors, "If no jokes, write none"); }

  if (count($errors) == 0) {

    $query = "INSERT INTO users (name, email, suggestion, joke) 
          VALUES('$name', '$email', '$suggestion', '$joke')";
    mysqli_query($db, $query);
    $_SESSION['name'] = $name;
    $_SESSION['success'] = "You are now logged in";
    // header('location: thank.html');
  }
}
?>