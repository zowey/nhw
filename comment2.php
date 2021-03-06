<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Grid Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="bootstrap-source/js/tab.js"></script>

    <![endif]-->

</head>

<body>

<p>Comment: </p>

<form id="form" action="comment2.php" method="post">
    <!-- use this input to store the clicked button value -->
    <input type='hidden' name="action" />
    <textarea id="komentar"  rows="3" cols="50"></textarea>
    <input type="submit" value="submit" class="submit">
</form>




<script>

  $(document).ready(function()
    {
$( "#form" ).submit(function(e) {
    e.preventDefault();
    var com =  $( "#komentar" ).val();
    $( "p" ).append( com );
    var url = "comment.php?comment_text="+com;

    $.get(url,function(data){
    });

});

    });

</script>



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
</body>
</html>
