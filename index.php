<?php require_once 'includes/dbconfig.php'; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Food Inn</title>
<link href='https://fonts.googleapis.com/css?family=Lobster+Two:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,300,700' rel='stylesheet' type='text/css' />

<!--MOBILE DEVICE-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

<!--CSS-->
<!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

  <!-- Bootstrap -->
  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

  <!-- Slick -->
  <link type="text/css" rel="stylesheet" href="css/slick.css" />
  <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

  <!-- nouislider -->
  <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

  <!-- Font Awesome Icon -->
  <link rel="stylesheet" href="css/font-awesome.min.css">

  <!-- Custom stlylesheet -->
  <link type="text/css" rel="stylesheet" href="css/style2.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>

<!--JS-->

<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/modernizr.js"></script>
<script src="js/scripts.js"></script>
<script src="js/waypoints.min.js"></script>
</head>

<body>
<!-- Paste this code after body tag -->
<div class="se-pre-con"></div>
<!-- Ends -->

<header>
  <div class="container">
    <div class="row clearfix" id="home">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="logo">
       <!--   <h1> <a href="#"><img src="images/TMPS000136.png" alt="" /></a> </h1>-->
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="contact">
          <p>Questions? Call us Toll-free!<span class="number"><a href="#">0544-321-7789</a></span><span class="time">(8AM to 11PM)</span></p>
        </div>
      </div>
    </div>
  </div>
</header>
<section class="saction1">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="menu">
          <div class="mobile-nav-container"> </div>
          <div class="mobile-nav-btn"><img class="nav-open" src=					      "https://s3-us-west-2.amazonaws.com/s.cdpn.io/6214/nav-open.png" alt="Nav Button Open" /> <img class="nav-close" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/6214/nav-close.png" alt="Nav Button Close" /> </div>
          <nav>
            <ul>
              <li><a href="#home">Home</a></li>
              <li><a href="#resturant">Popular Restaurants </a></li>
              <li><a href="#offer">Order </a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </nav>
        </div>
        <div class="login">
          <ul>
            <li><a href="pages/login.php">Login</a></li>
            <li><a href="pages/cus_reg.php">Register</a></li>
            <li class="header-cart dropdown default-dropdown"><a href="pages/cart.php">My Cart</a>
               
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="backgraound">
  <div class="container" >
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="back">
          <div class="line1 os-animation" data-os-animation="rotateInDownLeft" data-os-animation-delay="1s"> </div>
          <div class="line2 os-animation" data-os-animation="rotateInDownLeft" data-os-animation-delay="1s"> </div>
          <h2 class="os-animation" data-os-animation="zoomIn" data-os-animation-delay="0.50s">Network of over 100 Restaurants</h2>
          <h3 class="os-animation" data-os-animation="zoomIn" data-os-animation-delay="1s">To Order Online</h3>
          <div class="line3 os-animation" data-os-animation="rotateInDownRight" data-os-animation-delay="1s"> </div>
          <div class="line4 os-animation" data-os-animation="rotateInDownRight" data-os-animation-delay="1s"> </div>
        </div>
      </div>
    </div>
    
    <form action="pages/search2.php" method="GET" name="search" onsubmit="return validate()">
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="textbox os-animation" data-os-animation="zoomIn" data-os-animation-delay="0.5s">
        <h3>Location Name</h3>
        <select name="location" id="location" style="border: hidden; font-size: 18px; font-weight: 400;margin-top: 5px; width: 70%; min-height: 41px; border-radius: 4px; padding: 7px;">
             <option value="" disabled selected>Select a location </option>
             <?php include 'includes/location.php';
          ?>
        </select>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="textbox1 os-animation" data-os-animation="zoomIn" data-os-animation-delay="0.5s">
        <h3>Cuisine Name</h3>
        <input type="text" placeholder="What food do you want?" name="cuisine" id="cuisine" />
     
                      <button class="search" value="submit" type="submit"><i class="fa fa-search"></i></button>
      </div>

 
  </form>
  </div>
</section>
<section class="saction3">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="ordaring">
          <h2 class="os-animation" data-os-animation="zoomIn" data-os-animation-delay="0.50s">Ordering food was never so easy</h2>
          <div class="dotted os-animation" data-os-animation="bounceInLeft" data-os-animation-delay="1s"></div>
          <p class="os-animation" data-os-animation="zoomIn" data-os-animation-delay="0.50s">Just 4 steps to follow</p>
          <div class="dotted1 os-animation" data-os-animation="bounceInRight" data-os-animation-delay="1s"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-6">
        <figure class="step os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.50s"> <img src="images/one.png" alt="" /> </figure>
        <div class="arrow" > <img src="images/arrow.png" alt="" /> </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6">
        <figure class="step os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="1.5s"> <img src="images/two.png" alt="" /> </figure>
        <div class="arrow1 "> <img src="images/arrow.png" alt="" /> </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6">
        <figure class="step os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="2.5s"> <img src="images/thrww.png" alt="" /> </figure>
        <div class="arrow"> <img src="images/arrow.png" alt="" /> </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6">
        <figure class="step1 os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="3.5s"> <img src="images/four.png" alt="" /> </figure>
      </div>
    </div>
  </div>
</section>
<section class="saction4">
  <div class="container" id="offer">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="dotted3 os-animation" data-os-animation="bounceInLeft" data-os-animation-delay="1s"></div>
        <div class="special">
          <h2 class="os-animation" data-os-animation="bounceInDown" data-os-animation-delay="0.50s">Special Offer</h2>
          <div class="dotted4 os-animation" data-os-animation="bounceInRight" data-os-animation-delay="1s"></div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="slider clearfix os-animation" data-os-animation="fadeInDown
" data-os-animation-delay="0.20s">
        <div class="img clearfix"> <img src="images/002.png" alt=""/> </div>
        <div class="title clearfix">
          <h3>Jumbo Combo<br/>
            </h3>
          <p>Get your quarter piece of chicken with extra fries and coke </p>
          <a href="#">GRAB IT &#10152;</a> </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="slider clearfix os-animation" data-os-animation="fadeInDown
" data-os-animation-delay="0.50s">
        <div class="img"> <img src="images/003.png" alt=""/> </div>
        <div class="title">
          <h3>Zinga Combo<br/>
            </h3>
          <p>Streetwise with a large cup of ice tea </p>
          <a href="#">GRAB IT &#10152;</a> </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="slider clearfix os-animation" data-os-animation="fadeInDown
" data-os-animation-delay="1s">
        <div class="img"> <img src="images/oo1.png" alt=""/> </div>
        <div class="title">
          <h3>Olister Combo<br/>
            </h3>
          <p>Sea Food with large cup of milshake </p>
          <a href="#">GRAB IT &#10152;</a> </div>
      </div>
    </div>
  </div>
</section>
<section class="saction5">
  <div class="container" id="resturant">
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="restaurants">
        <h3 class="os-animation" data-os-animation="rollIn" data-os-animation-delay="1s">Top Restaurant </h3>
      </div>
      <div class="dotted6 os-animation" data-os-animation="bounceInRight" data-os-animation-delay="0.50s"></div>
      <?php 
$query1 = mysqli_query($connect, "SELECT * FROM restaurant ORDER BY RAND()");
while ($products1 = mysqli_fetch_array($query1)) {
?>

      <div class="row" style="float: left;">
        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-6">
          <figure class="rest os-animation" data-os-animation="fadeInDown" data-os-animation-delay="1s"> <a href="#"><img style="width: 170px; height: 113px;" src="<?php echo $products1['res_image']; ?>" alt=""/> </a> </figure>
        </div>
       
      </div>
      <!--row-->
      <?php
    }
    ?>
   
      
    </div>
    <!---col-->
<!--     Dynamic Cuisine display
 -->    

 <div class="col-lg-8 col-md-8 col-sm-8">
      <div class="food">
        <h3 class="os-animation" data-os-animation="rollIn" data-os-animation-delay="2.5s">Top Cuisines</h3>
      </div>
      <div class="dotted7 os-animation" data-os-animation="bounceInRight" data-os-animation-delay="2.8s"></div>
<?php 
$query = mysqli_query($connect, "SELECT * FROM cuisine ORDER BY RAND()");
while ($products = mysqli_fetch_array($query)) {
?>
      <div class="food1" style="float: left;">
        <div class="row" >
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <figure class="food os-animation" data-os-animation="fadeInDown
" data-os-animation-delay="3s" > <img style="width: 170px; height: 140px;" src="<?php echo $products['cuisine_image']; ?>" alt=""/>
              <div class="order"> <ul><li><a href="#"><?php echo $products['cuisine_name'];?></a></li><li>GHC <?php echo $products['price'];?></li> <li> <button class="primary-btn add-to-cart" style="text-align: center;"><i class="fa fa-shopping-cart"></i> Add to Cart</button></li></ul> </div>

            </figure>
          </div>
</div>
      </div>
    <?php
}
?>
    </div>
  </div>

</section>
<section class="saction6">
  <div class="container">
    <div class="row bg os-animation" data-os-animation="flash" data-os-animation-delay="1s">
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="images">
          <h3 class="os-animation">Enjoy Exclusive Food <br />
            Order any of these</h3>
        </div>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-2">
        <div class="point">
          <p><span>&#10152;</span><a href="#"> Party Order</a></p>
          <p><span>&#10152;</span><a href="#">Home Made Food</a></p>
          <p><span>&#10152;</span><a href="#">Diet Food</a></p>
        </div>
      </div>
      <div class="col-lg-5 col-md-5 col-sm-5">
        <figure class="imgs"> <img src="images/abc.png" alt="" /> </figure>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-2">
        <div class="button"> <a href="#">Order Now</a> </div>
      </div>
    </div>
  </div>
</section>
<section class="saction7">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4  col-xs-12">
        <figure class="service os-animation" data-os-animation="fadeInDown" data-os-animation-delay="1s"> <img src="images/plan.png" alt=""/> </figure>
        <div class="det os-animation" data-os-animation="fadeInDown" data-os-animation-delay="1.3s">
          <h3>100% Service </h3>
          <p>We offer you top notch service on every order </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4  col-xs-12">
        <figure class="service os-animation" data-os-animation="fadeInDown" data-os-animation-delay="1.5s"> <img src="images/mak.png" alt="" /> </figure>
        <div class="det os-animation" data-os-animation="fadeInDown" data-os-animation-delay="1.8s">
          <h3>100% Convenience </h3>
          <p>Order the best cuisine from the comfort of your home </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <figure class="service os-animation" data-os-animation="fadeInDown" data-os-animation-delay="2s"> <img src="images/kljj.png" alt=""/> </figure>
        <div class="det os-animation" data-os-animation="fadeInDown" data-os-animation-delay="2.3s">
          <h3>100% Speedy Delivery </h3>
          <p>Delivery always on time </p>
        </div>
      </div>
    </div>
  </div>
</section>
<footer class="saction8">
  <div class="container" id="contact">
    <div class="row">
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="site">
          <h3>Site Link</h3>
        </div>
        <div class="sitelink">
          <ul>
            <li> <span>&#10152;</span><a href="#">About Us</a></li>
            <li><span>&#10152;</span><a href="#">Contact Us</a></li>
            <li><span>&#10152;</span><a href="#">Privacy Policy</a></li>
            <li><span>&#10152;</span><a href="#">Terms of Use</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="follow">
          <h3>Follow Us On...</h3>
        </div>
        <div class="social">
          <ul>
            <li> <i class="fa fa-facebook-square"></i><a href="#">Facebook</a></li>
            <li><i class="fa fa-twitter-square"></i><a href="#">Twitter</a></li>
            <li><i class="fa fa-linkedin-square"></i><a href="#">Linkedin</a></li>
        
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="submit">
          <h3>Subscribe Newsletter</h3>
          <p>To get latest updates and food deals
            every week</p>
        </div>
        <div class="submitbox">
          <input type="text" />
          <div class="sub"> <a href="#">Submit</a> </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<footer class="saction9">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="email">&copy; All right reserved 2014  /  FoodInn </div>
      </div>
    </div>
  </div>
</footer>
<script type="text/javascript" src="js/sidemenu.js"></script>
<script type="text/javascript" src="js/validate.js"></script>

</body>
</html>
