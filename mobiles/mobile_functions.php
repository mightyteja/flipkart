<?php

require('../db/dbconnect.php');
function getCats(){
    GLOBAL $conn;
        $get_cats = "SELECT * FROM 	category where category_id = 1";
    $run_cats = mysqli_query($conn,$get_cats);
    while ($row_cats = mysqli_fetch_array($run_cats)){
    $cat_id = $row_cats['category_id'];
    $cat_title = $row_cats['category_title'];
    
    echo " $cat_title";
    }
    }

function getSubCats(){
GLOBAL $conn;
    $get_sub_cats = "SELECT * FROM 	sub_category where category_id = 1";
$run_sub_cats = mysqli_query($conn,$get_sub_cats);
while ($row_sub_cats = mysqli_fetch_array($run_sub_cats)){
$sub_cat_id = $row_sub_cats['sub_cat_id'];
$sub_cat_title = $row_sub_cats['sub_cat_title'];

echo '<li class="list-group-item">' .$sub_cat_title .' </li>';
}
}

























?>