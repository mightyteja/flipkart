<?php
if(isset($_POST['Submit']))
{
require "db.php";
$new_brand=$_POST['brand'];
mysql_query("insert into brands(brand_title) values('$new_brand')");
header("location:categories.php?msg=Category $newc Added Successfully..!");
}
?>
