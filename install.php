<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST['pass'] == '@admin000@'){

        require('data/connect.php');

        $msg = "CREATE TABLE msg (
        id INT(11),
        name VARCHAR(255),
        email VARCHAR(255),
        subject VARCHAR(255),
        msg TEXT(65535)
        )";

        if ($conn->query($msg) === TRUE) {
            echo "Table msg created successfully<br>";
        } else {
            echo "Error creating table: " . $conn->error;
        }

        $posts = "CREATE TABLE posts (
        id INT(11),
        title VARCHAR(255),
        pdate VARCHAR(255),
        tag VARCHAR(255),
        content TEXT(65535)
        )";

        if ($conn->query($posts) === TRUE) {
            echo "Table posts created successfully<br>";
        } else {
            echo "<br>Error creating table: " . $conn->error;
        }

        $soon = "CREATE TABLE soon (
        id INT(11),
        title VARCHAR(255),
        pdate VARCHAR(255),
        content TEXT(65535)
        )";

        if ($conn->query($soon) === TRUE) {
            echo "Table soon created successfully<br>";
        } else {
            echo "<br>Error creating table: " . $conn->error;
        }

        $news = "CREATE TABLE news (
        id INT(11),
        title VARCHAR(255),
        pdate VARCHAR(255),
        content TEXT(65535)
        )";

        if ($conn->query($news) === TRUE) {
            echo "Table news created successfully<br>";
        } else {
            echo "<br>Error creating table: " . $conn->error;
        }

        $tool = "CREATE TABLE tool (
        id INT(11),
        title VARCHAR(255),
        content TEXT(65535),
        link VARCHAR(255)
        )";

        if ($conn->query($tool) === TRUE) {
            echo "Table tool created successfully<br>";
        } else {
            echo "<br>Error creating table: " . $conn->error;
        }

    }
}

?>
<!DOCTYPE html>
<html>
    <head><?php require('data/head.php'); ?>
        <style>
            form{
                background-color: #ddd;
                padding:10px;
            }
        </style>
    </head>
    <body>
        <form class="form-inline" action="install.php" method="post">
            <input class="form-control" type="password" name="pass" placeholder="Password" />
            <button class="btn btn-outline-success" type="submit">Continue</button>
            <a href="index.php" class="btn btn-outline-success">Home</a>
        </form>
    </body>
</html>
