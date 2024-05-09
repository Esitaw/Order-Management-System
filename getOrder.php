<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $order = $_GET["order"];
    $quantity = $_GET["quantity"];
    $cash = $_GET["cash"];

    $prices = [
        "pares" => 100,
        "chicken" => 120,
        "tapa" => 130
    ];
    $total_price = $prices[$order] * $quantity;

    $change = $cash - $total_price;

    echo "<h2>Order Details:</h2>";
    echo "Order: " . ucfirst($order) . "<br>";
    echo "Quantity: " . $quantity . "<br>";
    echo "Total Price: " .$total_price . "PHP<br>";
    echo "Cash Paid: " . $cash . " PHP<br>";
    echo "Change: " . $change . " PHP"; 
} else {
    echo "Error: Form not submitted.";
}
?>