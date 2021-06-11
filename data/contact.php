<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    require('connect.php');

    $lastid = 0;

    $result = $conn->query("SELECT id FROM msg ORDER BY id DESC");

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            $lastid = $row["id"];
            break;
        }
    }

    $id = $lastid + 1;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sub = $_POST['subject'];
    $msg = $_POST['msg'];

    $sql = "INSERT INTO msg (id, name, email, subject, msg)
    VALUES ('$id', '$name', '$email', '$sub', '$msg');";

    if ($conn->query($sql) === TRUE) {
        echo "Done<br><a href='../about.php'>Home</a>";
    } else {
        echo "Failed";
    }

} else {
    header("Location: ../about.php");
}
