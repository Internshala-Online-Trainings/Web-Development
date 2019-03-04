<?php

$con = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
$select_query = "SELECT id, email, first_name FROM users";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
?>