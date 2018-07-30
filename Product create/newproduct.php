<?php
//Include database configuration file
include('../db/dbconnect.php');
//Get all country data
$query = "SELECT * FROM category";
$run_query = mysqli_query($conn, $query);
//Count total number of rows
$count = mysqli_num_rows($run_query);

?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>
`
<body>
<form action="newproduct.php" method="post" enctype='multipart/form-data'>
<center>
<input type="text" name="product_title"> Enter Product Name
<br><br>


<select name="category" id="category">
<option value="">Select Category</option>
<?php
if($count > 0){
while($row = mysqli_fetch_array($run_query)){
$category_id=$row['category_id'];
$category_title=$row['category_title'];
echo "<option value='$category_id'>$category_title</option>";
}
}else{
echo '<option value="">Category is Empty</option>';
}
?>
</select><br><br>

<select name="sub_category" id="sub_category">
<option value="">Select Sub Category </option>
</select>
<br><br>
<select name="brand" id="brand">
<option value="">Select Brand </option>
</select>
<br>
<br>
<textarea name="product_dec" id="" cols="30" rows="10"> Product Description</textarea>
<br>
<input name="product_price"  type="text"> Product Price
<br>
<select name="product_Color" id="">
 <option value=""> Color</option>   
</select>
<br>
<input type="file" name="product_image" id="">
</div>
<br>
<input type="submit" name="insert_product" value="Insert Product" >
</center>
</form>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
 $('#category').on('change',function(){
 var categoryID = $(this).val();
 if(categoryID){
 $.ajax({
 type:'POST',
 url:'demo.php',
 data:'category_id='+categoryID,
 success:function(html){
 $('#sub_category').html(html);
 $('#brand').html('<option value="">Select Brand first</option>');
 }
 });
 }else{
 $('#sub_category').html('<option value="">Select country first</option>');
 $('#brand').html('<option value="">Select Brand first</option>');
 }
 });

 $('#sub_category').on('change',function(){
 var subcatID = $(this).val();
 if(subcatID){
 $.ajax({
 type:'POST',
 url:'demo.php',
 data:'sub_cat_id='+subcatID,
 success:function(html){
 $('#brand').html(html);
 }
 });
 }else{
 $('#brand').html('<option value="">Select Brand first</option>');
 }
 });
});
</script>
</body>

</html>

<?php 
include('../db/dbconnect.php');
if(isset($_POST['insert_product'])){

    $product_title = $_POST['product_title'];
    $category = $_POST['category'];
    $sub_category = $_POST['sub_category'];
    $brand = $_POST['brand'];
    $product_dec = $_POST['product_dec'];
    $product_price = $_POST['product_price'];
    // $product_color = $_POST['product_color'];
//Getting Image Files

$product_image = $_FILES['product_image'] ['name'];
$product_image_tmp = $_FILES ['product_image'] ['tmp_name'];
move_uploaded_file ($product_image_tmp,"../images/products/$product_image");

$insert_product = "INSERT INTO products
(product_name,category_id,sub_cat_id,brand_id,product_desc,product_price,product_image) values 
('$product_title','$category','$sub_category','$brand','$product_dec','$product_price','$product_image')";
}

$insert_pro_db = mysqli_query($conn,$insert_product);

if($insert_pro_db){

    echo "<script> alert('Product has been inserted')</script>";

}
else {
  echo (mysqli_error($conn)) ;
}


?>

