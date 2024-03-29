<!DOCTYPE html>
<html lang="en">
<?php
include "db.php";
?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Sixteen Clothing HTML Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>NI<em>KE</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="products.html">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">

          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">

          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">

          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->
<?php
echo '
<style>
.button3 {
position:relative;
top:10px;
background-color: #f44336; /* Green */
  border: none;
  color: white;
  padding: 10px 32px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  cursor: pointer;
}

.product-item {
  position:relative;
max-width:300px;
max-height:800px;
}
.imgg {
max-height:320px;
}
</style>
<div class="latest-products">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="section-heading">
        <h2>Products</h2>
        <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
      </div>
    </div>
';
$query="select * FROM productadd";
$result= mysqli_query($connection, $query);
$results = mysqli_fetch_array($result);
if(!empty($results['id'])) {
  while($results = mysqli_fetch_array($result)){
    $id = $results['id'];
    $name = $results['name'];
    $text = $results['text'];
    $price = $results['price'];
    $image = $results['image'];
    echo '
    <div class="col-md-4">
    <div class="product-item">
      <a href="#"><img src="'.$image.'" alt="" class="imgg"></a>
      <div class="down-content">
        <a href="#"><h4>'.$name.'</h4></a>
        <h6>$'.$price.'</h6>
        <p>'.$text.'</p>
        <ul class="stars">
        <h4>Best seller</h4>
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
        </ul>
        <span><button class="button3">Buy Now</button></span>
      </div>
    </div>
  </div>
    ';

    }}
?>
<br><br><br>
    <div class="best-features">
    <br><br><br><br><br><br><br><br><br>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Ni KE</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Who are we?</h4>
              <p><a rel="nofollow" href="https://templatemo.com/tm-546-sixteen-clothing" target="_parent">This template</a> is free to use for your business websites. However, you have no permission to redistribute the downloadable ZIP file on any template collection website. <a rel="nofollow" href="https://templatemo.com/contact">Contact us</a> for more info.</p>
              <ul class="featured-list">
                <li><a href="#">Nike, Incorporated is a company formed in the United States.</a></li>
                <li><a href="#">Nike is the world’s biggest brand of sports shoes, clothes and equipment.</a></li>
                <li><a href="#">Nike has approximately 62,600 employees worldwide as of 2015.</a></li>
                <li><a href="#">Their net income is $2.7 billion and their revenue is $27.8 billion.</a></li>
                <li><a href="#">Nike sells its products under its own name as well as Nike Golf, Nike Pro, Nike+.</a></li>
              </ul>
              <a href="https://simple.wikipedia.org/wiki/Nike,_Inc." class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="https://www.qualitare.com/wp-content/uploads/2021/01/nike-banner.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Creative &amp; Unique <em>Sixteen</em> Products</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
                </div>
                <div class="col-md-4">
                  <a href="#" class="filled-button">Purchase Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
