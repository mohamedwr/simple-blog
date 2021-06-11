<?php

session_start();

require('connect.php');

if(@$_SESSION['password'] == '@admin000@'){
    function Tools(){

        $sql = "SELECT id, title, content, link FROM tool ORDER BY id DESC";
        $result = $GLOBALS['conn']->query($sql);

        echo '<div class="alert alert-primary text-center alerts" role="alert">
                <form action="data/deletet.php" method="post">
                    <button class="btn btn-danger" type="submit"><i class="fas fa-times"></i></button>
                    <input style="display:none;" value="tool" name="tname" />
                </form>
            </div>';

        while($row = $result->fetch_assoc()) {
            echo '<div class="jumbotron">
            <h2 class="display-4">
            <form method="post" action="data/delete.php" style="display:inline-block!important;">
            <button class="btn btn-danger" type="submits"><i class="fas fa-times"></i></button>
            <input style="display:none;" value="tool" name="tname" />
            <input style="display:none;" value="'.$row['id'].'" name="id" />
            </form> '.$row['title'].'</h2>
            <hr class="my-4">
            <p>'.$row['content'].'<br><br><a href="'.$row['link'].'" target="_blank" class="btn btn-outline-success">Visit Offical Link</a></p>
            </div>';
        }
    }
} else {
    function Tools(){
        $sql = "SELECT title, content, link FROM tool ORDER BY id DESC";
        $result = $GLOBALS['conn']->query($sql);
        while($row = $result->fetch_assoc()) {
            echo '<div class="jumbotron">
            <h2 class="display-4">'.$row['title'].'</h2>
            <hr class="my-4">
            <p>'.$row['content'].'<br><br><a href="'.$row['link'].'" target="_blank" class="btn btn-outline-success">Visit Offical Link</a></p>
            </div>';
        }
    }
}
