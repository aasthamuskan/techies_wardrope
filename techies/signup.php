<?php
include("customize/db.php");

$name = $email = $password = $cpassword = "";
$error = $success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = trim($_POST["name"]);
    $email    = trim($_POST["email"]);
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

 
    if (empty($name) || empty($email) || empty($password) || empty($cpassword)) {
        $error = "Please fill in all fields.";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format.";
    }
    elseif ($password !== $cpassword) {
        $error = "Passwords do not match.";
    }
    else {
      
        $rawPassword = $password;

 
        $check = $conn->prepare("SELECT email FROM user_info WHERE email = ?");
        $check->bind_param("s", $email);
        $check->execute();
        $check->store_result();

        if ($check->num_rows > 0) {
            $error = "Email already registered.";
        }
        else {
        
            $stmt = $conn->prepare("INSERT INTO user_info (name, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $name, $email, $rawPassword);

            if ($stmt->execute()) {
                $success = "User registered successfully!";
                $name = $email = $password = $cpassword = ""; 
            } else {
                $error = "Error: " . $stmt->error;
            }
            $stmt->close();
        }
        $check->close();
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
        <!-- [Your existing header section remains unchanged] -->
        
        <section class="wrapper bg-dark text-white">
            <div class="container pt-18 pt-md-20 pb-21 pb-md-21 text-center">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h1 class="display-1 text-white mb-3">Sign Up</h1>
                        <nav class="d-inline-block" aria-label="breadcrumb">
                            <ol class="breadcrumb text-white">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Sign Up</li>
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
                                        <h2 class="mb-3 text-start">Sign up to Sandbox</h2>
                                        <p class="lead mb-6 text-start">Registration takes less than a minute.</p>
                                        
                                        <?php
                                        if (!empty($error)) {
                                            echo '<div class="alert alert-danger">' . $error . '</div>';
                                        }
                                        if (!empty($success)) {
                                            echo '<div class="alert alert-success">' . $success . '</div>';
                                        }
                                        ?>

                                        <form class="text-start mb-3" action="signup.php" method="post">
                                            <div class="form-floating mb-4">
                                                <input type="text" class="form-control" placeholder="Name" id="loginName" name="name" value="<?php echo htmlspecialchars($name); ?>">
                                                <label for="loginName">Name</label>
                                            </div>
                                            <div class="form-floating mb-4">
                                                <input type="email" class="form-control" placeholder="Email" id="loginEmail" name="email" value="<?php echo htmlspecialchars($email); ?>">
                                                <label for="loginEmail">Email</label>
                                            </div>
                                            <div class="form-floating password-field mb-4">
                                                <input type="password" class="form-control" placeholder="Password" id="loginPassword" name="password">
                                                <span class="password-toggle"><i class="uil uil-eye"></i></span>
                                                <label for="loginPassword">Password</label>
                                            </div>
                                            <div class="form-floating password-field mb-4">
                                                <input type="password" class="form-control" placeholder="Confirm Password" id="loginPasswordConfirm" name="cpassword">
                                                <span class="password-toggle"><i class="uil uil-eye"></i></span>
                                                <label for="loginPasswordConfirm">Confirm Password</label>
                                            </div>
                                            <button type="submit" class="btn btn-primary rounded-pill btn-login w-100 mb-2">Sign Up</button>
                                        </form>
                                        <p class="mb-0">Already have an account? <a href="./signin.php" class="hover">Sign in</a></p>
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
        
        <!-- [Your existing footer section remains unchanged] -->
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
