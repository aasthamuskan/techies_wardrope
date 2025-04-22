<?php
session_start();
include("customize/db.php");
require 'vendor/autoload.php';
use Razorpay\Api\Api;

$api_key = 'rzp_test_LAXabxesVYicuW';
$api_secret = 'v3IDQI92OHJn8F34DSGIVgod';
$api = new Api($api_key, $api_secret);


$id = filter_input(INPUT_GET, 'catid3', FILTER_VALIDATE_INT) ?: 0;

$error_message = null;
$product = null;

try {

    if (!$conn) {
        throw new Exception("Database connection failed: " . mysqli_connect_error());
    }

    
    $stmt = $conn->prepare("SELECT * FROM `shop` WHERE shopid = ?");
    if (!$stmt) {
        throw new Exception("Prepare failed: " . $conn->error);
    }
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $product = $result->fetch_assoc();
    $stmt->close();

    if (!$product && $id > 0) {
        $error_message = "Product not found with ID: $id";
    }
} catch (Exception $e) {
    $error_message = "Error: " . $e->getMessage();
}


$cart = $product ? [[
    'name' => $product['collection_name'],
    'price' => (float) $product['Price'],
    'image' => $product['collection_image'],
    'quantity' => 1
]] : [];

$subtotal = $product ? array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart)) : 0;
$discount = $subtotal * 0.05;
$shipping = 10.00;
$grand_total = $subtotal - $discount + $shipping;
$amount_in_paise = (int)($grand_total * 100);


$order_id = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
  
        $first_name = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
        $last_name = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

        if (!$first_name || !$last_name || !$email) {
            throw new Exception("Please fill all required fields correctly");
        }

        $orderData = [
            'amount' => $amount_in_paise,
            'currency' => 'INR',
            'payment_capture' => 1
        ];
        $order = $api->order->create($orderData);
        $order_id = $order['id'];
        
        $_SESSION['checkout_data'] = [
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email,
            'product_id' => $id,
            'product_name' => $product ? $product['collection_name'] : '',
            'amount' => $grand_total,
            'order_id' => $order_id
        ];
        
    } catch (Exception $e) {
        $error_message = "Failed to create order: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechiesWardrobe</title>
    <link rel="shortcut icon" href="./assets/img/favicon.png">
    <link rel="stylesheet" href="./assets/css/plugins.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>
    <div class="content-wrapper">
        <section class="wrapper bg-gray">
            <div class="container py-3 py-md-5">
                <nav class="d-inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="catshop.php?catid1=1">Shop</a></li>
                       
                        <li class="breadcrumb-item active text-muted" aria-current="page">Checkout</li>
                    </ol>
                </nav>
            </div>
        </section>
        
        <section class="wrapper bg-light">
            <div class="container pt-12 pt-md-14 pb-14 pb-md-16">
                <?php if ($error_message): ?>
                    <div class="alert alert-danger"><?php echo htmlspecialchars($error_message); ?></div>
                <?php endif; ?>
                <div class="row gx-md-8 gx-xl-12 gy-12">
                    <div class="col-lg-8">
                        <div class="alert alert-blue alert-icon mb-6" role="alert">
                            <i class="uil uil-exclamation-circle"></i> Already have an account? 
                            <a href="#" data-bs-target="#modal-signin" data-bs-toggle="modal" data-bs-dismiss="modal" class="alert-link hover">Sign in</a> 
                            for faster checkout experience.
                        </div>
                        <h3 class="mb-4">Billing Address</h3>
                        <form class="needs-validation" method="POST" novalidate>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="firstName" name="firstName" 
                                               placeholder="First name" value="<?php echo htmlspecialchars($_POST['firstName'] ?? ''); ?>" required>
                                        <label for="firstName">First name</label>
                                        <div class="invalid-feedback">Valid first name is required.</div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="lastName" name="lastName" 
                                               placeholder="Last name" value="<?php echo htmlspecialchars($_POST['lastName'] ?? ''); ?>" required>
                                        <label for="lastName">Last name</label>
                                        <div class="invalid-feedback">Valid last name is required.</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" 
                                               placeholder="you@example.com" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" required>
                                        <label for="email">Email</label>
                                        <div class="invalid-feedback">Please enter a valid email address.</div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                    <div class="col-lg-4">
                        <h3 class="mb-4">Order Summary</h3>
                        <div class="shopping-cart mb-7">
                            <?php if ($product): ?>
                                <div class="shopping-cart-item d-flex justify-content-between mb-4">
                                    <div class="d-flex flex-row align-items-center">
                                        <figure class="rounded w-17">
                                            <img src="./image/<?php echo htmlspecialchars($product['collection_image']); ?>" 
                                                 alt="<?php echo htmlspecialchars($product['collection_name']); ?>">
                                        </figure>
                                        <div class="w-100 ms-4">
                                            <h3 class="post-title h6 lh-xs mb-1">
                                                <a href="#" class="link-dark"><?php echo htmlspecialchars($product['collection_name']); ?></a>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="ms-2 d-flex align-items-center">
                                        <p class="price fs-sm">$<?php echo number_format($product['Price'], 2); ?></p>
                                    </div>
                                </div>
                            <?php else: ?>
                                <p class="text-danger">Product not found.</p>
                            <?php endif; ?>
                        </div>

                        <hr class="my-4">
                        <div class="table-responsive">
                            <table class="table table-order">
                                <tbody>
                                    <tr>
                                        <td class="ps-0"><strong>Subtotal</strong></td>
                                        <td class="pe-0 text-end">$<?php echo number_format($subtotal, 2); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0"><strong>Discount (5%)</strong></td>
                                        <td class="pe-0 text-end text-red">-$<?php echo number_format($discount, 2); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0"><strong>Shipping</strong></td>
                                        <td class="pe-0 text-end">$<?php echo number_format($shipping, 2); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0"><strong>Grand Total</strong></td>
                                        <td class="pe-0 text-end fw-bold">$<?php echo number_format($grand_total, 2); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <button id="placeOrderBtn" class="btn btn-primary rounded w-100 mt-4">Place Order</button>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/theme.js"></script>
    <script>
        document.getElementById("placeOrderBtn").addEventListener("click", function(e) {
            e.preventDefault();
            const form = document.querySelector("form");
            if (!form.checkValidity()) {
                form.classList.add("was-validated");
                return;
            }

            fetch(window.location.href, {
                method: "POST",
                body: new FormData(form)
            }).then(response => {
                if (!response.ok) throw new Error('Network response was not ok');
                return response.text();
            }).then(() => {
                <?php if (isset($order_id)): ?>
                    const options = {
                        key: "<?php echo $api_key; ?>",
                        amount: <?php echo $amount_in_paise; ?>,
                        currency: "INR",
                        name: "Your Store",
                        description: "Purchase",
                        order_id: "<?php echo $order_id; ?>",
                        handler: function(response) {
                            fetch("verify_payment.php", {
                                method: "POST",
                                headers: { "Content-Type": "application/json" },
                                body: JSON.stringify({
                                    razorpay_payment_id: response.razorpay_payment_id,
                                    razorpay_order_id: response.razorpay_order_id,
                                    razorpay_signature: response.razorpay_signature
                                })
                            }).then(res => res.json()).then(data => {
                                if (data.status === 'success') {
                                    alert('Payment successful! Order has been recorded.');
                                    window.location.href = 'thank_you.php';
                                } else {
                                    alert('Payment verification failed: ' + data.message);
                                }
                            }).catch(err => {
                                alert('Error verifying payment: ' + err.message);
                            });
                        },
                        prefill: {
                            name: document.getElementById("firstName").value + " " + document.getElementById("lastName").value,
                            email: document.getElementById("email").value,
                            contact: "1234567890"
                        },
                        theme: { color: "#3399cc" }
                    };
                    const rzp1 = new Razorpay(options);
                    rzp1.on('payment.failed', function(response) {
                        alert('Payment failed: ' + response.error.description);
                    });
                    rzp1.open();
                <?php else: ?>
                    form.submit();
                <?php endif; ?>
            }).catch(error => {
                alert('An error occurred: ' + error.message);
            });
        });
    </script>
</body>
</html>