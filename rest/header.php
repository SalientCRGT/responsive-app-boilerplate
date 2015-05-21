<?php
// Set JSON output
header('Content-Type: application/json');

//open connection to mysql db
$connection = mysqli_connect("localhost","root","root","lance") or die("Error " . mysqli_error($connection));
?>
