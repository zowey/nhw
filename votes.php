<?php
include 'db.php';


if (isset ($_GET['comment_id'])){

    $query = "select * from comment where id =".$_GET['comment_id'];
    $result=mysql_query($query);
    $row= mysql_fetch_array($result);
    $comment_vote=$row['votes'];
    $comment_vote++;

    $query = "update comment set votes= $comment_vote where id =  ".$_GET['comment_id'];

    mysql_query($query);

    $query = "insert into user_vote_comment values(1,  ".$_GET['comment_id'].")";

    mysql_query($query);
}


?>