<?php
include('mobile_functions.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="mobiles.css" />

</head>
<body>
    <div class="mobiles_container container-fluid">
<div class="mobiles_heading">
<h6>Mobile Phones</h6>
<p>Mobile phone usage is on the rise and smartphone lovers are on a constant hunt to buy the best smartphone at a reasonable price. Flipkart is the right platform for you to look for a mobile phone that fits your budget, technical and design requirements as we have phones ranging from Rs 350 up to Rs 1,00,000+. Some of the best VIVO Y83, OPPO F7, VIVO V9, Redmi Note 5 Pro etc., that are in great demand today owing to the rapid expansion of the 4G network and high-speed broadband, can be purchased under great offers and deals here. Find most of the new mobile phones released on this platform and keep yourself abreast of the latest launches in the market. The last we updated information on this page was on 29-Jul-18.</p>
</div>

<div class="container">


</div>
<div class="row">
<div class="col-lg-3">
<h6>Filters</h6>
<hr>
<p>CATEGORIES</p>
<div class="dropdown">
    <a href="" class="dropdown-toggle"  data-toggle="collapse">  </a>
  <ul class="dropdown-menu">
 <?php getSubCats(); ?> 
  </ul>
</div>


  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h6 class="panel-title">
          <a data-toggle="collapse" href="#collapse1"><i class="fa fa-angle-down"></i> <?php getCats(); ?> </a>
        </h6>
      </div>
      <div id="collapse1" class="panel-collapse ">
        <ul class="list-group">
        <?php getSubCats(); ?> 
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="col-lg-9">



</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>
</html>