<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<script>

    $(document).ready(function()
    {
        $( "#form" ).submit(function(e) {
            e.preventDefault();
            var com =  $( "#komentar" ).val();

            var url = "votes.php?comment_text="+com+"&product_id=1";
            $( "#komentar" ).val("");
            $.get(url,function(data){
                $( "#comments" ).append( data );
            });

        });

    });

</script>

<script type="text/javascript">
    function upvote(id){
        var a=$('#vote_'+id).text();
        $('#vote_'+id).html(++a);

        var url = 'votes.php?comment_id='+id;
        $.get(url, function( data ) {
        });
        $('#upvote_'+id).hide();
    }
</script>

<p>Comment: </p>

<form id="form" action="comment2.php" method="post">
    <!-- use this input to store the clicked button value -->
    <input type='hidden' name="action" />
    <textarea id="komentar"  rows="3" cols="50"></textarea>
    <input type="submit" value="submit" class="submit">
</form>





    <?php
    include 'data_layer.php';
    if (!isset($_GET['order']))
    {
        $comm=get_comments_for_product(1);
    }
    else if ($_GET['order']=='time')
        $comm=get_comments_for_product(1, 'time');
?>
    <a href="comment.php?order=time">Newest</a>
    <a href="comment.php">Popular</a>
<div id="comments">
    <?php

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

    ?>
</div>