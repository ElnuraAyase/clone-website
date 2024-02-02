<?php
include 'config.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Product ID: " . $row["product_id"]. " - Name: " . $row["product_name"]. " - Price: $" . $row["price"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
