<?php
include("customize/db.php");
session_start();
$id4=$_GET['catid3'];
if($_SERVER['REQUEST_METHOD']=='POST'){
  
  $user=$_SESSION['name'];
$sub=$_POST["subject"];
$desc=$_POST["cdesc"];


 $sql = "INSERT INTO `customer_reviews` (`sno`, `shop_id`, `name`, `subject`, `cdesc`, `time`) 
 VALUES (NULL, '$id4', '$user', '$sub', '$desc', current_timestamp());";

$result = mysqli_query($conn, $sql);


  
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
  <title>TechiesWardrobe</title>
  <link rel="shortcut icon" href="./assets/img/favicon.png">
  <link rel="stylesheet" href="./assets/css/plugins.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    #hi{
      height: 20px;
   
    }

       #logo{
      height: 80px;
      width: 150px;
    }

    </style>
</head>

<body>
<header class="wrapper bg-soft-primary">
      <nav class="navbar navbar-expand-lg center-nav transparent position-absolute navbar-dark caret-none bg-aqua">
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
  <div class="content-wrapper">
   
    <!-- /header -->
    <section class="wrapper bg-gray">
      <div class="container py-3 py-md-5">
        <nav class="d-inline-block" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="home.php">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Shop</a></li>
   
          
          </ol>
        </nav>
        <!-- /nav -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container py-14 py-md-16">
        <div class="row gx-md-8 gx-xl-12 gy-8">
          <div class="col-lg-6">
            <div class="swiper-container swiper-thumbs-container" data-margin="10" data-dots="false" data-nav="true" data-thumbs="true">
              <div class="swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                  <?php
           $id4=$_GET['catid3'];
           $sql= "SELECT * FROM `shop` WHERE shopid=$id4";
           $result=mysqli_query($conn,$sql);
           $row=mysqli_fetch_array($result);

          echo'
                    <figure class="rounded"id="hi" ><img src="./image/'.$row['collection_image'].'" srcset="./image/'.$row['collection_image'].'" alt="" /><a class="item-link" href="./assets/img/photos/shs1@2x.jpg" data-glightbox data-gallery="product-group"><i class="uil uil-focus-add"></i></a></figure>
                    
                  </div>
                  <!--/.swiper-slide -->
                  <div class="swiper-slide">
                    <figure class="rounded"><img src="./image/product.jpg" srcset="./image/product.jpg" alt="" /><a class="item-link" href="./assets/img/photos/shs2@2x.jpg" data-glightbox data-gallery="product-group"><i class="uil uil-focus-add"></i></a></figure>
                  </div>
                  <!--/.swiper-slide -->
                 
                  <!--/.swiper-slide -->
                </div>
                <!--/.swiper-wrapper -->
              </div>
        
              <div class="swiper swiper-thumbs">
                <div class="swiper-wrapper">
                  <div class="swiper-slide " id="hi"><img src="./image/'.$row['collection_image'].'" srcset="./image/'.$row['collection_image'].'" class="rounded" alt="" /></div>
                  
               
                  <div class="swiper-slide"><img src="./image/product.jpg" srcset="./image/product.jpg 2x.jpg 2x" class="rounded" alt="" /></div>
                </div>
                <!--/.swiper-wrapper -->
              </div>
              <!-- /.swiper -->
            </div>
            <!-- /.swiper-container -->
          </div>';
          ?>
          <!-- /column -->

          <div class="col-lg-6">
            <div class="post-header mb-5">
              <h2 class="post-title display-5"><a href="./shop-product.html" class="link-dark">


              <?php
           $id4=$_GET['catid3'];
           $sql= "SELECT * FROM `shop` WHERE shopid=$id4";
           $result=mysqli_query($conn,$sql);
           $row=mysqli_fetch_array($result);
           
         echo ''.$row['collection_name'].'

              
              
              </a></h2>
              <p class="price fs-20 mb-2"><span class="amount">$'.$row['Price'].'.00</span></p>
              <a href="#" class="link-body ratings-wrapper"><span class="ratings four"></span><span>(3 Reviews)</span></a>
            </div>';
            ?>
            <!-- /.post-header -->
            <!-- <p class="mb-6">Cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Duis mollis, est non commodo luctus. Nulla vitae elit libero pharetra augue. Donec id elit non mi porta gravida at eget metus.</p> -->
            <form>
              <fieldset class="picker">
                <legend class="h6 fs-16 text-body mb-3">Choose a size</legend>
                <label for="size-xs">
                  <input type="radio" name="sizes" id="size-xs" checked>
                  <span>XS</span>
                </label>
                <label for="size-s">
                  <input type="radio" name="sizes" id="size-s">
                  <span>S</span>
                </label>
                <label for="size-m">
                  <input type="radio" name="sizes" id="size-m">
                  <span>M</span>
                </label>
                <label for="size-l">
                  <input type="radio" name="sizes" id="size-l">
                  <span>L</span>
                </label>
                <label for="size-xl">
                  <input type="radio" name="sizes" id="size-xl">
                  <span>XL</span>
                </label>
              </fieldset>
              <fieldset class="picker">
                <legend class="h6 fs-16 text-body mb-3">Choose a color</legend>
                <label for="color-1" style="--color:#fab758">
                  <input type="radio" name="colors" id="color-1" checked>
                  <span>Yellow</span>
                </label>
                <label for="color-2" style="--color:#e2626b">
                  <input type="radio" name="colors" id="color-2">
                  <span>Red</span>
                </label>
                <label for="color-3" style="--color:#7cb798">
                  <input type="radio" name="colors" id="color-3">
                  <span>Green</span>
                </label>
                <label for="color-4" style="--color:#3f78e0">
                  <input type="radio" name="colors" id="color-4">
                  <span>Blue</span>
                </label>
                <label for="color-5" style="--color:#a07cc5">
                  <input type="radio" name="colors" id="color-5">
                  <span>Purple</span>
                </label>
              </fieldset>
              <div class="row">
                <div class="col-lg-9 d-flex flex-row pt-2">
                  <div>
                    <div class="form-select-wrapper">
                      <select class="form-select">
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                    </div>
                    <!--/.form-select-wrapper -->
                  </div>
                  <div class="flex-grow-1 mx-2">
                  <?php
           $id4=$_GET['catid3'];
           $sql= "SELECT * FROM `shop` WHERE shopid=$id4";
           $result=mysqli_query($conn,$sql);
           $row=mysqli_fetch_array($result);
           echo'
                    <button class="btn btn-primary btn-icon btn-icon-start rounded w-100 flex-grow-1" <i class="uil uil-shopping-bag"></i> <a href="payment.php?catid3='.$id4.'" class="text-white">Buy Now</a></button>
                    ';
                    ?>
                  </div>
                  <div>
                    <button class="btn btn-block btn-red btn-icon rounded px-3 w-100 h-100"><i class="uil uil-heart"></i></button>
                  </div>
                </div>
                <!-- /column -->
              </div>
              <!-- /.row -->
            </form>
            <!-- /form -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <ul class="nav nav-tabs nav-tabs-basic mt-12">
          <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#tab1-1">Product Details</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab1-2">Additional Info</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab1-3">Delivery</a>
          </li>
        </ul>
        <!-- /.nav-tabs -->
        <div class="tab-content mt-0 mt-md-5">
          <div class="tab-pane fade show active" id="tab1-1">
          <?php
           $id4=$_GET['catid3'];
           $sql= "SELECT * FROM `shop` WHERE shopid=$id4";
           $result=mysqli_query($conn,$sql);
           $row=mysqli_fetch_array($result);
           echo'
            <p>'
            .$row['description'].'</p>';
            ?>
          </div>
          <!--/.tab-pane -->
          <div class="tab-pane fade" id="tab1-2">
            <p>Clothing varies in fabric, style, and purpose, catering to different occasions and climates. Cotton and linen are breathable for summer, while wool and fleece provide warmth in winter. Formal wear includes suits and dresses, while casual outfits feature jeans and t-shirts. Proper care, like washing instructions, helps maintain fabric quality and longevity.
              <br>
              Athleisure blends comfort and style with leggings, hoodies, and sneakers, while denim remains a timeless choice for casual wear. Layering adds versatility, with jackets and scarves enhancing outfits. Fabrics like silk and polyester cater to luxury and durability. Choosing the right clothing ensures comfort, confidence, and suitability for different settings and seasons.
            </p>
          </div>
          <!--/.tab-pane -->
          <div class="tab-pane fade" id="tab1-3">
            <p>Fast and reliable delivery is essential for customer satisfaction in the clothing industry. Packaging ensures garments remain undamaged, while tracking options provide updates. Express shipping caters to urgent needs, while standard delivery is cost-effective. Proper handling prevents wrinkles or damage, ensuring customers receive their clothes in perfect condition and on time.</p>
          </div>
          <!--/.tab-pane -->
        </div>
        <!-- /.tab-content -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-gray">
      <div class="container py-14 py-md-16">
        <h3 class="h2 mb-6 text-center">You Might Also Like</h3>
        <div class="swiper-container blog grid-view shop mb-6" data-margin="30" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
          <div class="swiper">
            <div class="swiper-wrapper">

<?php

$sql= "SELECT * FROM `shop` WHERE collection_id=30";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){

  $id4=$row['shopid'];
  echo'
              <div class="swiper-slide project item">
                <figure class="rounded mb-6 h-25">
                  <img src="./image/'.$row['collection_image'].'" srcset="./image/'.$row['collection_image'].' 2x" alt="" />
                  <a class="item-like" href="#" data-bs-toggle="white-tooltip" title="Add to wishlist"><i class="uil uil-heart"></i></a>
                  <a class="item-view" href="#" data-bs-toggle="white-tooltip" title="Quick view"><i class="uil uil-eye"></i></a>
                  <a href="payment.php?catid3='.$id4.'" class="item-cart"><i class="uil uil-shopping-bag"></i> Buy Now</a>
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
            </div>
                  
              <!--/.swiper-slide -->
              ';

}

?>


            </div>
            <!--/.swiper-wrapper -->
          </div>
          <!-- /.swiper -->
        </div>
        <!-- /.swiper-container -->
      </div>
      <!-- /.container -->
    </section>

    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container py-14 py-md-16">
        <div class="row gx-md-8 gx-xl-12 gy-10">
          <aside class="col-lg-4 sidebar">
            <div class="widget mt-1">
              <h4 class="widget-title mb-3">Ratings Distribution</h4>
              <div class="mb-5"><span class="ratings four"></span><span>4.2 out of 5</span></div>
              <ul class="progress-list">
                <li>
                  <p>5 Stars</p>
                  <div class="progressbar line blue" data-value="82"></div>
                </li>
                <li>
                  <p>4 Stars</p>
                  <div class="progressbar line blue" data-value="8"></div>
                </li>
                <li>
                  <p>3 Stars</p>
                  <div class="progressbar line blue" data-value="5"></div>
                </li>
                <li>
                  <p>2 Stars</p>
                  <div class="progressbar line blue" data-value="3"></div>
                </li>
                <li>
                  <p>1 Star</p>
                  <div class="progressbar line blue" data-value="2"></div>
                </li>
              </ul>
              <!-- /.progress-list -->
            </div>
            <!-- /.widget -->
            <div class="widget mt-10">
              <h4 class="widget-title mb-3">Review this product</h4>
              <p class="mb-5">Aenean eu leo quam ornare sem lacinia quam.</p>
              <a  class="btn btn-primary rounded w-100" id="review">Write a Review</a>
              <div class="container mt-5 invisible" id="wreview">
<?php 

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true) {
  echo '<div class="alert alert-danger mt-4" role="alert">
  You Are Not The User You Canot Write The Review Kindly <a href="signin.php" class="underline-2 blue">Sign in</a>
</div>';
}
else{
  echo '
 
      <form action="' . $_SERVER['REQUEST_URI'] . '" method="post">
          <div class="mb-3 border border-3 black rounded">
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Subject" name="subject">
          </div>
          <div class="mb-3 border border-3 black rounded">
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Comment Description" name="cdesc"></textarea>
          </div>
          <button type="submit" class="btn btn-blue rounded-pill">Submit&nbsp;<i class="uil uil-comment-dots"></i></button>
      </form>
  </div>
';
}
  
    ?>
            </div>
            
            <!-- /.widget -->
          </aside>
          
          <!-- /column .sidebar -->
          <div class="col-lg-8">
            <div class="row align-items-center mb-10 position-relative zindex-1">
              <div class="col-md-7 col-xl-8 pe-xl-20">
                <h2 class="display-6 mb-0">Ratings & Reviews</h2>
              </div>
              <!--/column -->
              <div class="col-md-5 col-xl-4 ms-md-auto text-md-end mt-5 mt-md-0">
                <!-- <div class="form-select-wrapper">
                  <select class="form-select">
                    <option value="newest">Sort by newest</option>
                    <option value="oldest">Sort by oldest</option>
                    <option value="popular">Sort by popularity</option>
                    <option value="high-rating">Sort by high rating</option>
                    <option value="low-rating">Sort by low rating</option>
                  </select>
                </div> -->
                
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
            <?php
               $id4=$_GET['catid3'];
            $sql= "SELECT * FROM `customer_reviews` where shop_id=$id4";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($result)){
          
            echo'
            
            <div id="comments">
              <ol id="singlecomments" class="commentlist">
                <li class="comment">
                  <div class="comment-header d-md-flex align-items-center">
                    <figure class="user-avatar"><img class="rounded-circle border border-2 black" alt="" src="./image/collection66.jpg" /></figure>
                    <div>
                      <h6 class="comment-author"><a href="#" class="link-dark">'.$row['name'].'</a></h6>
                      <ul class="post-meta">
                        <li><i class="uil uil-calendar-alt"></i>'.$row['time'].'</li>
                      </ul>
                      <!-- /.post-meta -->
                      
                    </div>
                    <!-- /div -->
                  
                  </div>
                 
                  <!-- /.comment-header -->
                  <div class="d-flex flex-row align-items-center mt-5 mb-2">
                    <span class="ratings five"></span>
                    
                    <h6 class="mb-0">'.$row['subject'].'</h6>
                    
                  </div>
                  
                  <p>'.$row['cdesc'].'&nbsp &nbsp <i class="fa-solid fa-file-pen pointer"></i> <i class="uil uil-trash-alt"></i></p>
                  
                  <div class="d-flex flex-row align-items-center pb-3">
                  
                    <p class="text-muted fs-15 mb-0 me-5">Was this review helpful?</p>
                    
                    <div>
                      <a href="#" class="link-dark me-3"><i class="uil uil-thumbs-up"></i> 5</a>
                      <a href="#" class="link-dark"><i class="uil uil-thumbs-down"></i> 5</a>
                      
                    </div>
                    
                  </div>
                  
                </li>
               
               
              </ol>
              
            </div>';
            }
            ?>
            <!-- /#comments -->
          
            <!-- /nav -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-gray">
      <div class="container py-12 py-md-14">
        <div class="row gx-lg-8 gx-xl-12 gy-8">
          <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
              <div>
                <img src="./assets/img/icons/solid/shipment.svg" class="svg-inject icon-svg icon-svg-sm solid-mono text-navy me-4" alt="" />
              </div>
              <div>
                <h4 class="mb-1">Free Shipping</h4>
                <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio sem.</p>
              </div>
            </div>
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
              <div>
                <img src="./assets/img/icons/solid/push-cart.svg" class="svg-inject icon-svg icon-svg-sm solid-mono text-navy me-4" alt="" />
              </div>
              <div>
                <h4 class="mb-1">30 Days Return</h4>
                <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio sem.</p>
              </div>
            </div>
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
              <div>
                <img src="./assets/img/icons/solid/verify.svg" class="svg-inject icon-svg icon-svg-sm solid-mono text-navy me-4" alt="" />
              </div>
              <div>
                <h4 class="mb-1">2-Years Warranty</h4>
                <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio sem.</p>
              </div>
            </div>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
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
  var a = document.getElementById("review");
  var b = document.getElementById("wreview");

  a.addEventListener("click", function () {
    b.classList.toggle("invisible");
  });
</script>
</body>

</html>