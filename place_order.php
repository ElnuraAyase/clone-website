<?php
include 'config.php';

//  user is logged in, and you have their user_id
$user_id = 1
// Example: Add a new order
$sql = "INSERT INTO orders (user_id) VALUES ($user_id)";
if ($conn->query($sql) === TRUE) {
    $order_id = $conn->insert_id;
    1

    // Example: Add products to the order
    $product_id_1 = 1;
    $quantity_1 = 2;

    $product_id_2 = 2;
    $quantity_2 = 1;

    $sql = "INSERT INTO order_details (order_id, product_id, quantity, price) VALUES
            ($order_id, $product_id_1, $quantity_1, (SELECT price FROM products WHERE product_id = $product_id_1)),
            ($order_id, $product_id_2, $quantity_2, (SELECT price FROM products WHERE product_id = $product_id_2))";

    if ($conn->query($sql) === TRUE) {
        echo "Order placed successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
