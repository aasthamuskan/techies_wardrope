<?php
require 'vendor/autoload.php';
use Razorpay\Api\Api;

$api_key = 'rzp_test_LAXabxesVYicuW';

$api_secret = 'v3IDQI92OHJn8F34DSGIVgod';
$api = new Api($api_key, $api_secret);

try {
    $orderData = [
        'amount' => 50000, 
        'currency' => 'INR',
        'payment_capture' => 1
    ];
    $order = $api->order->create($orderData);
    echo "Order created successfully! Order ID: " . $order['id'];
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>