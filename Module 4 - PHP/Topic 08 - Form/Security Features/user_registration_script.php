<?php

$con = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
session_start();
$email = mysqli_real_escape_string($con, $_POST['email']);
$first_name = mysqli_real_escape_string($con, $_POST['first_name']);
$last_name = mysqli_real_escape_string($con, $_POST['last_name']);
$phone = $_POST['phone'];
$user_registration_query = "insert into users(email, first_name, last_name, phone) values ('$email', '$first_name', '$last_name', '$phone')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
echo "User successfully inserted";
?>
