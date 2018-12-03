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
<script type="text/javascript">
//javascript entry validation
function validate2(){
  var name = document.forms["register"].Cname.value;
  var email = document.forms["register"].Cemail.value;
  var password =  document.forms["register"].Cpassword.value;
  var country = document.forms["register"].country.value;
  var city = document.forms["register"].city.value;
  var contact = document.forms["register"].contact.value;
     //var image = document.getElementById("file").required;
  var image = document.getElementById('file');

     // var image = document.forms["register"].img.value;
 var address = document.forms["register"].address.value;
  var phoneno = /^\+?([0]{1})\)?([2,5]{1})?([0-9]{8})$/;
  var stringonly =  /^[a-zA-Z ]*$/;
  var regex = /^[a-zA-Z0-9,!@#$%\^&*)(+=._- ]*$/;
     //var string = /^[a-z]+( [a-z]+)*$/;


  if (name == ""){
    alert("Enter your name");
    return false;
    }

  if(!name.match(stringonly)){
    alert("Only alphabets are allowed for customer's name");
    return false;
    }

  if (email == ""){
     alert("Enter your email address");
    return false;
    }

  if(!email.match(regex)){
    alert("Please enter a valid email address");
    return false;
    }

  if (password == ""){
    alert("Password is required");
    return false;
    }

  if (country == ""){
    alert("Enter your country");
    return false;
    }

  if(!country.match(stringonly)){
    alert("Please enter a valid country name");
    return false;
    }

  if (city == ""){
    alert("Enter your city");
    return false;
    }

  if(!city.match(stringonly)){
    alert("Please enter a valid city name");
    return false;
    }

  if (contact == ""){
    alert("Enter your contact number");
    return false;
    }

  if(!contact.match(phoneno)){
    alert("Please enter a valid contact number");
    return false;
    }

  if(image.files.length === 0){
    alert("Attachment Required");
    image.focus();
    return false;
    }


  if (address == ""){
    alert("Enter your address");
    return false;
    }

  if(!address.match(regex)){
    alert("Please enter a valid  address");
    return false;
    }
}
</script>
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
    
  </div>
</section>
<section class="backgraound">
  <div class="container" >
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <!-- <div class="back">
          <div class="line1 os-animation" data-os-animation="rotateInDownLeft" data-os-animation-delay="1s"> </div>
          <div class="line2 os-animation" data-os-animation="rotateInDownLeft" data-os-animation-delay="1s"> </div>
          <h2 class="os-animation" data-os-animation="zoomIn" data-os-animation-delay="0.50s">Network of over 100 Restaurants</h2>
          <h3 class="os-animation" data-os-animation="zoomIn" data-os-animation-delay="1s">To Order Online</h3>
          <div class="line3 os-animation" data-os-animation="rotateInDownRight" data-os-animation-delay="1s"> </div>
          <div class="line4 os-animation" data-os-animation="rotateInDownRight" data-os-animation-delay="1s"> </div>
        </div> -->
      </div>
    </div>
    
  
  </div>
</section>
<section class="saction3">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="ordaring">
          <h2 class="os-animation" data-os-animation="zoomIn" data-os-animation-delay="0.50s">Existing customer</h2>
          <div class="dotted os-animation" data-os-animation="bounceInLeft" data-os-animation-delay="1s"></div>
          <p class="os-animation" data-os-animation="zoomIn" data-os-animation-delay="0.50s">Fill in your details</p>
          <div class="dotted1 os-animation" data-os-animation="bounceInRight" data-os-animation-delay="1s"></div>
        </div>
      </div>
    </div>
    <h3>Log in</h3>
    <br>
        <form name="register" method="post" onsubmit="return validate2()" enctype="multipart/form-data" autocomplete="off" action="../includes/authent.php" style="center">
    
    <p>Customer Email : <input type="email"class="form-group form-input" name="Cemail" placeholder="Enter a valid email address" value=""autocomplete="off"  ></p>
<br>
   <p>Customer Password : <input type="password" class="form-group form-input" name="Cpassword" value="" autocomplete="false" placeholder="Your password.." ></p>
   <br>
   
  
    <div class="row">
      <input type="submit" value="Log in" name="submit">
    </div>
  </form>

                  <?php
if (isset($_POST['submit'])){
  include '../includes/authent.php';
}  
?>

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
