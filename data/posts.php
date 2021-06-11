<?php

 require('connect.php');

function oneNews(){
    $sql = "SELECT title, pdate, content FROM news ORDER BY id DESC";
    $result = $GLOBALS['conn']->query($sql);
    while($row = $result->fetch_assoc()) {
        echo '<div class="jumbotron"><h2 class="display-4">'.$row['title'].'</h2><span class="lead">'.$row['pdate'].'</span><span class="lead jsl-before">News</span><hr class="my-4"><p>'.$row['content'].'</p></div>';
        break;
    }
}

function oneLast(){
    $sql = "SELECT title, pdate, tag, content FROM posts ORDER BY id DESC";
    $result = $GLOBALS['conn']->query($sql);
    while($row = $result->fetch_assoc()) {
        echo '<div class="jumbotron"><h2 class="display-4">'.$row['title'].'</h2><span class="lead">'.$row['pdate'].'</span><span class="lead jsl-before">'.$row['tag'].'</span><hr class="my-4"><p>'.$row['content'].'</p></div>';
        break;
    }
}

function oneSoon(){
    $sql = "SELECT title, pdate, content FROM soon ORDER BY id DESC";
    $result = $GLOBALS['conn']->query($sql);
    while($row = $result->fetch_assoc()) {
        echo '<div class="jumbotron"><h2 class="display-4">'.$row['title'].'</h2><span class="lead">'.$row['pdate'].'</span><span class="lead jsl-before">Soon</span><hr class="my-4"><p>'.$row['content'].'</p></div>';
        break;
    }
}
