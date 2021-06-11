<?php

session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

require('connect.php');

$table = $_POST['tname'];

$id = $_POST['id'];

$sql = "DELETE FROM $table WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Done - <a href='../index.php'>Home</a>";
} else {
    echo "Failed - <a href='../index.php'>Home</a>";
}

} else{
    header("Location: ../index.php");
}