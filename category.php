<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Jujube</title>
    <!-- Latest compiled and minified CSS -->
    <link href='http://fonts.googleapis.com/css?family=Exo+2:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="main.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</head>
<body>
<section id="second" class="container-fluid">
    <header class="col-md-10 col-md-offset-1" >
        <div id="logo" class="col-md-4">
            <img src="img/logo.png">
        </div>
        <div class="user col-md-8 pull-right text-right">
            <form class="search col-md-9 text-right">
                <div class="input-group col-md-4 pull-right">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                </div>
            </form>
            <div class="col-md-3 pull-right">
                <span class="glyphicon glyphicon-user"></span>Hello, <a href="#">user</a>
            </div>
        </div>
    </header>
</section>
<section id="home-content" class="container-fluid">
    <div class="col-md-10 col-md-offset-1">
        <div class="col-md-10">
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

            <?php


            if(isset($GET["id"])) {
                include 'data_layer.php';
                $cat_id = $GET["id"];
                $productsInCat = get_products_category($cat_id);

                foreach ($pr as $productsInCat) {
/*
                    $pr['id'];
                    $pr['category'];
                    $pr['name'];
                    $pr['picture'];
                    $pr['description'];
                    $pr['voters'];
                    $pr['price'];
                    $pr['published'];
                    $pr['brand'];
*/
                    echo '<div class="col-md-3">
                          <img src="img/'+$pr['picture']+'" class="img-responsive">
                          <h4>'+$pr['name']+'</h4>
                          <p>
                            '+$pr['description']+'
                          </p>

                        <div class="meta2">
                            <span class="star pull-left">'+$pr['price']+'</span>
                            <span class="views pull-left">'+$pr['price']+'</span>
                            <a class="more btn btn-warning pull-right" href="#">Details</a>
                        </div>
                    </div>';

                }
            } else {

                echo '
                <div class="col-md-3">
                <img src="img/5.jpg" class="img-responsive">
                <h4>New gunshit</h4>
                <p>
                Curabitur volutpat ut turpis et sagittis. Suspendisse elementum leo urna, eget euismod nisl
                    suscipit non. In eget consequat diam, vehicula rutrum ipsum. Vestibulum mauris urna,
                    ultricies suscipit suscipit a, porttitor non neque.
                </p>
                <div class="meta2">
                    <span class="star pull-left">7.8</span>
                    <span class="views pull-left">1004</span>
                    <a class="more btn btn-warning pull-right" href="#">Details</a>
                </div>
            </div>
            <div class="col-md-3">
                <img src="img/5.jpg" class="img-responsive">
                <h4>New gunshit</h4>
                <p>
                Curabitur volutpat ut turpis et sagittis. Suspendisse elementum leo urna, eget euismod nisl
                    suscipit non. In eget consequat diam, vehicula rutrum ipsum. Vestibulum mauris urna,
                    ultricies suscipit suscipit a, porttitor non neque.
                </p>
                <div class="meta2">
                    <span class="star pull-left">7.8</span>
                    <span class="views pull-left">1004</span>
                    <a class="more btn btn-warning pull-right" href="#">Details</a>
                </div>
            </div>
            <div class="col-md-3">
                <img src="img/5.jpg" class="img-responsive">
                <h4>New gunshit</h4>
                <p>
                Curabitur volutpat ut turpis et sagittis. Suspendisse elementum leo urna, eget euismod nisl
                    suscipit non. In eget consequat diam, vehicula rutrum ipsum. Vestibulum mauris urna,
                    ultricies suscipit suscipit a, porttitor non neque.
                </p>
                <div class="meta2">
                    <span class="star pull-left">7.8</span>
                    <span class="views pull-left">1004</span>
                    <a class="more btn btn-warning pull-right" href="#">Details</a>
                </div>
            </div>
            <div class="col-md-3">
                <img src="img/5.jpg" class="img-responsive">
                <h4>New gunshit</h4>
                <p>
                Curabitur volutpat ut turpis et sagittis. Suspendisse elementum leo urna, eget euismod nisl
                    suscipit non. In eget consequat diam, vehicula rutrum ipsum. Vestibulum mauris urna,
                    ultricies suscipit suscipit a, porttitor non neque.
                </p>
                <div class="meta2">
                    <span class="star pull-left">7.8</span>
                    <span class="views pull-left">1004</span>
                    <a class="more btn btn-warning pull-right" href="#">Details</a>
                </div>
            </div>
        </div>
                ';
            }
            ?>


        <div class="col-md-2">
            <h3>Categories</h3>
            <div style="clear: both;"></div>
            <a class="category">Tech</a>
            <a class="category">Tech</a>
            <a class="category">Tech</a>
            <a class="category">Tech</a>
            <a class="category">Tech</a>
            <a class="category">Tech</a>
            <a class="category">Tech</a>
            <a class="category">Tech</a>
        </div>
    </div>
</section>
<footer class="container-fluid">

</footer>
</body>
</html>