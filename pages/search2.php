<?php
require_once '../includes/dbconfig.php';
$connect = mysqli_connect("localhost","root","","food");

if(isset($_POST['submit'])){
$loc =$_GET['location'];
echo $loc;
console.log($loc);

$cuisine = $_POST['cuisine'];
echo $cuisine;
console.log($cuisine);

$query = mysqli_query($connect, "SELECT * FROM `cuisine` WHERE `cuisine_name` LIKE '%$cuisine%'");
echo $query;
console.log($query);
print_r($query);
while ($food = mysqli_fetch_array($query)) {
  ?>
  <div id="store">
            <!-- row -->
            <div class="row">
              <!-- Product Single -->
              <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="product product-single">
                  <div class="product-thumb">
                    <div class="product-label">
                      <span>New</span>
                      <span class="sale">-20%</span>
                    </div>
                    <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                    <img src="./img/product01.jpg" alt="">
                  </div>
                  <div class="product-body">
                    <h3 class="product-price">$32.50 <del class="product-old-price">$<?php echo $food['price'];?></del></h3>
                    <div class="product-rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-o empty"></i>
                    </div>
                    <h2 class="product-name"><a href="#"><?php echo $food['cuisine_name'];?></a></h2>
                    <div class="product-btns">
                      <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                      <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                      <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
 <?php
}}
 ?>