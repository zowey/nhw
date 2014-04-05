<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Example of Twitter Bootstrap 3 Dropdowns within Navs</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <style type="text/css">
        .bs-example{
            margin: 20px;
        }
    </style>
</head>
<body>
<div class="bs-example">
    <ul class="nav nav-pills">
        <li class="active"><a href="#">Tech Category</a></li>
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Category filter <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="category.php?id=1">Software</a></li>
                <li><a href="category.php?id=2">Hardware</a></li>
                <li><a href="category.php?id=3">Mobile phones</a></li>
                <li><a href="category.php?id=4">Garden tools</a></li>
            </ul>
        </li>

    </ul>
</div>

<div>
</div>

</body>
</html>                                		