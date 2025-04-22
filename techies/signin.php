<?php
session_start();
include("customize/db.php");

$email = $password = "";
$error = $success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email    = trim($_POST["email"]);
    $password = $_POST["password"];

   
    if (empty($email) || empty($password)) {
        $error = "Please fill in all fields.";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format.";
    }
    else {
       
        $stmt = $conn->prepare("SELECT name, email, password FROM user_info WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows == 1) {
            $stmt->bind_result($db_name, $db_email, $db_password);
            $stmt->fetch();

         
            if ($password === $db_password) {
                $_SESSION["loggedin"] = true;
                $_SESSION["email"] = $db_email;
                $_SESSION["name"] = $db_name;
                $success = "Login successful! Redirecting...";
                header("refresh:1;url=home.php"); 
                exit();
            } else {
                $error = "Invalid password.";
            }
        } else {
            $error = "No account found with that email.";
        }
        $stmt->close();
    }
    $conn->close();
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
    <title>Sign In - Techies Wardrobe</title>
    <link rel="shortcut icon" href="./assets/img/favicon.png">
    <link rel="stylesheet" href="./assets/css/plugins.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <style>
        #he {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        #logo {
            height: 100px;
            width: 150px;
        }
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
                                    <a class="nav-link dropdown-toggle custom-hover" href="home.php">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle custom-hover" href="#category">Category</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle custom-hover" href="category.php?catid=1">Mens</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle custom-hover" href="category.php?catid=2">Women</a>
                                </li>
                                <li class="nav-item dropdown dropdown-mega">
                                    <a class="nav-link dropdown-toggle custom-hover" href="category.php?catid=3">Kids</a>
                                </li>
                                <li class="nav-item dropdown dropdown-mega">
                                    <a class="nav-link dropdown-toggle custom-hover" href="contact.php">Contact</a>
                                </li>
                            </ul>
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar-other w-100 d-flex ms-auto">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-search"><i class="uil uil-search"></i></a></li>
                            <li class="nav-item">
                                <a class="nav-link position-relative d-flex flex-row align-items-center" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-cart">
                                    <i class="uil uil-shopping-cart"></i>
                                    <span class="badge badge-cart bg-primary" id="counts">3</span>
                                </a>
                            </li>
                            <li class="nav-item d-lg-none">
                                <button class="hamburger offcanvas-nav-btn"><span></span></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- [Your existing offcanvas sections remain unchanged] -->
        </header>

        <section class="wrapper bg-dark text-white">
            <div class="container pt-18 pt-md-20 pb-21 pb-md-21 text-center">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h1 class="display-1 text-white mb-3">Sign In</h1>
                        <nav class="d-inline-block" aria-label="breadcrumb">
                            <ol class="breadcrumb text-white">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Sign In</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="wrapper bg-light">
            <div class="container pb-14 pb-md-16">
                <div class="row">
                    <div class="col mt-n19">
                        <div class="card shadow-lg">
                            <div class="row gx-0 text-center">
                                <div class="col-lg-6 image-wrapper bg-image bg-cover rounded-top rounded-lg-start d-none d-md-block" data-image-src="./assets/img/photos/tm3.jpg"></div>
                                <div class="col-lg-6">
                                    <div class="p-10 p-md-11 p-lg-13">
                                        <h2 class="mb-3 text-start">Welcome Back</h2>
                                        <p class="lead mb-6 text-start">Fill your email and password to sign in.</p>
                                        
                                        <?php
                                        if (!empty($error)) {
                                            echo '<div class="alert alert-danger">' . $error . '</div>';
                                        }
                                        if (!empty($success)) {
                                            echo '<div class="alert alert-success">' . $success . '</div>';
                                        }
                                        ?>

                                        <form class="text-start mb-3" action="signin.php" method="post">
                                            <div class="form-floating mb-4">
                                                <input type="email" class="form-control" placeholder="Email" id="loginEmail" name="email" value="<?php echo htmlspecialchars($email); ?>">
                                                <label for="loginEmail">Email</label>
                                            </div>
                                            <div class="form-floating password-field mb-4">
                                                <input type="password" class="form-control" placeholder="Password" id="loginPassword" name="password">
                                                <span class="password-toggle"><i class="uil uil-eye"></i></span>
                                                <label for="loginPassword">Password</label>
                                            </div>
                                            <button type="submit" class="btn btn-primary rounded-pill btn-login w-100 mb-2">Sign In</button>
                                        </form>
                                        <p class="mb-0">Don't have an account? <a href="signup.php" class="hover">Sign up?</a> <a href="adminL.php" class="hover">Admin</a></p>
                                        <div class="divider-icon my-4">or</div>
                                        <nav class="nav social justify-content-center text-center">
                                            <a href="#" class="btn btn-circle btn-sm btn-google"><i class="uil uil-google"></i></a>
                                            <a href="#" class="btn btn-circle btn-sm btn-facebook-f"><i class="uil uil-facebook-f"></i></a>
                                            <a href="#" class="btn btn-circle btn-sm btn-twitter"><i class="uil uil-twitter"></i></a>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
                        </div>
                    </div>
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
                    </div>
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
                    </div>
                    <div class="col-md-4 col-lg-2">
                        <div class="widget">
                            <h4 class="widget-title mb-3 text-white">Get in Touch</h4>
                            <address>Lovely Professional University,Jalandhar,<br>Punjab</address>
                            <a href="mailto:first.last@email.com">Harshitrajput7291@gmai.com</a><br /> +91 72919-15160
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/theme.js"></script>
</body>
</html>