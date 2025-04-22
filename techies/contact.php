<?php
include("customize/db.php");

$successMessage = "";
$errorMessage = "";

// CSRF token generation & session start
session_start();
if (empty($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Check CSRF Token
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['token']) {
        die("CSRF token validation failed.");
    }

    // Collect and sanitize input
    $name = trim($_POST["name"]);
    $lname = trim($_POST["surname"]);
    $email = trim($_POST["email"]);
    $department = trim($_POST["department"]);
    $ms = trim($_POST["message"]);

    // Validate required fields
    if (!empty($name) && !empty($lname) && !empty($email) && !empty($department) && !empty($ms)) {
        
        // Validate email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errorMessage = "Invalid email format!";
        } else {
            // Use prepared statements to prevent SQL injection
            $sql = "INSERT INTO `contact_data` (`fname`, `lname`, `email`, `Deparment`, `message`, `timestamp`) 
            VALUES (?, ?, ?, ?, ?, current_timestamp())";
    
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "sssss", $name, $lname, $email, $department, $ms);
            
            if (mysqli_stmt_execute($stmt)) {
                $successMessage = "Your message has been sent successfully!";
            } else {
                $errorMessage = "Database error: " . mysqli_error($conn);
            }

            mysqli_stmt_close($stmt);
        }
    } else {
        $errorMessage = "All fields are required!";
    }
}

mysqli_close($conn);
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

  <style>
        #logo { height: 100px; width: 150px; }
        .custom-hover:hover { border-bottom: 3px solid #296262; }
        #fig2 { height: 65vh; }
        .alert { padding: 15px; margin: 10px 0; border-radius: 5px; }
        .alert-success { background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .alert-danger { background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
    </style>

</head>

<body>
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
                  <a class="nav-link dropdown-toggle custom-hover" href="home.php#category" >Category</a>
                 
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
   
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
     
      <!-- /.offcanvas -->
      <div class="offcanvas offcanvas-top bg-light" id="offcanvas-search" data-bs-scroll="true">
        <div class="container d-flex flex-row py-6">
          <form class="search-form w-100">
            <input id="search-form" type="text" class="form-control" placeholder="Type keyword and hit enter">
          </form>
          <!-- /.search-form -->
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- /.container -->
      </div>
      <!-- /.offcanvas -->
    </header>
    <!-- /header -->
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-400 text-white" data-image-src="./assets/img/photos/bg3.jpg">
      <div class="container pt-17 pb-20 pt-md-19 pb-md-21 text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h1 class="display-1 mb-3 text-white">Get in Touch</h1>
            <nav class="d-inline-block" aria-label="breadcrumb">
              <ol class="breadcrumb text-white">
                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
              </ol>
            </nav>
            <!-- /nav -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light angled upper-end">
      <div class="container pb-11">
        <div class="row mb-14 mb-md-16">
          <div class="col-xl-10 mx-auto mt-n19">
            <div class="card">
              <div class="row gx-0">
                <div class="col-lg-6 align-self-stretch">
                  <div class="map map-full rounded-top rounded-lg-start">
                    <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4372.978275904641!2d75.70207607315807!3d31.255110500353906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a5ba2091e5db7%3A0x3b75965fba2b8f99!2sLovely%20Professional%20University!5e0!3m2!1sen!2sin!4v1711572481234!5m2!1sen!2sin" 
                    width="600" 
                    height="450" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                  </iframe>
                  
                  </div>
                  <!-- /.map -->
                </div>
                <!--/column -->
                <div class="col-lg-6">
                  <div class="p-10 p-md-11 p-lg-14">
                    <div class="d-flex flex-row">
                      <div>
                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                      </div>
                      <div class="align-self-start justify-content-start">
                        <h5 class="mb-1">Address</h5>
                        <address>Lovely Professional University, <br class="d-none d-md-block" />Jalandhar,Punjab</address>
                      </div>
                    </div>
                    <!--/div -->
                    <div class="d-flex flex-row">
                      <div>
                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                      </div>
                      <div>
                        <h5 class="mb-1">Phone</h5>
                        <p> (91)72919 15160 <br />(91)83830 68732</p>
                      </div>
                    </div>
                    <!--/div -->
                    <div class="d-flex flex-row">
                      <div>
                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                      </div>
                      <div>
                        <h5 class="mb-1">E-mail</h5>
                        <p class="mb-0"><a href="mailto:sandbox@email.com" class="link-body">Harshitrajput7291@gmai.com</a></p>
                       
                      </div>
                    </div>
                    <!--/div -->
                  </div>
                  <!--/div -->
                </div>
                <!--/column -->
              </div>
              <!--/.row -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      
        <!-- /.row -->
      </div>
      <section class="wrapper bg-light">
    <div class="container pb-11">
        <div class="row">
            <div class="col-xl-10 mx-auto">
                <h2 class="display-4 text-center">Drop Us a Line</h2>
                <p class="lead text-center mb-10">Have questions? We’re here to help!</p>

                <!-- Success/Error Messages -->
                <?php if (!empty($successMessage)): ?>
                    <div class="alert alert-success"><?php echo htmlspecialchars($successMessage); ?></div>
                <?php endif; ?>
                <?php if (!empty($errorMessage)): ?>
                    <div class="alert alert-danger"><?php echo htmlspecialchars($errorMessage); ?></div>
                <?php endif; ?>

                <!-- Contact Form -->
                <form class="contact-form" method="post" action="contact.php">
                    <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['token']); ?>">

                    <div class="row gx-4">
                        <div class="col-md-6">
                            <div class="form-floating mb-4">
                                <input type="text" name="name" class="form-control" placeholder="First Name" required>
                                <label>First Name *</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-4">
                                <input type="text" name="surname" class="form-control" placeholder="Last Name" required>
                                <label>Last Name *</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-4">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                                <label>Email *</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-select-wrapper mb-4">
                                <select class="form-select" name="department" required>
                                    <option selected disabled value="">Select a department</option>
                                    <option value="Sales">Sales</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Customer Support">Customer Support</option>
                                    <option value="Defective Piece">Defective Piece</option>
                                    <option value="Collaborations">Collaborations</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating mb-4">
                                <textarea name="message" class="form-control" placeholder="Your message" style="height: 150px" required></textarea>
                                <label>Message *</label>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="Send Message">
                            <p class="text-muted"><strong>*</strong> These fields are required.</p>
                        </div>
                    </div>
                </form>
                <!-- /form -->
            </div>
        </div>
    </div>
</section>
    <!-- /section -->
    <section class="wrapper image-wrapper bg-auto no-overlay bg-image text-center bg-map" data-image-src="./assets/img/map.png">
      <div class="container pt-0 pb-14 pt-md-16 pb-md-18">
        <div class="row">
          <div class="col-lg-9 col-xxl-8 mx-auto">
            <h3 class="display-4 mb-8 px-xl-12">Join 150+ happy customers who trust our fashion.<br> Shop now and upgrade your wardrobe!"

Would you like a more premium or streetwear vibe.</h3>
          </div>
          <!-- /.row -->
        </div>
        <!-- /column -->
        <div class="row">
          <div class="col-md-10 col-lg-9 col-xl-7 mx-auto">
            <div class="row align-items-center counter-wrapper gy-4 gy-md-0">
              <div class="col-md-4 text-center">
                <h3 class="counter counter-lg text-primary">150</h3>
                <p>Happy Customers</p>
              </div>
              <!--/column -->
              <div class="col-md-4 text-center">
                <h3 class="counter counter-lg text-primary">5</h3>
                <p>Stores</p>
              </div>
              <!--/column -->
              <div class="col-md-4 text-center">
                <h3 class="counter counter-lg text-primary">100+</h3>
                <p>Clothes</p>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
  </div>
  <!-- /.content-wrapper -->
  <!-- footer -->
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
</body>

</html>