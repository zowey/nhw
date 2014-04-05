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
else if (isset($_GET['comment_text']))
{
    $query = "insert into comment (product_id, comment, votes) values (".$_GET['product_id'].",'".$_GET['comment_text']."', 0 )";

    mysql_query($query);
    $id= mysql_insert_id();

?>
    <div class = "comment">


        <div  onclick="upvote(<?php echo $id?>)" >
            +
        </div>


    <div id=vote_<?php echo $id ?>> <?= 0 ?>   </div>
    <div class="comment_text">
        <?=$_GET['comment_text'] ?>
    </div>
    </div>
<?php
}


?>