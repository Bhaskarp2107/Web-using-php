<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" &&
isset($_POST["submit"])) {
 $items = $_POST["item"];
 $quantities = $_POST["quantity"];
 // Define menu items and prices
 $menu = [
 "burger" => 5.99,
 "pizza" => 8.99,
 "sandwich" =>6.99
 // Add more menu items and prices here
 ];
 $total_price = 0;
 // Loop through selected items and calculate the total price
 for ($i = 0; $i < count($items); $i++) {
    $item = $items[$i];
    $quantity = $quantities[$i];
 
       if (isset($menu[$item])) {
        $price = $menu[$item];
        $item_total = $price * $quantity;
        $total_price += $item_total;
        $total_price = $total_price+$item_total;
        echo "<p>Item: " . ucfirst($item) . "</p>";
        echo "<p>Quantity: $quantity</p>";
        echo "<p>Price per item: $" .
        number_format($price,2) . "</p>";
        echo "<p>Total for this item: $" .
        number_format($item_total, 2) . "</p>";
        echo "<hr>";
    }
 }
 echo "<h2>Total Price: $" . number_format($total_price,2) . "</h2>";
} else {
 echo "Invalid request.";
}
?>