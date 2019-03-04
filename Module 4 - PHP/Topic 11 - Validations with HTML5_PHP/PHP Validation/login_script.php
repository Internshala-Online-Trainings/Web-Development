<?php

require 'common.php';
$email = $_POST['email'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
  echo "Incorrect email";
}
$password = $_POST['password'];
if (strlen($password) < 6) {
  echo "Password should have at-least 6 characters";
}
$email = mysqli_real_escape_string($con, $email);
$password = mysqli_real_escape_string($con, $password);

//use insert query and store the data in the database.