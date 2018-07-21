
<style>
  #carousel_home{
    top:80px;
  }
.carousel-control{
    border: solid pink;
    background: grey;
    
}

.carousel-control-prev {
justify-content: center;
top:15px;
/* left:-160px; */
bottom:15px;
width: 2%;
}

.carousel-control-next{
    justify-content: center;
top:15px;
/* left:-160px; */
bottom:15px;
width: 2%;
}

</style>
</head>
<body>
        <div id="carousel_home" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                </ul>
              
                <!-- The slideshow -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="images/logo/saleislive/mobiles.png" alt="Los Angeles">
                  </div>
                  <div class="carousel-item">
                    <img src="images/logo/saleislive/electronics.png" alt="Chicago">
                  </div>
                  <div class="carousel-item">
                    <img src="images/logo/saleislive/fashion.png" alt="New York">
                  </div>
                </div>
              
                <!-- Left and right controls -->
                <a class="carousel-control-prev carousel-control" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next carousel-control" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
              
              </div>
