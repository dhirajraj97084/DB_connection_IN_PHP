<?php

$servername = "localhost";
$username = "root";
$password = ""; // Leave it empty if you don't have a password
$database = "college";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("*** Your database connection failed, please try again. *** " . mysqli_connect_error());
} else {
    echo "*** Your database connection was successful in PHP MySQL ***";
}

?>
