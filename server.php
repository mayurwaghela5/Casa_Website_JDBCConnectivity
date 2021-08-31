<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['submit'])){ 

  // receive all input values from the form
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['pass'];
  
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  
 $user_check_query = "SELECT * FROM users WHERE user='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['user'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password_1 = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (user, email, pass) 
  			  VALUES('$username', '$email', '$password_1')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index1.php');
  }
}

// ... 
// LOGIN USER
if (isset($_POST['login'])) {
  $username =  $_POST['user'];
  $password =  $_POST['pass'];

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password_1 = md5($password);
  	$query = "SELECT * FROM users WHERE user='$username' AND pass='$password_1'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['user'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index1.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>