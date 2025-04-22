<?php
include("customize/db.php");
require 'vendor/autoload.php';
use Razorpay\Api\Api;

header('Content-Type: application/json');

$api_key = 'rzp_test_LAXabxesVYicuW';
$api_secret = 'v3IDQI92OHJn8F34DSGIVgod';
$api = new Api($api_key, $api_secret);

session_start();

try {
 
    $data = json_decode(file_get_contents('php://input'), true);
    
    $payment_id = $data['razorpay_payment_id'];
    $order_id = $data['razorpay_order_id'];
    $signature = $data['razorpay_signature'];

 
    $attributes = array(
        'razorpay_order_id' => $order_id,
        'razorpay_payment_id' => $payment_id,
        'razorpay_signature' => $signature
    );
    
    $api->utility->verifyPaymentSignature($attributes);


    if (isset($_SESSION['checkout_data'])) {
        $checkout_data = $_SESSION['checkout_data'];
        
   
        $current_date = date('Y-m-d');
        
        $stmt = $conn->prepare("INSERT INTO temp (order_id, name, lname, email, time, product_id, product_name, amount, payment_id, payment_status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $status = 'completed';
        $stmt->bind_param("sssssisdss", 
            $order_id,
            $checkout_data['first_name'],  
            $checkout_data['last_name'],   
            $checkout_data['email'],
            $current_date,                 
            $checkout_data['product_id'],
            $checkout_data['product_name'],
            $checkout_data['amount'],
            $payment_id,
            $status
        );
        
        if ($stmt->execute()) {
            unset($_SESSION['checkout_data']);
            echo json_encode(['status' => 'success', 'message' => 'Payment verified and order recorded']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to record order: ' . mysqli_error($conn)]);
        }
        $stmt->close();
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Session data not found']);
    }
    
} catch (Exception $e) {
    echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
}

$conn->close();
?>