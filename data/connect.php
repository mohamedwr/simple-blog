<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "simple-blog";

// Create connection
$conn = @new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<h1 style='text-align:center;'>Connection failed: There is something wrong with the Database<br>Visit us later</h1>");
}
