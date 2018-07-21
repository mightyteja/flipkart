<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .head_container {
      background: blue;
      padding:1%
    }

    .logo_container {
      border: solid red;
    }

    .logo {
      margin-top: 2%;
      margin-left: 10%;
    }

    .search {
      border: solid pink;
    }

    .nav_menu {
      border: solid yellow;
    }

    .nav_btn {
      background: inherit;
      color: white;
    }
  </style>
</head>
<header>


  <div class="container-fluid head_container">
    <div class="row">
      <div class="col-lg-1 logo_container">
        <img class="logo" width="110" src="images/logo/fk-logo_9fddff.png" alt="Flipkart" title="Flipkart">

      </div>
      <div class="col-lg-7 search">
        <form class="navbar-search" role="search">
          <div class="input-group seaer">
            <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </div>
        </form>

      </div>

      <div class="col-lg-4 nav_menu">
        <div class="btn-group">
          <div class="dropdown">
            <button type="button" class="btn nav_btn dropdown-toggle" data-toggle="dropdown">Hi,
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Orders</a>
              <a class="dropdown-item" href="#">Wishlist</a>
              <a class="dropdown-item" href="#">Rewards</a>
              <a class="dropdown-item" href="#">Gift Cards</a>

            </div>
          </div>
          <div class="dropdown">
            <button type="button" class="btn nav_btn dropdown-toggle" data-toggle="dropdown">More
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">1</a>
              <a class="dropdown-item" href="#">2</a>
              <a class="dropdown-item" href="#">3</a>
            </div>
          </div>
          <button type="button" class="btn nav_btn">Cart</button>
        </div>


      </div>

    </div>




  </div>


</header>

</html>