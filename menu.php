<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'menu'; // Nama Database
 
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
    die ('Fail to connect to MySQL: ' . mysqli_connect_error());   
}
 
$sql = 'SELECT name, price 
        FROM items';
         
$query = mysqli_query($conn, $sql);
 
if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
}
 
 
// Should we need to run this? read section VII
mysqli_free_result($query);
 
// Should we need to run this? read section VII
mysqli_close($conn);
?>



<!DOCTYPE>
<html>
   <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <meta name="" content="">
  <meta name="keywords" content="">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
 
</head>
    <body>
       
       
        <section id="menu-list" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">Menu</h1>
          <p class="header-p">
            
        </div>

        <div class="col-md-12  text-center" id="menu-flters">
          <ul>
            <li><a class="filter active" data-filter=".menu-restaurant">Show All</a></li>
            <li><a class="filter" data-filter=".Soup">Soup</a></li>
            <li><a class="filter" data-filter=".breakfast">Breakfast</a></li>
            <li><a class="filter" data-filter=".lunch">Lunch</a></li>
            <li><a class="filter" data-filter=".dinner">Dinner</a></li>
          </ul>
        </div>

        <div id="menu-wrapper">

          <div class="Soup menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Tomato Soup</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">85 ₹</span>
            </span>
            <span class="menu-subtitle"></span>
          </div>

          <div class="Soup menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#">Spanish soup</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">85 ₹</span>
            </span>
            <span class="menu-subtitle"></span>
          </div>

          <div class="Soup menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/ .jpg">Cream of veg. soup</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">80 ₹</span>
            </span>
            <span class="menu-subtitle"></span>
          </div>

          <div class="Soup menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Veg clear soup</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">80 ₹</span>
            </span>
            <span class="menu-subtitle"></span>
          </div>
          <div class="Soup menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">sweetcorn Veg clear soup</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">80 ₹</span>
            </span>
            <span class="menu-subtitle"></span>
          </div>
          
          <div class="Soup menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Hot & sour vegetable soup </a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">75 ₹</span>
            </span>
            <span class="menu-subtitle"></span>
          </div>
          
           <div class="Soup menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Veg. manchow soup </a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">75 ₹</span>
            </span>
            <span class="menu-subtitle"></span>
          </div>
          
           <div class="Soup menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Special food soup</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">100 ₹</span>
            </span>
            <span class="menu-subtitle"></span>
          </div>
          
           <div class="Soup menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Wonton soup </a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">80 ₹</span>
            </span>
            <span class="menu-subtitle"></span>
          </div>
           
            <div class="Soup menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Wonton noodles soup </a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">90 ₹</span>
            </span>
            <span class="menu-subtitle"></span>
          </div> 
           
           <div class="Soup menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">tom yam soup </a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">85 ₹</span>
            </span>
            <span class="menu-subtitle"></span>
          </div> 
           
           <div class="Soup menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">corn spanish soup</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">90 ₹</span>
            </span>
            <span class="menu-subtitle"></span>
          </div> 
           
           <div class="Soup menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">pepper lemon soup</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">90 ₹</span>
            </span>
            <span class="menu-subtitle"></span>
          </div>
            <!--lunch-->
          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">₹</span>
            </span>
            <span class="menu-subtitle"></span>
          </div>

          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">₹</span>
            </span>
            <span class="menu-subtitle"></span>
          </div>

          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">₹</span>
            </span>
            <span class="menu-subtitle"></span>
          </div>

          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">₹</span>
            </span>
            <span class="menu-subtitle"></span>
          </div>

          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">₹</span>
            </span>
            <span class="menu-subtitle"></span>
          </div>

          <div class="dinner menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">₹</span>
            </span>
            <span class="menu-subtitle"></span>
          </div>

          <div class="dinner menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">₹</span>
            </span>
            <span class="menu-subtitle"></span>
          </div>

          <div class="dinner menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">₹</span>
            </span>
            <span class="menu-subtitle"></span>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--/ menu -->
   
    <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="validator.js"></script>
 <script src="contact-2.js"></script>
    </body>
</html>