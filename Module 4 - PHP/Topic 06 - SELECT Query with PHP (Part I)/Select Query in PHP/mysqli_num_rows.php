<?php

$con = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
$select_query = "SELECT id, email, first_name FROM user";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
$total_rows_fetched = mysqli_num_rows($select_query_result);
echo $total_rows_fetched;
?>