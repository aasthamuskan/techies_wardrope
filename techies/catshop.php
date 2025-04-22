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
              <li class="nav-item">
                <a class="nav-link position-relative d-flex flex-row align-items-center" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-cart">
                  <i class="uil uil-shopping-cart"></i>
                  <span class="badge badge-cart bg-primary">3</span>
                </a>
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
  <div class="content-wrapper">
   
    <!-- /header -->
    <section class="wrapper bg-gray">
      <div class="container py-12 py-md-16 text-center">
        <div class="row">
          <div class="col-lg-10 col-xxl-8 mx-auto">
            <h1 class="display-1 mb-3">Shop Layout</h1>
            <p class="lead mb-1">Style for every occasion—wear it, love it, return it.</p>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container py-14 py-md-16">
        <div class="row align-items-center mb-10 position-relative zindex-1">
          <div class="col-md-8 col-lg-9 col-xl-8 col-xxl-7 pe-xl-20">
            <h2 class="display-6">New Arrivals</h2>
            <nav class="d-inline-block" aria-label="breadcrumb">
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shop</li>
              </ol>
            </nav>
            <!-- /nav -->
          </div>
          <!--/column -->
          <div class="col-md-4 col-lg-3 ms-md-auto text-md-end mt-5 mt-md-0">
            <div class="form-select-wrapper">
              <select class="form-select">
                <option value="popularity">Sort by popularity</option>
                <option value="rating">Sort by average rating</option>
                <option value="newness">Sort by newness</option>
                <option value="price: low to high">Sort by price: low to high</option>
                <option value="price: high to low">Sort by price: high to low</option>
              </select>
            </div>
            <!--/.form-select-wrapper -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <div class="grid grid-view projects-masonry shop mb-13">
          <div class="row gx-md-8 gy-10 gy-md-13 isotope">
           
<?php

$id1 = $_GET['catid1'];
$sql = "SELECT * FROM `shop` WHERE collection_id = $id1";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result)) {
    $id4 = $row['shopid'];
    echo '
    <div class="project item col-md-6 col-xl-4 mt-7">
        <figure class="rounded mb-6 h-25">
            <img src="./image/' . $row['collection_image'] . '" srcset="./image/' . $row['collection_image'] . ' 2x" alt="" />
            <a class="item-like" href="#" data-bs-toggle="white-tooltip" title="Add to wishlist"><i class="uil uil-heart"></i></a>
            <a class="item-view" href="#" data-bs-toggle="white-tooltip" title="Quick view"><i class="uil uil-eye"></i></a>
            <a href="payment.php?catid3='.$id4.'" class="item-cart"><i class="uil uil-shopping-bag"></i> Buy Now</a>';
    
    // Display "Sale!" badge if shopid > 59
    if ($row['shopid'] >= 59 && $row['shopid']<=68) {
        echo '
        <span class="avatar bg-pink text-white w-10 h-10 position-absolute text-uppercase fs-13" style="top: 1rem; left: 1rem;">
            <span>Sale!</span>
        </span>';
    }

    echo '
        </figure>
        <div class="post-header">
            <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                <span class="ratings five"></span>
            </div>
            <h2 class="post-title h3 fs-22">
                <a href="productpage.php?catid3=' . $id4 . '" class="link-dark">
                    ' . $row['collection_name'] . '
                </a>
            </h2>
            <p class="price">
                <del><span class="amount"> ₹' . $row['oldprice'] . '.00</span></del> 
                <ins><span class="amount"> ₹' . $row['Price'] . '.00</span></ins>
            </p>
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
        <!-- /.grid -->
        <nav class="d-flex justify-content-center" aria-label="pagination">
          <ul class="pagination">
            <li class="page-item disabled">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
              </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
              </a>
            </li>
          </ul>
          <!-- /.pagination -->
        </nav>
        <!-- /nav -->
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
                    <p class="price"><del><span class="amount">$${elem.oldprice}.00</span></del> <ins><span class="amount">$${elem.price}.00</span></ins></p>
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
                
                        <span class="ratings five"></span>
                    </div> 
                    <h2 class="post-title h3 fs-22"><a href="productpage.php?catid3=${elem.shopid}" class="link-dark">${elem.collection_name}</a></h2>
                    <p class="price"><del><span class="amount">$${elem.oldprice}.00</span></del> <ins><span class="amount">$${elem.price}.00</span></ins></p>
                </div>
            </div>`;
            });
            document.querySelector(".add").innerHTML = newuser;
        });
      </script>
</body>

</html>