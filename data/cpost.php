<?php

require('connect.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $lastid = 0;

    $result = $conn->query("SELECT id FROM posts ORDER BY id DESC");

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            $lastid = $row["id"];
            break;
        }
    }

    $id = $lastid + 1;
    $date = Date('Y-m-d');

    $sql = "INSERT INTO posts (id, title, pdate, tag, content)
    VALUES ('$id', '$_POST[title]', '$date', '$_POST[tag]', '$_POST[content]')";

    if ($conn->query($sql) === TRUE) {
        echo "Done - <a href='../control.php'>Home</a>";
    } else {
        echo "Failed - <a href='../control.php'>Home</a>";
    }

} else {
    header("Location: ../control.php");
}
