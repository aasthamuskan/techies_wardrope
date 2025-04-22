<?php
include("customize/db.php");
session_start();
$user="";
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true) {
  $user="SignIn";
    
}
else{
  $user=$_SESSION['name'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
  <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
  <meta name="author" content="elemis">
  <title>Techies Wardrobe</title>
  <link rel="shortcut icon" href="./assets/img/favicon.png">
  <link rel="stylesheet" href="./assets/css/plugins.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/colors/leaf.css">
  <link rel="preload" href="./assets/css/fonts/urbanist.css" as="style" onload="this.rel='stylesheet'">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
      .main {
            height: 70%;
        }
        .main input {
            width: 50%;
            height: 80%;
            border: 2px solid black;
        }
        .add {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
        }
        .project {
            width: calc(33.33% - 20px);
            margin-right: 20px;
            margin-bottom: 20px;
        }
        @media (max-width: 992px) {
            .project {
                width: calc(50% - 20px);
            }
        }
        @media (max-width: 768px) {
            .project {
                width: 100%;
                margin-right: 0;
            }
        }
        .image-container {
            height: 400px;
            overflow: hidden; /* Prevent overflow from images with different aspect ratios */
        }
        #he {
            width: 100%;
            height: 100%;
            object-fit: contain; /* Maintain aspect ratio without cropping */
        }
        #logo{
      height: 100px;
      width: 150px;
    }
  .custom-hover:hover {
    border-bottom: 3px solid #296262;
  }
  #fig2{
    height:65vh;
  }
  </style>
</head>

<body>
  <div class=" text-white fw-bold fs-15 mb-0" style="background-color: #296262;">
    <div class="container py-2 d-md-flex flex-md-row">
      <div class="d-flex flex-row align-items-center">
        <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-location-pin-alt"></i></div>
        <address class="mb-0">Lovely Professional University</address>
      </div>
      <div class="d-flex flex-row align-items-center me-6 ms-auto">
        <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-phone-volume"></i></div>
        <p class="mb-0">+91 72919-15160</p>
      </div>
      <div class="d-flex flex-row align-items-center">
        <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-message"></i></div>
        <p class="mb-0"><a href="mailto:sandbox@email.com" class="link-white hover">TechiesWardrobe@email.com</a></p>
      </div>
    </div>
    <!-- /.container -->
  </div>
  
  <div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
      <nav class="navbar navbar-expand-lg center-nav transparent position-absolute navbar-dark caret-none">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
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
                  <a class="nav-link dropdown-toggle custom-hover " href="home.php">Home</a>
                 
                  <!--/.dropdown-menu -->
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle custom-hover" href="#category" >Category</a>
                 
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle custom-hover" href="category.php?catid=1" >Mens</a>
                </li>
                
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle custom-hover" href="category.php?catid=2" >Women</a>
               
                </li>
                <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link dropdown-toggle custom-hover" href="category.php?catid=3" >Kids</a>
                
                  <!--/.dropdown-menu -->
                </li>
                <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link dropdown-toggle custom-hover" href="contact.php">Contact</a>
                
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
            
              <li class="nav-item d-none d-md-block ">
                <a href="signin.php" class="btn btn-sm border border-secondary rounded-pill text-light" style="background-color: #296262; color:red" ><i class="fa-regular fa-circle-user"></i> &nbsp;<?php
                echo $user ?></a>
              </li>
              <li class="nav-item d-none d-md-block ">
                <a href="logout.php" class="btn btn-sm border border-secondary rounded-pill text-light" style="background-color: #296262; color:red">Logout</a>
              </li>
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
      <!-- /.navbar -->
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
     
      <!-- /.offcanvas -->
      <div class="offcanvas offcanvas-top bg-light" id="offcanvas-search" data-bs-scroll="true">
            <div class="container d-flex flex-row py-6">
                <form class="search-form w-100">
                    <input id="search-forms" type="text" class="form-control" placeholder="Seach Your Cloth">
                </form>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <br>
            <div class="content-wrapper ">
                <section class="wrapper bg-light">
                    <div class="container py-14 py-md-16 add">
                    </div>
                </section>
            </div>
            <div class="progress-wrap">
                <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
                </svg>
            </div>
        </div>
      <!-- /.offcanvas -->
    </header>
    <!-- /header -->
    <section class="wrapper bg-dark">
      <div class="swiper-container swiper-thumbs-container swiper-fullscreen nav-dark" data-margin="0" data-autoplay="true" data-autoplaytime="7000" data-nav="true" data-dots="false" data-items="1" data-thumbs="true">
        <!-- SUSHANT IMAGE-->
        <div class="swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="./image/collection37.jpg"></div>
            <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="./image/collection40.jpg"></div>
            <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="./image/collection43.webp"></div>
            <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="./image/collection42.jpg"></div>
          </div>
          <!--/.swiper-wrapper -->
        </div>
        <!-- /.swiper -->
        <div class="swiper swiper-thumbs">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="./image/collection37.jpg" srcset="./image/collection37.jpg 2x" /></div>
            <div class="swiper-slide"><img src="./image/collection40.jpg" srcset="./image/collection40.jpg 2x" alt="" /></div>
            <div class="swiper-slide"><img src="./image/collection43.webp" srcset="./image/collection43.webp 2x" alt="" /></div>
            <div class="swiper-slide"><img src="./image/collection42.jpg" srcset="./image/collection42.jpg 2x" alt="" /></div>
          </div>
          <!--/.swiper-wrapper -->
        </div>
        <!-- /.swiper -->
        <div class="swiper-static">
          <div class="container h-100 d-flex align-items-center justify-content-center">
            <div class="row">
              <div class="col-lg-8 mx-auto mt-n10 text-center">
                <h1 class="fs-19 text-uppercase ls-xl text-white mb-3 animate__animated animate__zoomIn animate__delay-1s">I'm Techies Wardrobe</h1>
                <h2 class="display-1 fs-60 text-white mb-0 animate__animated animate__zoomIn animate__delay-2s">Why buy when you can rent the runway?</h2>
              </div>
              <!-- /column -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container -->
        </div>
        <!-- /.swiper-static -->
      </div>
      <!-- /.swiper-container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container py-14 py-md-16">
        <div class="row">
          <div class="col-lg-12 col-xl-10 col-xxl-7 mx-auto text-center">
            <i class="icn-flower text-leaf fs-30 opacity-25"></i>
            <h2 class="display-5 text-center mt-2 mb-10"id="category" >Tech meets style-rent the latest with ease and wear what you love</h2>
            
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-0 text-center">
          <?php 
          $sql="SELECT * FROM `collection`";
          
          $result=mysqli_query($conn,$sql);
          while($row=mysqli_fetch_array($result)){
            if($row['cat_id']<=3){
            $id=$row['cat_id'];
          echo'
        <div class="col-sm-8 col-md-6 col-lg-4 mx-auto">
            <div class="card shadow-lg" >
              
              <figure class="card-img-top overlay overlay-1">
                <a class="h-25"  href="category.php?catid='.$id.'""><img class="img-fluid" src="./image/'.$row['cat_image'].'" srcset="./image/'.$row['cat_image'].'" alt=""   /></a>
                <figcaption>
                  <h5 class="from-top mb-0">'.$row['cat_name'].'</h5>
                </figcaption>
              </figure>
              <div class="card-body p-6">
        <h5 class="card-title"><a href="category.php?catid='.$id.'">'.$row['cat_name'].'</a></h5>
              </div>
              <!--/.card-body -->
            </div>
            <!-- /.card -->
          </div>';
            }
          }

?>


        <!--/.row -->
      </div>
      <!-- /.container -->
      </div>
    </section>
    <!-- /section -->
    <section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="./image/img8.jpg">
      <div class="container py-14 py-md-17 text-center">
        <i class="icn-flower text-white fs-30 opacity-50"></i>
        <div class="row mt-3">
          <div class="col-xl-9 col-xxl-8 mx-auto">
            <div class="swiper-container dots-light dots-closer mb-6" data-margin="30" data-dots="true">
              <div class="swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <blockquote class="border-0 fs-24 mb-0">
                      <p>“Unlock your style with Code Closet- where tech meets trend, and every outfit tells a story!”</p>
                      <div class="blockquote-details justify-content-center">
                        <div class="info p-0">
                          <h6 class="mb-0 text-white">Harshit Rajput</h6>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                  <!--/.swiper-slide -->
                  <div class="swiper-slide">
                    <blockquote class="border-0 fs-24 mb-0">
                      <p>“Make every moment magical-rent the perfect outfit, create unforgettable memories, and capture the joy in style. No closets, just endless possibilities!”</p>
                      <div class="blockquote-details justify-content-center">
                        <div class="info p-0">
                          <h6 class="mb-0 text-white">Khushi Rana</h6>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                  <!--/.swiper-slide -->
                  <div class="swiper-slide">
                    <blockquote class="border-0 fs-24 mb-0">
                      <p>“Style isn’t just what you wear, it’s who you are. Dress bold, stay confident, and make every outfit unforgettable.”</p>
                      <div class="blockquote-details justify-content-center">
                        <div class="info p-0">
                          <h6 class="mb-0 text-white">Aastha Muskan</h6>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                  <!--/.swiper-slide -->
                </div>
                <!--/.swiper-wrapper -->
              </div>
              <!--/.swiper -->
            </div>
            <!-- /.swiper-container -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-soft-primary">
   
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="overflow-hidden">
        <div class="container py-14 py-md-16">
          <div class="row">
            <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto text-center">
              <i class="icn-flower text-leaf fs-30 opacity-25"></i>
              <h2 class="display-5 text-center mt-2 mb-10">Latest New Arrival<br class="d-none d-md-block"> Explore</h2>
            </div>
        </div>
    
            <!--/column -->
            <div class="grid grid-view projects-masonry shop mb-13 mt-5">
          <div class="row gx-md-8 gy-10 gy-md-13 isotope">
           
<?php

        
          $sql= "SELECT * FROM `shop` WHERE collection_id=24";
          $result=mysqli_query($conn,$sql);
          while($row=mysqli_fetch_array($result)){
          
            $id4=$row['shopid'];
            echo '
            <div class="project item col-md-6 col-xl-4 mt-7">
              <figure class="rounded mb-6 h-25">
                  <img src="./image/'.$row['collection_image'].'" srcset="./image/'.$row['collection_image'].' 2x" alt="" />
                <a class="item-like" href="#" data-bs-toggle="white-tooltip" title="Add to wishlist"><i class="uil uil-heart"></i></a>
                <a class="item-view" href="#" data-bs-toggle="white-tooltip" title="Quick view"><i class="uil uil-eye"></i></a>
                <a href="payment.php?catid3='.$id4.'" class="item-cart" style="cursor: pointer;" id="newcart"><i class="uil uil-shopping-bag " >BUY NOW</i> </a>
                  <span class="avatar bg-aqua text-white w-10 h-10 position-absolute text-uppercase fs-13" style="top: 1rem; left: 1rem;"><span>New!</span></span>
              </figure>
              <div class="post-header">
                <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                 
                  <span class="ratings five"></span>
                </div>
              <h2 class="post-title h3 fs-22">
    <a href="productpage.php?catid3='.$id4.'" class="link-dark">
        '.$row['collection_name'].'
    </a>
</h2>

               
                <p class="price"><del><span class="amount"> ₹'.$row['oldprice'].'.00</span></del> <ins><span class="amount"> ₹'.$row['Price'].'.00</span></ins></p>
              </div>
            </div>';




          }
          ?>
        

              <!-- /.post-header -->
           
            <!-- /.item -->
         
            <!-- /.item -->
          
                <!-- /.item -->
          </div>
          <!-- /.row -->
        </div>



        </div>
 
          </div>
        </div>
      </div>
    </section>
    
    
          <!--/.row -->
       
    <!-- /section -->
    <section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="./image/img9.jpg">
      <div class="container py-14 py-md-17 text-center">
        <div class="row">
          <div class="col-xl-10 col-xxl-8 mx-auto text-center">
            <i class="icn-flower text-white fs-30 opacity-50"></i>
            <h2 class="display-4 text-white mt-2 mb-7">"Got Questions? We're Here to Help! 📩 Contact Us for Style Advice, Orders & More!"</h2>
            <a href="contact.php" class="btn btn-white rounded-pill mb-5">Contact Me</a>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container pt-12 pt-md-14 pb-14 pb-md-16">
        <div class="row gx-md-8 gx-xl-12 gy-6 align-items-center">
          <div class="col-md-8 col-lg-6 mx-auto">
            <div class="img-mask mask-1"><img src="./image/collection47.webp" srcset="./image/collection47.webp 2x" alt="" /></div>
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <h2 class="display-5 mb-5">Hi, welcome to Techies Wardrobe! I’m here to help you style effortlessly with our trendy rental collection. Let’s find your perfect look! </h2>
            <p class="mb-6">Techies Wardrobe offers a smart, stylish, and sustainable way to dress for any occasion. Browse, rent, wear, and return—no ownership, no hassle. Enjoy trendy fashion at a fraction of the cost while we handle the cleaning. Stay stylish, effortlessly!.</p>
            <div class="row counter-wrapper gy-6">
              <div class="col-md-4">
                <h3 class="counter">100+</h3>
                <p>Clothes</p>
              </div>
              <!--/column -->
              <div class="col-md-4">
                <h3 class="counter">50</h3>
                <p>Happy Clients</p>
              </div>
              <!--/column -->
              <div class="col-md-4">
                <h3 class="counter">5</h3>
                <p>Stores Availabe</p>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/column -->
        </div>
        <!-- /.row -->
        <div class="row gx-md-8 gx-xl-12 gy-6 mt-8">
          <div class="col-lg-4">
            <h3>Our Motive</h3>
            <p>To revolutionize fashion by making high-quality style accessible, affordable, and sustainable. We eliminate ownership hassles, reduce fashion waste, and empower you to stay trendy with effortless clothing rentals for every occasion.</p>
            <ul class="progress-list">
              <li>
                <p>Affordable Fashion </p>
                <div class="progressbar line soft-primary" data-value="100"></div>
              </li>
              <li>
                <p>Convenience</p>
                <div class="progressbar line soft-primary" data-value="80"></div>
              </li>
              <li>
                <p>Sustainability</p>
                <div class="progressbar line soft-primary" data-value="85"></div>
              </li>
              <li>
                <p>Variety</p>
                <div class="progressbar line soft-primary" data-value="90"></div>
              </li>
            </ul>
            <!-- /.progress-list -->
          </div>
          <!-- /column -->
          <div class="col-lg-4">
            <h3>Why Choose Me?</h3>
            <p>If you love fashion without the hassle of ownership, Techies Wardrobe is your perfect choice! Rent stylish outfits for any occasion, enjoy effortless elegance, and let us handle the rest. Stay trendy, stay smart—choose Techies Wardrobe.</p>
            <ul class="icon-list bullet-bg bullet-soft-primary">
              <li><i class="uil uil-check"></i>Affordable – Stylish outfits at low cost.</li>
              <li><i class="uil uil-check"></i>Trendy – Fashion for every occasion.</li>
              <li><i class="uil uil-check"></i>Trendy – Fashion for every occasion.</li>
              <li><i class="uil uil-check"></i>Convenient – We handle cleaning.</li>
              <li><i class="uil uil-check"></i>Eco-Friendly – Reduce fashion waste.</li>
            </ul>
          </div>
          <!-- /column -->
          <div class="col-lg-4">
            <h3>My Process</h3>
            <div class="d-flex flex-row mb-5">
              <div>
                <span class="icon btn btn-circle btn-soft-primary pe-none mt-1 me-5"><span class="number fs-18">1</span></span>
              </div>
              <div>
                <h5 class="mb-1">Collect Ideas</h5>
                <p class="mb-0">We gather ideas through fashion trends, customer preferences, seasonal styles, and sustainability, ensuring a fresh and stylish collection.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-5">
              <div>
                <span class="icon btn btn-circle btn-soft-primary pe-none mt-1 me-5"><span class="number fs-18">2</span></span>
              </div>
              <div>
                <h5 class="mb-1">Data Analysis</h5>
                <p class="mb-0">We analyze data by tracking fashion trends, customer preferences, rental patterns, and feedback to curate the best clothing selections.</p>
              </div>
            </div>
            <div class="d-flex flex-row">
              <div>
                <span class="icon btn btn-circle btn-soft-primary pe-none mt-1 me-5"><span class="number fs-18">3</span></span>
              </div>
              <div>
                <h5 class="mb-1">Finalize Product</h5>
                <p class="mb-0">We finalize products based on trends, quality, demand, and feedback.</p>
              </div>
            </div>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-soft-primary">
      <div class="overflow-hidden">
        <div class="container py-14 py-md-16">
          <div class="row">
            <div class="col-xl-7 col-xxl-6 mx-auto text-center">
              <i class="icn-flower text-leaf fs-30 opacity-25"></i>
              <h2 class="display-5 text-center mt-2 mb-10">" Upgrade Your Style for Less – Shop the Hottest Deals Before They're Gone!"</h2>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
          <div class="swiper-container nav-bottom nav-color mb-14" data-margin="30" data-dots="false" data-nav="true" data-items-lg="3" data-items-md="2" data-items-xs="1" id="sale">
            <div class="swiper overflow-visible pb-2">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <article>
                    <div class="card shadow-lg">
                      <figure class="card-img-top overlay overlay-1" id="fig2"><a href="category.php?catid=4"> <img src="./image/shop13.jpg" srcset="./image/shop13.jpg 2x" alt="" /></a>
                        <figcaption>
                          <h5 class="from-top mb-0">Live</h5>
                        </figcaption>
                      </figure>
                      <div class="card-body p-6">
                        <div class="post-header">
                          <div class="post-category">
                            <a href="category.php?catid=4" class="hover" rel="category">Live</a>
                          </div>
                          <!-- /.post-category -->
                          <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="category.php?catid=4">Style Steals Sale</a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-footer">
                          <ul class="post-meta d-flex mb-0">
                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Feb 2025</span></li>
                       
                          </ul>
                          <!-- /.post-meta -->
                        </div>
                        <!-- /.post-footer -->
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!-- /.card -->
                  </article>
                  <!-- /article -->
                </div>
                <!--/.swiper-slide -->
                <div class="swiper-slide">
                  <article>
                    <div class="card shadow-lg">
                      <figure class="card-img-top overlay overlay-1" id="fig2"> <a href="salenot.php"> <img src="./image/shop11.jpg" srcset="./image/shop11.jpg 2x" alt="" /></a>
                        <figcaption>
                          <h5 class="from-top mb-0">Up Comming</h5>
                        </figcaption>
                      </figure>
                      <div class="card-body p-6">
                        <div class="post-header">
                          <div class="post-category">
                            <a href="salenot.php" class="hover" rel="category">Up Comming</a>
                          </div>
                          <!-- /.post-category -->
                          <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="salenot.php">Runway Ready Deals</a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-footer">
                          <ul class="post-meta d-flex mb-0">
                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29 Oct 2025</span></li>
                       
                          </ul>
                          <!-- /.post-meta -->
                        </div>
                        <!-- /.post-footer -->
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!-- /.card -->
                  </article>
                  <!-- /article -->
                </div>
                <!--/.swiper-slide -->
                <div class="swiper-slide">
                  <article>
                    <div class="card shadow-lg">
                      <figure class="card-img-top overlay overlay-1" id="fig2"><a href="salenot.php"> <img src="./image/shop7.jpg" srcset="./image/shop7.jpg 2x" alt="" /></a>
                        <figcaption>
                          <h5 class="from-top mb-0">Up Comming</h5>
                        </figcaption>
                      </figure>
                      <div class="card-body p-6">
                        <div class="post-header">
                          <div class="post-category">
                            <a href="salenot.php" class="hover" rel="category">Up Comming</a>
                          </div>
                          <!-- /.post-category -->
                          <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="salenot.php">Chic & Cheap Fest</a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-footer">
                          <ul class="post-meta d-flex mb-0">
                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26 Sep 2025</span></li>
                     
                          </ul>
                          <!-- /.post-meta -->
                        </div>
                        <!-- /.post-footer -->
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!-- /.card -->
                  </article>
                  <!-- /article -->
                </div>
                <!--/.swiper-slide -->
                <div class="swiper-slide">
                  <article>
                    <div class="card shadow-lg">
                      <figure class="card-img-top overlay overlay-1" id="fig2"><a href="salenot.php"> <img src="./image/shop4.jpg" srcset="./image/shop4.jpg 2x" alt="" /></a>
                        <figcaption>
                          <h5 class="from-top mb-0">Up Comming</h5>
                        </figcaption>
                      </figure>
                      <div class="card-body p-6">
                        <div class="post-header">
                          <div class="post-category">
                            <a href="salenot.php" class="hover" rel="category">Up Comming</a>
                          </div>
                          <!-- /.post-category -->
                          <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="salenot.php">Wardrobe Refresh Sale</a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-footer">
                          <ul class="post-meta d-flex mb-0">
                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30 March 2025</span></li>
                       
                          </ul>
                          <!-- /.post-meta -->
                        </div>
                        <!-- /.post-footer -->
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!-- /.card -->
                  </article>
                  <!-- /article -->
                </div>
                <!--/.swiper-slide -->
                <div class="swiper-slide">
                  <article>
                    <div class="card shadow-lg">
                      <figure class="card-img-top overlay overlay-1" id="fig2"><a href="salenot.php"> <img src="./image/shop15.jpg" srcset="./image/shop15.jpg 2x" alt="" /></a>
                        <figcaption>
                          <h5 class="from-top mb-0">Locked</h5>
                        </figcaption>
                      </figure>
                      <div class="card-body p-6">
                        <div class="post-header">
                          <div class="post-category">
                            <a href="salenot.php" class="hover" rel="category">Locked</a>
                          </div>
                          <!-- /.post-category -->
                          <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="salenot.php">Fashion Fever Discounts</a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-footer">
                          <ul class="post-meta d-flex mb-0">
                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27 Aug 2025</span></li>
                     
                          </ul>
                          <!-- /.post-meta -->
                        </div>
                        <!-- /.post-footer -->
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!-- /.card -->
                  </article>
                  <!-- /article -->
                </div>
                <!--/.swiper-slide -->
                <div class="swiper-slide">
                  <article>
                    <div class="card shadow-lg">
                      <figure class="card-img-top overlay overlay-1" id="fig2"><a href="salenot.php"> <img src="./image/shop5.jpg" srcset="./image/shop5.jpg 2x" alt="" /></a>
                        <figcaption>
                          <h5 class="from-top mb-0">Up Comming</h5>
                        </figcaption>
                      </figure>
                      <div class="card-body p-6">
                        <div class="post-header">
                          <div class="post-category">
                            <a href="salenot.php" class="hover" rel="category">Up Comming</a>
                          </div>
                          <!-- /.post-category -->
                          <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="salenot.php">Locked</a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-footer">
                          <ul class="post-meta d-flex mb-0">
                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>2 Aug 2025</span></li>
                        
                          </ul>
                          <!-- /.post-meta -->
                        </div>
                        <!-- /.post-footer -->
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!-- /.card -->
                  </article>
                  <!-- /article -->
                </div>
                <!--/.swiper-slide -->
              </div>
              <!--/.swiper-wrapper -->
            </div>
            <!-- /.swiper -->
          </div>
          <!-- /.swiper-container -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.overflow-hidden -->
    </section>
    <!-- /section -->
  </div>
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
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <script src="./assets/js/plugins.js"></script>
  <script src="./assets/js/theme.js"></script>
  <script>
        var input = document.querySelector("#search-forms");
        var data = [
    { shopid: 1, collection_name: "Jersey", collection_image: "pic26.jpg", price: 60, oldprice: 80 },
    { shopid: 2, collection_name: "Floral Top", collection_image: "collection_4.webp", price: 40, oldprice: 60 },
    { shopid: 3, collection_name: "Black T-Shirt", collection_image: "pic1.jpg", price: 50, oldprice: 58 },
    { shopid: 5, collection_name: "White T-Shirt", collection_image: "pic3.jpg", price: 50, oldprice: 60 },
    { shopid: 6, collection_name: "Bell-Bottom", collection_image: "pic4.jpg", price: 60, oldprice: 70 },
    { shopid: 7, collection_name: "Denim-Jeans", collection_image: "pic5.jpg", price: 50, oldprice: 55 },
    { shopid: 8, collection_name: "Pathani Suits", collection_image: "pic6.jpg", price: 70, oldprice: 80 },
    { shopid: 9, collection_name: "Chikankari Short-Kurti", collection_image: "pic7.jpg", price: 90, oldprice: 100 },
    { shopid: 10, collection_name: "Kashmiri Suit", collection_image: "pic9.jpg", price: 90, oldprice: 100 },
    { shopid: 11, collection_name: "Silk Saree", collection_image: "pic11.jpeg", price: 100, oldprice: 120 },
    { shopid: 12, collection_name: "Jorget Kurta", collection_image: "pic12.jpeg", price: 90, oldprice: 110 },
    { shopid: 13, collection_name: "Crop Top", collection_image: "pic13.jpeg", price: 50, oldprice: 60 },
    { shopid: 14, collection_name: "Ethnic Kurti", collection_image: "pic14.jpeg", price: 80, oldprice: 100 },
    { shopid: 15, collection_name: "Puff Jacket", collection_image: "pic15.jpeg", price: 100, oldprice: 120 },
    { shopid: 16, collection_name: "Crop Top", collection_image: "pic13.jpeg", price: 30, oldprice: 40 },
    { shopid: 17, collection_name: "Womens New-Arrival", collection_image: "pic17.jpg", price: 50, oldprice: 60 },
    { shopid: 18, collection_name: "Running Suit", collection_image: "pic18.jpg", price: 50, oldprice: 70 },
    { shopid: 19, collection_name: "Nike Sports Wear", collection_image: "pic19.jpg", price: 100, oldprice: 110 },
    { shopid: 20, collection_name: "Gym Jacket", collection_image: "pic20.jpg", price: 50, oldprice: 60 },
    { shopid: 21, collection_name: "Trendy Formals", collection_image: "pic21.jpg", price: 100, oldprice: 110 },
    { shopid: 22, collection_name: "Skiwi", collection_image: "pic22.jpg", price: 70, oldprice: 80 },
    { shopid: 23, collection_name: "Classic Formals", collection_image: "pic23.jpg", price: 150, oldprice: 160 },
    { shopid: 24, collection_name: "Lpu Women Formals", collection_image: "pic24.jpg", price: 100, oldprice: 120 },
    { shopid: 25, collection_name: "Baggy Denim", collection_image: "pic27.jpg", price: 70, oldprice: 80 },
    { shopid: 26, collection_name: "Classic Jersey", collection_image: "pic28.jpg", price: 50, oldprice: 60 },
    { shopid: 27, collection_name: "Blue Lining Shirt", collection_image: "pic29.jpg", price: 50, oldprice: 60 },
    { shopid: 28, collection_name: "Pastel Shirt", collection_image: "pic30.jpg", price: 50, oldprice: 70 },
    { shopid: 29, collection_name: "Royal Blue", collection_image: "pic31.jpg", price: 60, oldprice: 80 },
    { shopid: 30, collection_name: "Cozy Formals", collection_image: "pic32.jpg", price: 60, oldprice: 70 },
    { shopid: 31, collection_name: "Pathani Kurta", collection_image: "pic33.jpg", price: 100, oldprice: 150 },
    { shopid: 32, collection_name: "Royal Black", collection_image: "pic34.jpg", price: 100, oldprice: 160 },
    { shopid: 33, collection_name: "Black Kurta", collection_image: "pic35.jpg", price: 50, oldprice: 60 },
    { shopid: 34, collection_name: "Pookie Kurta", collection_image: "pic36.jpg", price: 50, oldprice: 80 },
    { shopid: 35, collection_name: "Action Wear", collection_image: "pic37.jpg", price: 45, oldprice: 50 },
    { shopid: 36, collection_name: "Track Suit", collection_image: "pic38.jpg", price: 40, oldprice: 80 },
    { shopid: 37, collection_name: "Athlete Wear", collection_image: "pic39.jpg", price: 48, oldprice: 50 },
    { shopid: 38, collection_name: "Gym Suit", collection_image: "pic40.jpg", price: 35, oldprice: 45 },
    { shopid: 39, collection_name: "Baggy Jacket", collection_image: "pic41.jpg", price: 56, oldprice: 60 },
    { shopid: 40, collection_name: "Leather Jacket", collection_image: "pic42.jpg", price: 56, oldprice: 80 },
    { shopid: 41, collection_name: "Trendy Jacket", collection_image: "pic44.jpg", price: 75, oldprice: 85 },
    { shopid: 42, collection_name: "Lpu Formals", collection_image: "pic45.jpg", price: 100, oldprice: 120 },
    { shopid: 43, collection_name: "Cozy Night Wear", collection_image: "pic46.jpg", price: 50, oldprice: 70 },
    { shopid: 44, collection_name: "Blue Lining Night Wear", collection_image: "pic47.jpg", price: 55, oldprice: 60 },
    { shopid: 45, collection_name: "Silk Night Wear", collection_image: "pic48.jpg", price: 45, oldprice: 50 },
    { shopid: 46, collection_name: "Baggy T-shirt", collection_image: "pic49.jpg", price: 50, oldprice: 60 },
    { shopid: 47, collection_name: "Cream Cordset", collection_image: "pic50.jpg", price: 50, oldprice: 70 },
    { shopid: 48, collection_name: "Chikankari Kurti", collection_image: "pic51.jpg", price: 100, oldprice: 110 },
    { shopid: 49, collection_name: "Floral Lehenga", collection_image: "pic52.jpg", price: 100, oldprice: 120 },
    { shopid: 50, collection_name: "Yoga Track", collection_image: "pic53.jpg", price: 100, oldprice: 135 },
    { shopid: 51, collection_name: "Zumba Wear", collection_image: "pic54.jpg", price: 100, oldprice: 140 },
    { shopid: 52, collection_name: "Chaniya Choli", collection_image: "pic55.jpg", price: 45, oldprice: 50 },
    { shopid: 53, collection_name: "Black Kurta", collection_image: "pic56.jpg", price: 45, oldprice: 55 },
    { shopid: 54, collection_name: "Over-Coat", collection_image: "pic57.jpg", price: 70, oldprice: 75 },
    { shopid: 55, collection_name: "Doll Dress", collection_image: "pic58.jpg", price: 90, oldprice: 95 },
    { shopid: 56, collection_name: "White Frock", collection_image: "collection49.jpg", price: 70, oldprice: 80 },
    { shopid: 57, collection_name: "Grey Sparkle Shirt", collection_image: "collection50.jpg", price: 50, oldprice: 55 },
    { shopid: 58, collection_name: "Denim Skirt", collection_image: "collection52.jpg", price: 50, oldprice: 60 },
    { shopid: 59, collection_name: "Funky Black Jacket", collection_image: "collection59.jpg", price: 100, oldprice: 120 },
    { shopid: 60, collection_name: "Creamy Pant", collection_image: "collection58.jpg", price: 100, oldprice: 120 },
    { shopid: 61, collection_name: "Brown Sweater", collection_image: "collection56.jpg", price: 80, oldprice: 120 },
    { shopid: 62, collection_name: "Funky White Jacket", collection_image: "collection55.jpg", price: 50, oldprice: 70 },
    { shopid: 63, collection_name: "Princess Dress", collection_image: "collection63.jpg", price: 150, oldprice: 200 },
    { shopid: 64, collection_name: "Punjabi Suit", collection_image: "collection62.jpg", price: 110, oldprice: 130 },
    { shopid: 65, collection_name: "Trending Pocket Cloth", collection_image: "collection65.jpg", price: 100, oldprice: 150 },
    { shopid: 66, collection_name: "Pathani Yellow Suit", collection_image: "collection61.jpg", price: 50, oldprice: 80 },
    { shopid: 67, collection_name: "Green Cargo Jacket", collection_image: "collection57.jpg", price: 40, oldprice: 60 },
    { shopid: 68, collection_name: "Blue Velvet Suit", collection_image: "collection53.jpg", price: 80, oldprice: 100 }
];


        var pers = "";
        data.forEach(function (elem) {
            pers += ` 
            <div class="project item col-md-6 col-xl-4">
                <figure class="rounded mb-6">
                    <div class="image-container">
                        <img id="he" src="./image/${elem.collection_image}" srcset="./image/${elem.collection_image} 2x" alt="" />
                    </div>
                    <a class="item-like" href="#" data-bs-toggle="white-tooltip" title="Add to wishlist"><i class="uil uil-heart"></i></a>
                    <a class="item-view" href="#" data-bs-toggle="white-tooltip" title="Quick view"><i class="uil uil-eye"></i></a>
                    <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i> Add to Cart</a>
                   
                </figure>
                <div class="post-header">
                    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                   
                        <span class="ratings five"></span>
                    </div>
                    <h2 class="post-title h3 fs-22"><a href="productpage.php?catid3=${elem.shopid}" class="link-dark">${elem.collection_name}</a></h2>
                    <p class="price"><del><span class="amount">₹${elem.oldprice}.00</span></del> <ins><span class="amount">₹${elem.price}.00</span></ins></p>
                </div>
            </div>`;
        });
        document.querySelector(".add").innerHTML = pers;
        input.addEventListener("input", function () {
            var matching = data.filter(function (e) {
                return e.collection_name.toLowerCase().startsWith(input.value.toLowerCase());
            });
            var newuser = "";
            matching.forEach(function (elem) {
                newuser += ` <div class="project item col-md-6 col-xl-4">
                <figure class="rounded mb-6">
                    <div class="image-container">
                        <img id="he" src="./image/${elem.collection_image}" srcset="./image/${elem.collection_image} 2x" alt="" />
                    </div>
                    <a class="item-like" href="#" data-bs-toggle="white-tooltip" title="Add to wishlist"><i class="uil uil-heart"></i></a>
                    <a class="item-view" href="#" data-bs-toggle="white-tooltip" title="Quick view"><i class="uil uil-eye"></i></a>
                    <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i> Add to Cart</a>
                   
                </figure>
                <div class="post-header">
                    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                        <div class="post-category text-ash mb-0">Shoes</div>
                        <span class="ratings five"></span>
                    </div> 
                    <h2 class="post-title h3 fs-22"><a href="productpage.php?catid3=${elem.shopid}" class="link-dark">${elem.collection_name}</a></h2>
                    <p class="price"><del><span class="amount">₹${elem.oldprice}.00</span></del> <ins><span class="amount">₹${elem.price}.00</span></ins></p>
                </div>
            </div>`;
            });
            document.querySelector(".add").innerHTML = newuser;
        });
        let cartcount=document.querySelector("#counts")
        let newcart=document.querySelector("#newcart")
        let count=0;
        newcart.addEventListener("click",function(){
          count++;
          cartcount.textContent=count
        })

      </script>
  
</body>

</html>