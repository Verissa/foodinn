<?php
require_once '../includes/dbconfig.php';
if(isset($_POST['submit'])){
$loc =$_POST['location'];
$name =$_POST['restaurant'];
$cuisine = $_POST['cuisine'];
$query = mysqli_query($connect, "SELECT * FROM cuisine WHERE `location_name`=$loc AND `res_name` LIKE '%$name%' AND `cuisine_name` LIKE '%$cuisine%'");
echo $query;}
?>
<?php require_once '../includes/dbconfig.php'; ?>
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
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="../css/style.css"/>
<link rel="stylesheet" type="text/css" href="../css/font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="../css/animate.css">
<link rel="stylesheet" type="text/css" href="../css/responsive.css"/>

<!--JS-->

<script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="../js/modernizr.js"></script>
<script src="../js/scripts.js"></script>
<script src="../js/waypoints.min.js"></script>
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
            <li><a href="#">Login</a></li>
            <li><a href="#">Register</a></li>
            <li><a href="#">Help</a></li>
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
  </div>
</section>
<section class="saction5">
  <div class="container" id="resturant">
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="restaurants">
        <h3 class="os-animation" data-os-animation="rollIn" data-os-animation-delay="1s">Available Restaurant </h3>
      </div>
      <div class="dotted6 os-animation" data-os-animation="bounceInRight" data-os-animation-delay="0.50s"></div>
      <div class="row">
        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-6">
          <figure class="rest os-animation" data-os-animation="fadeInDown" data-os-animation-delay="1s"> <a href="#"><img src="../images/koffeelounge.png" alt=""/> </a> </figure>
        </div>
       <!--  <div class="col-lg-6 col-md-8 col-sm-8 col-xs-6">
          <figure class="rest os-animation" data-os-animation="fadeInDown" data-os-animation-delay="1.2s"> <a href="#"> <img src="../images/SUB.png" alt="" /></a></figure>
        </div> -->
      </div>
      <!--row-->
      
      <!-- <div class="row">
        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-6" >
          <figure class="rest os-animation" data-os-animation="fadeInDown" data-os-animation-delay="1.4s"> <a href="#"> <img src="../images/KFC.png" alt=""/></a> </figure>
        </div>
        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-6">
          <figure class="rest os-animation" data-os-animation="fadeInDown" data-os-animation-delay="1.6s"> <a href="#"><img src="../images/papjohns.png" alt="" /></a> </figure>
        </div>
      </div>
       <!--row-->
      
      <!-- <div class="row">
        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-6">
          <figure class="rest os-animation" data-os-animation="fadeInDown" data-os-animation-delay="1.8s"> <a href="#"><img src="../images/dominos.png" alt="" /></a> </figure>
        </div>
        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-6">
          <figure class="rest os-animation" data-os-animation="fadeInDown" data-os-animation-delay="2s"> <a href="#"><img src="../images/barista.png" alt="" /></a> </figure>
        </div>
      </div> --> 
      <!--row--> 
      
    </div>
    <!---col-->
    
    <div class="col-lg-8 col-md-8 col-sm-8">
      <div class="food">
        <h3 class="os-animation" data-os-animation="rollIn" data-os-animation-delay="2.5s">Available Cuisines</h3>
      </div>
      <div class="dotted7 os-animation" data-os-animation="bounceInRight" data-os-animation-delay="2.8s"></div>
      <div class="food1">
        <div class="row">
        	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <figure class="food os-animation" data-os-animation="fadeInDown
" data-os-animation-delay="3s"> <img src="../images/bhel.png" alt=""/>
              <div class="order"> <a href="#">Assorted Rice</a> </div>
            </figure>
          </div>
          <!-- <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <figure class="food os-animation" data-os-animation="fadeInDown
" data-os-animation-delay="3s"> <img src="../images/pizz.png" alt=""/>
              <div class="order"> <a href="#">Pizza</a> </div>
            </figure>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <figure class="food os-animation" data-os-animation="fadeInDown
" data-os-animation-delay="3.2s"> <img src="../images/burgar.png" alt="" />
              <div class="order"> <a href="#">Burger</a> </div>
            </figure>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <figure class="food os-animation" data-os-animation="fadeInDown
" data-os-animation-delay="3.4s"> <img src="../images/donelt.png" alt="" />
              <div class="order"> <a href="#">Doughnut</a> </div>
            </figure>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <figure class="food os-animation" data-os-animation="fadeInDown
" data-os-animation-delay="3.6s"> <img src="../images/sup.png" alt="" />
              <div class="order"> <a href="#">Sauces</a> </div>
            </figure>
          </div>
        </div>
      </div>
      <div class="food1">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <figure class="food os-animation" data-os-animation="fadeInDown
" data-os-animation-delay="3.8s"> <img src="../images/checken.png" alt=""/>
              <div class="order"> <a href="#">Chicken Wings</a> </div>
            </figure>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <figure class="food os-animation" data-os-animation="fadeInDown
" data-os-animation-delay="4s"> <img src="../images/passta.png" alt=""/>
              <div class="order"> <a href="#">Pasta Bologneses</a> </div>
            </figure>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <figure class="food os-animation" data-os-animation="fadeInDown
" data-os-animation-delay="4.2s"> <img src="../images/bhel.png" alt=""/>
              <div class="order"> <a href="#">Assorted Rice</a> </div>
            </figure>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <figure class="food os-animation" data-os-animation="fadeInDown
" data-os-animation-delay="4.4s"> <img src="../images/past.png" alt=""/>
              <div class="order"> <a href="#">Pasta</a> </div>
            </figure>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</section>

<section class="saction7">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4  col-xs-12">
        <figure class="service os-animation" data-os-animation="fadeInDown" data-os-animation-delay="1s"> <img src="../images/plan.png" alt=""/> </figure>
        <div class="det os-animation" data-os-animation="fadeInDown" data-os-animation-delay="1.3s">
          <h3>100% Service </h3>
          <p>We offer you top notch service on every order </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4  col-xs-12">
        <figure class="service os-animation" data-os-animation="fadeInDown" data-os-animation-delay="1.5s"> <img src="../images/mak.png" alt="" /> </figure>
        <div class="det os-animation" data-os-animation="fadeInDown" data-os-animation-delay="1.8s">
          <h3>100% Convenience </h3>
          <p>Order the best cuisine from the comfort of your home </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <figure class="service os-animation" data-os-animation="fadeInDown" data-os-animation-delay="2s"> <img src="../images/kljj.png" alt=""/> </figure>
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
        <div class="email">&copy; All right reserved 2014  /  FoodFinder </div>
        <p class="freetemplates">Free Template by <a href="http://freetemplates.pro/">FreeTemplates.pro</a></p>
      </div>
    </div>
  </div>
</footer>
<script type="text/javascript" src="../js/sidemenu.js"></script>
<script type="text/javascript" src="../js/validate.js"></script>

</body>
</html>
