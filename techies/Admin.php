<?php
include("customize/db.php");

$successMessage = "";
$errorMessage = "";


session_start();
if (empty($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['token']) {
        die("CSRF token validation failed.");
    }


    $collection_id = trim($_POST["name"]);
    $collection_name = trim($_POST["surname"]);
    $price = floatval($_POST["price"]);
    $oldprice = isset($_POST["oldprince"]) ? floatval($_POST["oldprince"]) : null;
    $description = trim($_POST["message"]);

    if (!empty($collection_id) && !empty($collection_name) && !empty($price) && !empty($description)) {
   
        if (isset($_FILES['collection_image']) && $_FILES['collection_image']['error'] === UPLOAD_ERR_OK) {
            $uploadDir = 'uploads/';
            $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
            $maxSize = 5 * 1024 * 1024; 

            if (!in_array($_FILES['collection_image']['type'], $allowedTypes)) {
                $errorMessage = "Invalid image type. Only JPG, PNG, and GIF are allowed.";
            } elseif ($_FILES['collection_image']['size'] > $maxSize) {
                $errorMessage = "Image size exceeds 5MB limit.";
            } else {
                $fileName = uniqid() . '_' . basename($_FILES['collection_image']['name']);
                $uploadFile = $uploadDir . $fileName;

              
                if (!file_exists($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                if (!move_uploaded_file($_FILES['collection_image']['tmp_name'], $uploadFile)) {
                    $errorMessage = "Failed to upload image.";
                }
            }
        } else {
            $errorMessage = "Image upload is required!";
        }

    
        if (empty($errorMessage)) {
        
            $sql = "INSERT INTO `shop` (`collection_id`, `collection_name`, `collection_image`, `price`, `oldprice`, `description`) 
                    VALUES (?, ?, ?, ?, ?, ?)";
    
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "sssdds", $collection_id, $collection_name, $uploadFile, $price, $oldprice, $description);
            
            if (mysqli_stmt_execute($stmt)) {
                $successMessage = "Shop item added successfully!";
           
                $_SESSION['token'] = bin2hex(random_bytes(32));
            } else {
                $errorMessage = "Database error: " . mysqli_error($conn);
            }

            mysqli_stmt_close($stmt);
        }
    } else {
        $errorMessage = "All required fields must be filled!";
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
    <title>Add Shop Item</title>
    <link rel="shortcut icon" href="./assets/img/favicon.png">
    <link rel="stylesheet" href="./assets/css/plugins.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/colors/leaf.css">
    <link rel="preload" href="./assets/css/fonts/urbanist.css" as="style" onload="this.rel='stylesheet'">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
        .custom-hover:hover {
            border-bottom: 3px solid #296262;
        }
        #fig2 {
            height: 65vh;
        }
        marquee {
            font-size: 24px;
            font-weight: 600;
            font-family: 'Arial', sans-serif;
            color: #2c3e50;
            background-color: #f5f6f5;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            white-space: nowrap;
        }
    </style>
</head>
<body>
    <header class="wrapper bg-soft-primary">
        <nav class="navbar navbar-expand-lg center-nav transparent position-absolute navbar-dark caret-none bg-primary">
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
                            <li class="nav-item dropdown dropdown-mega">
                                <a class="nav-link dropdown-toggle custom-hover" href="Shopdetail.php">ShopDetail</a>
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
            </div>
        </nav>
    </header>

    <div class="container mt-20">
        <?php
        if (!empty($successMessage)) {
            echo "<div class='alert alert-success'>$successMessage</div>";
        }
        if (!empty($errorMessage)) {
            echo "<div class='alert alert-danger'>$errorMessage</div>";
        }
        ?>
        <form class="contact-form" method="post" action="Admin.php" enctype="multipart/form-data">
            <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['token']); ?>">

            <div class="row gx-4">
                <div class="col-md-6">
                    <div class="form-floating mb-4">
                        <input type="text" name="name" class="form-control" placeholder="Collection ID" required>
                        <label>Collection ID *</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-4">
                        <input type="text" name="surname" class="form-control" placeholder="Collection Name" required>
                        <label>Collection Name *</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-4">
                        <input type="file" name="collection_image" class="form-control" accept="image/*" required>
                        <label>Collection Image *</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-4">
                        <input type="number" name="price" step="0.01" class="form-control" placeholder="Price" required>
                        <label>Price *</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-4">
                        <input type="number" name="oldprince" step="0.01" class="form-control" placeholder="Old Price">
                        <label>Old Price</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating mb-4">
                        <textarea name="message" class="form-control" placeholder="Cloth Description" style="height: 150px" required></textarea>
                        <label>Cloth Description *</label>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="Add Shop Item">
                    <p class="text-muted"><strong>*</strong> These fields are required.</p>
                </div>
            </div>
        </form>

        <marquee behavior="scroll" direction="left">
            collection_typeid=1, collection_name=Sweaters & layering |
            collection_typeid=4, collection_name=Formals |
            collection_typeid=5, collection_name=Traditional wear |
            collection_typeid=6, collection_name=Sports & ActiveWear |
            collection_typeid=7, collection_name=OuterWear |
            collection_typeid=8, collection_name=LPU Wears |
            collection_typeid=9, collection_name=Formals |
            collection_typeid=10, collection_name=Western Wear |
            collection_typeid=11, collection_name=Traditional Wear |
            collection_typeid=14, collection_name=Active Wears |
            collection_typeid=15, collection_name=Trendy Wears |
            collection_typeid=16, collection_name=LPU Wears |
            collection_typeid=17, collection_name=Night Wears |
            collection_typeid=18, collection_name=Everyday Wears |
            collection_typeid=19, collection_name=Occasion Wears |
            collection_typeid=20, collection_name=Active Wears |
            collection_typeid=21, collection_name=Playful Wears |
            collection_typeid=22, collection_name=Seasonal Wears
        </marquee>
    </div>

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/theme.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>