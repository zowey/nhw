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


        <div  onclick="upvote(<?php echo $id?>)"  id="upvote_<?php echo $id?>">
            +
        </div>


    <div id=vote_<?php echo $id ?>> <?= 0 ?>   </div>
    <div class="comment_text">
        <?=$_GET['comment_text'] ?>
    </div>
    </div>
<?php
}
else if (isset ($_GET['rating']))
{
    $query = "select * from product where id =".$_GET['product_id'];
    $result=mysql_query($query);
    $row= mysql_fetch_array($result);
    $rating=$row['rating']+$_GET['rating'];
    $voters=$row['voters']+1;
    $query = "update product set rating = $rating, voters=$voters where id=".$_GET['product_id'];
    mysql_query($query);

    $query = "insert into user_rate_product (user_id, product_id, score) values (1,".$_GET['product_id'].", ".$_GET['rating']." )";
    mysql_query($query);

}
else if (isset($_GET['comment_order']))
{
    include 'data_layer.php';
    if ($_GET['comment_order']==1)
    {
        $comm=get_comments_for_product(1);
    }
    else
    {
        $comm=get_comments_for_product(1, 'time');
    }

    foreach ($comm as $com){

        ?>
        <div class = "comment">
            <?php if (!check_if_user_voted($com['id'])): ?>

                <div  onclick="upvote(<?php echo $com['id']?>)" id="upvote_<?php echo $com['id']?>">
                    +
                </div>
            <?php  endif; ?>

            <div id=vote_<?php echo $com['id']?>> <?= $com['votes'] ?>   </div>
            <div class="comment_text">
                <?= $com['comment'] ?>
            </div>
        </div>
    <?php }
}

?>