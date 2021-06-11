<?php

session_start();

require('data/msgs.php');

if(@$_SESSION['password'] !== '@admin000@'){
    header("Location: admin.php");
}

?>
<!DOCTYPE html>
<html>
    <head>
        <?php require("data/head.php"); ?>
        <style>
            input,textarea,select,option{
                background-color: #E9ECEF!important;
            }
        </style>
    </head>
    <body style="background-color:#E9ECEF;">

        <?php require("data/navbar.php"); ?>

        <section class="main row">
            <main>
                <div class="alert alert-primary text-center alerts" role="alert">
                    <form action="data/logout.php" method="post">
                        <button class="btn btn-danger" type="submit">Logout</button>
                    </form>
                </div>
                <div class="alert alert-primary text-center alerts" role="alert">
                    Messages
                </div>
                <?php msgs(); ?>
                <div class="alert alert-primary text-center alerts" role="alert">
                    Create A Post
                </div>
                <form action="data/cpost.php" method="post">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Title</label>
                        <input required type="text" class="form-control" id="exampleFormControlInput1" name="title">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Tag</label>
                        <select required class="form-control" id="exampleFormControlSelect1" name="tag">
                            <option value="Normal">Normal</option>
                            <option value="Lesson">Lesson</option>
                            <option value="Advice">Advice</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Content</label>
                        <textarea required class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Create</button>
                    <hr>
                </form>
                <div class="alert alert-primary text-center alerts" role="alert">
                    Create A News Post
                </div>
                <form action="data/cnews.php" method="post">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Title</label>
                        <input required type="text" class="form-control" id="exampleFormControlInput1" name="title">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Content</label>
                        <textarea required class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Create</button>
                    <hr>
                </form>
                <div class="alert alert-primary text-center alerts" role="alert">
                    Create A Coming Soon Post
                </div>
                <form action="data/csoon.php" method="post">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Title</label>
                        <input required type="text" class="form-control" id="exampleFormControlInput1" name="title">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Content</label>
                        <textarea required class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Create</button>
                    <hr>
                </form>
                <div class="alert alert-primary text-center alerts" role="alert">
                    Create A Tool
                </div>
                <form action="data/ctool.php" method="post">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Title</label>
                        <input required type="text" class="form-control" id="exampleFormControlInput1" name="title">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Link</label>
                        <input required type="text" class="form-control" id="exampleFormControlInput1" name="link">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Content</label>
                        <textarea required class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Create</button>
                    <hr>
                </form>
            </main>
        </section>

        <?php require("data/footer.php"); ?>

        <?php require("data/scripts.php"); ?>

    </body>
</html>
