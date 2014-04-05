<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>


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

<?php
include 'data_layer.php';

$comm=get_comments_for_product(1);

foreach ($comm as $com):

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
<?php endforeach ?>