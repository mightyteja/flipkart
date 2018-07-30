<!-- From https://www.coderglass.com/jquery/country-state-city-dropdown-jquery.php -->

<?php
//Include database configuration file
include('../db/dbconnect.php');
if(isset($_POST["category_id"])){
 //Get all Sub Category data
$category_id= $_POST['category_id'];
 $query = "SELECT * FROM sub_category WHERE category_id = '$category_id'";
$run_query = mysqli_query($conn, $query);

 //Count total number of rows
 $count = mysqli_num_rows($run_query);

 //Display Sub Category list
 if($count > 0){
 echo '<option value="">Select Sub Category</option>';
 while($row = mysqli_fetch_array($run_query)){
$sub_cat_id=$row['sub_cat_id'];
$sub_cat_title=$row['sub_cat_title'];
 echo "<option value='$sub_cat_id'>$sub_cat_title</option>";
 }
 }else{
 echo '<option value="">Sub Category not available</option>';
 }
}
if(isset($_POST["sub_cat_id"])){
$sub_cat_id= $_POST['sub_cat_id'];
 
//Get all Brand data
 $query = "SELECT * FROM brand WHERE sub_cat_id = '$sub_cat_id'";

 $run_query = mysqli_query($conn, $query);
 //Count total number of rows
 $count = mysqli_num_rows($run_query);

 //Display Brand list
 if($count > 0){
 echo '<option value="">Select Brand</option>';
 while($row = mysqli_fetch_array($run_query)){
$brand_id=$row['brand_id'];
$brand_title=$row['brand_title'];
 echo "<option value='$brand_id'>$brand_title</option>";
 }
 }else{
 echo '<option value="">Brand not available</option>';
 }
}
?>

