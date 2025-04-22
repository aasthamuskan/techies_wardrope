<?php
include("customize/db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
  <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
  <meta name="author" content="elemis">
  <title>TechiesWardrobe</title>
  <link rel="shortcut icon" href="./assets/img/favicon.png">
  <link rel="stylesheet" href="./assets/css/plugins.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/colors/aqua.css">
  <link rel="preload" href="./assets/css/fonts/thicccboi.css" as="style" onload="this.rel='stylesheet'">
  <style>
       #logo{
      height: 100px;
      width: 150px;
    }
    #he{
      height:350px;
    }
    </style>
</head>

<body>
  <div class="content-wrapper">
    <header class="wrapper bg-soft-primary ">
        <nav class="navbar navbar-expand-lg center-nav transparent position-absolute navbar-dark caret-none ">
          <div class="container flex-lg-row flex-nowrap align-items-center ">
            <div class="navbar-brand w-100 ">
              <a href="home.php">
              <img class="logo-dark" id="logo" src="./image/logo.png" srcset="./image/logo.png 2x" alt="" />
              <img class="logo-light" id="logo" src="./image/logodark.png" srcset="./image/logodark.png 2x" alt="" />
              </a>
            </div>
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
              <div class="offcanvas-header d-lg-none">
                <h3 class="text-white fs-30 mb-0">Techies Wardrobe</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                <ul class="navbar-nav">
                  <li class="nav-item dropdown dropdown-mega">
                    <a class="nav-link dropdown-toggle" href="home.php">Home</a>
                   
                    <!--/.dropdown-menu -->
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="home.php#category">Category</a>
                   
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="category.php?catid=1" >Mens</a>
                    
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="category.php?catid=2">Womens</a>
                 
                  </li>
                  <li class="nav-item dropdown dropdown-mega">
                    <a class="nav-link dropdown-toggle" href="category.php?catid=3">Kids</a>
                  
                    <!--/.dropdown-menu -->
                  </li>
                  <li class="nav-item dropdown dropdown-mega">
                    <a class="nav-link dropdown-toggle" href="contact.php">Contact</a>
                  
                    <!--/.dropdown-menu -->
                  </li>
                </ul>
                <!-- /.navbar-nav -->
                <div class="offcanvas-footer d-lg-none">
                  <div>
                    <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                    <br /> 00 (123) 456 78 90 <br />
                    <nav class="nav social social-white mt-4">
                      <a href="#"><i class="uil uil-twitter"></i></a>
                      <a href="#"><i class="uil uil-facebook-f"></i></a>
                      <a href="#"><i class="uil uil-dribbble"></i></a>
                      <a href="#"><i class="uil uil-instagram"></i></a>
                      <a href="#"><i class="uil uil-youtube"></i></a>
                    </nav>
                    <!-- /.social -->
                  </div>
                </div>
                <!-- /.offcanvas-footer -->
              </div>
              <!-- /.offcanvas-body -->
            </div>
            <!-- /.navbar-collapse -->
            <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-search"><i class="uil uil-search"></i></a></li>
            
              <li class="nav-item d-lg-none">
                <button class="hamburger offcanvas-nav-btn"><span></span></button>
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
            <!-- /.navbar-other -->
          </div>
          <!-- /.container -->
        </nav>
        <div class="offcanvas offcanvas-end bg-light" id="offcanvas-cart" data-bs-scroll="true">
        <div class="offcanvas-header">
          <h3 class="mb-0">Your Cart</h3>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column">
          <div class="shopping-cart">
            <div class="shopping-cart-item d-flex justify-content-between mb-4">
              <div class="d-flex flex-row">
                <figure class="rounded w-17"><a href="./shop-product.html"><img src="./assets/img/photos/sth1.jpg" srcset="./assets/img/photos/sth1@2x.jpg 2x" alt="" /></a></figure>
                <div class="w-100 ms-4">
                  <h3 class="post-title fs-16 lh-xs mb-1"><a href="./shop-product.html" class="link-dark">Nike Air Sneakers</a></h3>
                  <p class="price fs-sm"><del><span class="amount">$55.00</span></del> <ins><span class="amount">$45.99</span></ins></p>
                  <div class="form-select-wrapper">
                    <select class="form-select form-select-sm">
                      <option value="1" selected>1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                  </div>
                  <!--/.form-select-wrapper -->
                </div>
              </div>
              <div class="ms-2"><a href="#" class="link-dark"><i class="uil uil-trash-alt"></i></a></div>
            </div>
            <!--/.shopping-cart-item -->
            <div class="shopping-cart-item d-flex justify-content-between mb-4">
              <div class="d-flex flex-row">
                <figure class="rounded w-17"><a href="./shop-product.html"><img src="./assets/img/photos/sth2.jpg" srcset="./assets/img/photos/sth2@2x.jpg 2x" alt="" /></a></figure>
                <div class="w-100 ms-4">
                  <h3 class="post-title fs-16 lh-xs mb-1"><a href="./shop-product.html" class="link-dark">Colorful Sneakers</a></h3>
                  <p class="price fs-sm"><span class="amount">$45.00</span></p>
                  <div class="form-select-wrapper">
                    <select class="form-select form-select-sm">
                      <option value="1" selected>1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                  </div>
                  <!--/.form-select-wrapper -->
                </div>
              </div>
              <div class="ms-2"><a href="#" class="link-dark"><i class="uil uil-trash-alt"></i></a></div>
            </div>
            <!--/.shopping-cart-item -->
            <div class="shopping-cart-item d-flex justify-content-between mb-4">
              <div class="d-flex flex-row">
                <figure class="rounded w-17"><a href="./shop-product.html"><img src="./assets/img/photos/sth3.jpg" srcset="./assets/img/photos/sth3@2x.jpg 2x" alt="" /></a></figure>
                <div class="w-100 ms-4">
                  <h3 class="post-title fs-16 lh-xs mb-1"><a href="./shop-product.html" class="link-dark">Polaroid Camera</a></h3>
                  <p class="price fs-sm"><span class="amount">$45.00</span></p>
                  <div class="form-select-wrapper">
                    <select class="form-select form-select-sm">
                      <option value="1" selected>1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                  </div>
                  <!--/.form-select-wrapper -->
                </div>
              </div>
              <div class="ms-2"><a href="#" class="link-dark"><i class="uil uil-trash-alt"></i></a></div>
            </div>
            <!--/.shopping-cart-item -->
          </div>
          <!-- /.shopping-cart-->
          <div class="offcanvas-footer flex-column text-center">
            <div class="d-flex w-100 justify-content-between mb-4">
              <span>Subtotal:</span>
              <span class="h6 mb-0">$135.99</span>
            </div>
            <a href="#" class="btn btn-primary btn-icon btn-icon-start rounded w-100 mb-4"><i class="uil uil-credit-card fs-18"></i> Checkout</a>
            <p class="fs-14 mb-0">Free shipping on all orders over $50</p>
          </div>
          <!-- /.offcanvas-footer-->
        </div>
        <!-- /.offcanvas-body -->
      </div>
        <!-- /.navbar -->
       
        <!-- /.offcanvas -->
       
        <!-- /.offcanvas -->
      </header>
    <!-- /header -->
    <section class="wrapper bg-dark angled lower-start">
      <div class="container pt-7 pt-md-11 pb-8">
        <div class="row gx-0 gy-10 align-items-center">
          <div class="col-lg-6" data-cues="slideInDown" data-group="page-title" data-delay="600">
            <h1 class="display-1 text-white mb-4">Techies Wardrobe focuses on<br /><span class="typer text-primary text-nowrap" data-delay="100" data-words="Providing Stylish,Best Services,Comfortable Clothing"></span><span class="cursor text-primary" data-owner="typer"></span></h1>
            <p class="lead fs-24 lh-sm text-white mb-7 pe-md-18 pe-lg-0 pe-xxl-15">for tech enthusiasts</p>
            <div>
             
            </div>
          </div>
          <!-- /column -->
          <div class="col-lg-5 offset-lg-1 mb-n18" data-cues="slideInDown">
            <div class="position-relative">
              <!-- <a href="./assets/media/movie.mp4" class="btn btn-circle btn-primary btn-play ripple mx-auto mb-6 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox><i class="icn-caret-right"></i></a> -->

              <?php
     $id=$_GET['catid'];
     $sql="SELECT * FROM `collection` WHERE cat_id=$id";
     
     $result=mysqli_query($conn,$sql);
     $row=mysqli_fetch_array($result);
      echo'
              <figure class="rounded shadow-lg mt-7"><img src="./image/collection39.webp" srcset="./image/'.$row['cat_image'].'" alt=""></figure>
              ';
     ?>
            </div>
            <!-- /div -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->

<br>
<br>
<br>


<section class="wrapper bg-light">
      <div class="container py-14 py-md-16">
        <div class="row">
          <div class="col-lg-12 col-xl-10 col-xxl-7 mx-auto text-center">
            <i class="icn-flower text-leaf fs-30 opacity-25"></i>
            <h2 class="display-5 text-center mt-2 mb-10" >Slay the look, not the price! Rent. Flaunt. Repeat.</h2>
            
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        


        <!--/.row -->
     
    <div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-0 text-center mx-3">
     <?php
     $id=$_GET['catid'];
     $sql="SELECT * FROM `collection2` WHERE cat_id=$id";
     
     $result=mysqli_query($conn,$sql);
     while($row=mysqli_fetch_array($result)){
      $id1=$row['collection_typeid']; 

     echo '
     
      <div class="col-sm-8 col-md-6 col-lg-4 mx-auto">
        <div class="card shadow-lg mt-5">
          <figure class="card-img-top overlay overlay-1" id="he">
            <a class="h-25" href="catshop.php?catid1='.$id1.'"><img class="img-fluid" src="./image/'.$row['collection_image'].'" srcset="./image/'.$row['collection_image'].'" alt="" /></a>
            <figcaption>
              <h5 class="from-top mb-0"><a href="catshop.php?catid1='.$id1.'">'.$row['collection_name'].'</a></h5>
          
            </figcaption>
          </figure>
          <div class="card-body p-6">
          
            <h3 class="fs-21 mb-0"><a href="catshop.php?catid1='.$id1.'">'.$row['collection_name'].'</a></h3>
          </div>
          <!--/.card-body -->
        </div>
        <!-- /.card -->
      </div>
      ';
     }
     mysqli_close($conn);
      ?>
    </div>
 




  </div>
  
      <!-- /.container -->
    
    </section>
  <!-- /.content-wrapper -->
  <footer class="bg-dark text-inverse">
    <div class="container py-13 py-md-15">
      <div class="row gy-6 gy-lg-0">
        <div class="col-lg-4">
          <div class="widget">
            <img class="mb-4" id="logo" src="./image/logodark.png" srcset="./image/logodark.png 2x" alt="" />
            <p class="mb-4">© 2025 TechiesWardrobe. All rights reserved.</p>
            <nav class="nav social social-white">
              <a href="#"><i class="uil uil-twitter"></i></a>
              <a href="#"><i class="uil uil-facebook-f"></i></a>
              <a href="#"><i class="uil uil-dribbble"></i></a>
              <a href="#"><i class="uil uil-instagram"></i></a>
              <a href="#"><i class="uil uil-youtube"></i></a>
            </nav>
            <!-- /.social -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-2 offset-lg-2">
          <div class="widget">
            <h4 class="widget-title mb-3 text-white">Need Help?</h4>
            <ul class="list-unstyled mb-0">
              <li><a href="#">Support</a></li>
              <li><a href="#">Get Started</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-2">
          <div class="widget">
            <h4 class="widget-title mb-3 text-white">Learn More</h4>
            <ul class="list-unstyled mb-0">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Projects</a></li>
              <li><a href="#">Pricing</a></li>
              <li><a href="#">Features</a></li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-2">
          <div class="widget">
            <h4 class="widget-title mb-3 text-white">Get in Touch</h4>
            <address>Lovely Professional University,Jalandhar,
              <br>Punjab</address>
            <a href="mailto:first.last@email.com">Harshitrajput7291@gmai.com</a><br /> +91 72919-15160
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </footer>

  <script src="./assets/js/plugins.js"></script>
  <script src="./assets/js/theme.js"></script>
</body>

</html>