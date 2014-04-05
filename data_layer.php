<?php
include 'db.php';

function get_all_products($sort = "order by published DESC "){
    $query = "select * from product, comment where comment.product_id = product.id ". $sort;
    $result = mysql_query($query);
    $products = array();
        while ($row = mysql_fetch_assoc($result)){
            array_push($products, $row);
        }
    return $products;
}

function get_comments_for_product($product_id, $sort='votes'){
    if ($sort == 'time'){
        $sort = 'order by published desc ';
    }
    else if ($sort== 'votes')
    {
        $sort = 'order by votes desc ';
    }
    $query = "select * from comment where comment.product_id = $product_id ".$sort;
    $result = mysql_query($query);
    $comments = array();
    while ($row = mysql_fetch_assoc($result)){
        array_push($comments, $row);
    }
    return $comments;
}


function get_product($product_id){
    $query = "select * from product where id = $product_id";
    $result = mysql_query($query);
    $product = array();
    $row = mysql_fetch_assoc($result);
    return $row;
}

function get_products_category($category_id){
    $query = "select * from product where category = $category_id";
    $result = mysql_query($query);
    $product = array();
    //$row = mysql_fetch_row($result);
    while ($row = mysql_fetch_assoc($result)){
        array_push($product, $row);
    }
    return $product;
}

function check_if_user_voted($comment_id){
    $query = "select * from user_vote_comment where comment_id = $comment_id and user_id=1";
    $result = mysql_query($query);
    if(mysql_num_rows($result)==0)
        return false;
    else
        return true;

}
?>