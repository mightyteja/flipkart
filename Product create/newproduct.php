<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
include '../db/dbconnect.php';
$cat_select = "SELECT category_title FROM category ";
$prod_select = "SELECT product_title from products";
$brand_select = "SELECT brand_title from brand";

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<form action="">
    select category
<select name="" id="">
<option value="">
<?php
$cat_result = mysqli_query($conn, $cat_select) or die("Error: " . mysqli_error($conn));
while ($category = mysqli_fetch_row($cat_result)) {
    echo "<option value='$category[0]'> $category[0] </option>";
}
?>
</option>
</select>
<br>
select product
<select name="" id="">
    <option value="">
    <?php
$prod_result = mysqli_query($conn, $prod_select) or die("Error: " . mysqli_error($conn));
while ($products = mysqli_fetch_row($prod_result)) {
    echo "<option value='$products[0]'> $products[0] </option>";
}
?>
    </option>
</select>
<br>
select brand
<select name="" id="">
    <option value="">
    <?php
$brand_result = mysqli_query($conn, $brand_select) or die("Error: " . mysqli_error($conn));
while ($brand = mysqli_fetch_row($brand_result)) {
    echo "<option value='$brand[0]'> $brand[0] </option>";
}
?>
    </option>
</select>




</form>
</form>
    <!-- </form> -->
</body>
</html>