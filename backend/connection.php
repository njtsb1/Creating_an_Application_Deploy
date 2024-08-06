<?php
$servername = "";
$username = "root";
$password = "Password123";
$database = "mybank";

// Create connection


$link = new mysqli($servername, $username, $password, $database);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>
