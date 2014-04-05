<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

    <script src="build/bootstrap-rating-input.min.js"></script>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">

</head>
<script>



    $(document).ready(function()
    {
        var url = "votes.php?comment_order=2";
        $.get(url,function(data){
            $('#comments').html(data);
        });

        $( "#form" ).submit(function(e) {

            e.preventDefault();
            var com =  $( "#komentar" ).val();

            var url = "votes.php?comment_text="+com+"&product_id=1";
            $( "#komentar" ).val("");
            $.get(url,function(data){
                $( "#comments" ).append( data );
            });

        });

        $(function(){
            $('#productRating').on('change', function(){

                var pid = <?php echo $_GET["product_id"]; ?>;
                var url = "votes.php?product_id="+pid+"&rating="+$(this).val();
                $.get(url,function(data){

                });
            });
        });
    });

</script>

<script type="text/javascript">
    function get_comments(id){

        var url = "votes.php?comment_order="+id;
        $.get(url,function(data){
            $('#comments').html(data);
        });
    }
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
$user_rate = get_user_rate(1,$_GET['product_id'] );

if(count($user_rate)==1) {
    echo "<p style='color: #E8991A;' ><input  id='productRating' class='rating' data-max='9' data-min='0' id='some_id' name='your_awesome_parameter' type='number' /></p>"; }

else {
    for ($i=0; $i<$user_rate['score']; $i++) {
        echo "<i style='color: #E8991A;' class='glyphicon glyphicon-star'></i>";

    }
    for ($i=0; $i<10-$user_rate['score']; $i++) {
        echo "<i style='color: #E8991A;' class='glyphicon glyphicon-star-empty'></i>";
    }
}
?>


<p>Comment: </p>

<form id="form" action="" method="post">
    <!-- use this input to store the clicked button value -->
    <input type='hidden' name="action" />
    <textarea id="komentar"  rows="3" cols="50"></textarea>
    <input type="submit" value="submit" class="submit">
</form>





    <?php

?>
    <div onclick="get_comments(1)" >Popular</div>
    <div onclick="get_comments(2)" >Newest</div>
<div id="comments">
</div>
