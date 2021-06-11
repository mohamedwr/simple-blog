<?php

session_start();

 require('connect.php');

if(@$_SESSION['password'] == '@admin000@'){

    function Start(){
        echo '<div class="alert alert-primary text-center alerts" role="alert">
                <form action="data/deletet.php" method="post">
                    <button class="btn btn-danger" type="submit"><i class="fas fa-times"></i></button>
                    <input style="display:none;" value="posts" name="tname" />
                </form>
            </div>';
    }

    function News(){
        $sql = "SELECT id, title, pdate, content FROM news ORDER BY id DESC";
        $result = $GLOBALS['conn']->query($sql);
        while($row = $result->fetch_assoc()) {
            echo '<div class="jumbotron">
            <h2 class="display-4">
            <form method="post" action="data/delete.php" style="display:inline-block!important;">
            <button class="btn btn-danger" type="submits"><i class="fas fa-times"></i></button>
            <input style="display:none;" value="news" name="tname" />
            <input style="display:none;" value="'.$row['id'].'" name="id" />
            </form> '.$row['title'].'</h2>
            <span class="lead">'.$row['pdate'].'</span>
            <span class="lead jsl-before">News</span>
            <hr class="my-4">
            <p>'.$row['content'].'</p>
            </div>';
        }
    }

    function Normal(){
        $sql = "SELECT id, title, pdate, tag, content FROM posts WHERE tag = 'Normal' ORDER BY id DESC";
        $result = $GLOBALS['conn']->query($sql);
        while($row = $result->fetch_assoc()) {
            echo '<div class="jumbotron">
            <h2 class="display-4">
            <form method="post" action="data/delete.php" style="display:inline-block!important;">
            <button class="btn btn-danger" type="submits"><i class="fas fa-times"></i></button>
            <input style="display:none;" value="posts" name="tname" />
            <input style="display:none;" value="'.$row['id'].'" name="id" />
            </form> '.$row['title'].'</h2>
            <span class="lead">'.$row['pdate'].'</span>
            <span class="lead jsl-before">'.$row['tag'].'</span>
            <hr class="my-4">
            <p>'.$row['content'].'</p>
            </div>';
        }
    }

    function Less(){
        $sql = "SELECT id, title, pdate, tag, content FROM posts WHERE tag = 'Lesson' ORDER BY id DESC";
        $result = $GLOBALS['conn']->query($sql);
        while($row = $result->fetch_assoc()) {
            echo '<div class="jumbotron">
            <h2 class="display-4">
            <form method="post" action="data/delete.php" style="display:inline-block!important;">
            <button class="btn btn-danger" type="submits"><i class="fas fa-times"></i></button>
            <input style="display:none;" value="posts" name="tname" />
            <input style="display:none;" value="'.$row['id'].'" name="id" />
            </form> '.$row['title'].'</h2>
            <span class="lead">'.$row['pdate'].'</span>
            <span class="lead jsl-before">'.$row['tag'].'</span>
            <hr class="my-4">
            <p>'.$row['content'].'</p>
            </div>';
        }
    }

    function Advices(){
        $sql = "SELECT id, title, pdate, tag, content FROM posts WHERE tag = 'Advice' ORDER BY id DESC";
        $result = $GLOBALS['conn']->query($sql);
        while($row = $result->fetch_assoc()) {
            echo '<div class="jumbotron">
            <h2 class="display-4">
            <form method="post" action="data/delete.php" style="display:inline-block!important;">
            <button class="btn btn-danger" type="submits"><i class="fas fa-times"></i></button>
            <input style="display:none;" value="posts" name="tname" />
            <input style="display:none;" value="'.$row['id'].'" name="id" />
            </form> '.$row['title'].'</h2>
            <span class="lead">'.$row['pdate'].'</span>
            <span class="lead jsl-before">'.$row['tag'].'</span>
            <hr class="my-4">
            <p>'.$row['content'].'</p>
            </div>';
        }
    }

    function Soon(){
        $sql = "SELECT id, title, pdate, content FROM soon ORDER BY id DESC";
        $result = $GLOBALS['conn']->query($sql);
        while($row = $result->fetch_assoc()) {
            echo '<div class="jumbotron">
            <h2 class="display-4">
            <form method="post" action="data/delete.php" style="display:inline-block!important;">
            <button class="btn btn-danger" type="submits"><i class="fas fa-times"></i></button>
            <input style="display:none;" value="soon" name="tname" />
            <input style="display:none;" value="'.$row['id'].'" name="id" />
            </form> '.$row['title'].'</h2>
            <span class="lead">'.$row['pdate'].'</span>
            <span class="lead jsl-before">Soon</span>
            <hr class="my-4">
            <p>'.$row['content'].'</p>
            </div>';
        }
    }

} else {

    function Start(){}

    function News(){
        $sql = "SELECT title, pdate, content FROM news ORDER BY id DESC";
        $result = $GLOBALS['conn']->query($sql);
        while($row = $result->fetch_assoc()) {
            echo '<div class="jumbotron"><h2 class="display-4">'.$row['title'].'</h2><span class="lead">'.$row['pdate'].'</span><span class="lead jsl-before">News</span><hr class="my-4"><p>'.$row['content'].'</p></div>';
        }
    }

    function Normal(){
        $sql = "SELECT title, pdate, tag, content FROM posts WHERE tag = 'Normal' ORDER BY id DESC";
        $result = $GLOBALS['conn']->query($sql);
        while($row = $result->fetch_assoc()) {
            echo '<div class="jumbotron"><h2 class="display-4">'.$row['title'].'</h2><span class="lead">'.$row['pdate'].'</span><span class="lead jsl-before">'.$row['tag'].'</span><hr class="my-4"><p>'.$row['content'].'</p></div>';
        }
    }

    function Less(){
        $sql = "SELECT title, pdate, tag, content FROM posts WHERE tag = 'Lesson' ORDER BY id DESC";
        $result = $GLOBALS['conn']->query($sql);
        while($row = $result->fetch_assoc()) {
            echo '<div class="jumbotron"><h2 class="display-4">'.$row['title'].'</h2><span class="lead">'.$row['pdate'].'</span><span class="lead jsl-before">'.$row['tag'].'</span><hr class="my-4"><p>'.$row['content'].'</p></div>';
        }
    }

    function Advices(){
        $sql = "SELECT title, pdate, tag, content FROM posts WHERE tag = 'Advice' ORDER BY id DESC";
        $result = $GLOBALS['conn']->query($sql);
        while($row = $result->fetch_assoc()) {
            echo '<div class="jumbotron"><h2 class="display-4">'.$row['title'].'</h2><span class="lead">'.$row['pdate'].'</span><span class="lead jsl-before">'.$row['tag'].'</span><hr class="my-4"><p>'.$row['content'].'</p></div>';
        }
    }

    function Soon(){
        $sql = "SELECT title, pdate, content FROM soon ORDER BY id DESC";
        $result = $GLOBALS['conn']->query($sql);
        while($row = $result->fetch_assoc()) {
            echo '<div class="jumbotron"><h2 class="display-4">'.$row['title'].'</h2><span class="lead">'.$row['pdate'].'</span><span class="lead jsl-before">Soon</span><hr class="my-4"><p>'.$row['content'].'</p></div>';
        }
    }

}
