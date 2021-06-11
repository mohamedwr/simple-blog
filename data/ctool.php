<?php

require('connect.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $lastid = 0;

    $result = $conn->query("SELECT id FROM tool ORDER BY id DESC");

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            $lastid = $row["id"];
            break;
        }
    }

    $id = $lastid + 1;
    $date = Date('Y-m-d');

    $sql = "INSERT INTO tool (id, title, content, link)
    VALUES ('$id', '$_POST[title]', '$_POST[content]', '$_POST[link]')";

    if ($conn->query($sql) === TRUE) {
        echo "Done - <a href='../control.php'>Home</a>";
    } else {
        echo "Failed - <a href='../control.php'>Home</a>";
    }

} else {
    header("Location: ../control.php");
}
