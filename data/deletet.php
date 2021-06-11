<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

require('connect.php');

$table = $_POST['tname'];

if ($conn->query("TRUNCATE TABLE $table") == TRUE) {
    echo "Done - <a href='../index.php'>Home</a>";
} else {
    echo "Failed - <a href='../index.php'>Home</a>";
}

} else{
    header("Location: ../index.php");
}
