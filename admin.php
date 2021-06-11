<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    session_start();
    $_SESSION['password'] = $_POST['pass'];
    header("Location: control.php");
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
        <form class="form-inline" action="admin.php" method="post">
            <input class="form-control" type="password" name="pass" placeholder="Password" />
            <button class="btn btn-outline-success" type="submit">Continue</button>
            <a href="index.php" class="btn btn-outline-success">Home</a>
        </form>
    </body>
</html>
