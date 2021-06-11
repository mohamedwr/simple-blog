<?php

require('connect.php');

function msgs(){
    $sql = "SELECT name, email, subject, msg FROM msg ORDER BY id DESC";
    $result = $GLOBALS['conn']->query($sql);
    while($row = $result->fetch_assoc()) {
        echo
        '<div class="jumbotron">
        <h2 class="display-4">'.$row['subject'].'</h2>
        <span class="lead">'.$row['name'].'</span>
        <span class="lead jsl-before">'.$row['email'].'</span>
        <hr class="my-4">
        <p>'.$row['msg'].'</p>
        </div>';
    }
}
