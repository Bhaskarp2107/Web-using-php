<!DOCTYPE html>
<html lang=”en”>
<head>
 <meta charset=”UTF-8”>
 <meta name=”viewport” content=”width=device-width, initialscale=1.0”>
 <title>Order Bill</title>
 <!—Add Bootstrap CSS Link →
 <link rel=”stylesheet”
href=”https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/boot
strap.min.css”>
</head>
<body>
 <!—Navigation Bar →
 <nav class=”navbar navbar-expand-lg navbar-dark bg-dark”>
 <button class=”navbar-toggler” type=”button” datatoggle=”collapse” data-target=”#navbarNav” ariacontrols=”navbarNav” aria-expanded=”false” aria-label=”Toggle
navigation”>
 <span class=”navbar-toggler-icon”></span>
 </button>
 <div class=”collapse navbar-collapse” id=”navbarNav”>
 <ul class=”navbar-nav”>
 <li class=”nav-item”>
 <a class=”nav-link” href=”index.php”><strong>
Home </strong></a>
 </li>
 <li class=”nav-item”>
 <a class=”nav-link”
href=”aboutus.php”><strong> About Us </strong></a>
 </li>
 <li class=”nav-item”>
 <a class=”nav-link” href=”menus.php”><strong>
Menus </strong></a>
 </li>
 <li class=”nav-item”>
 <a class=”nav-link”
href=”contactus.php”><strong> Contact Us </strong></a>
 </li>
 <li class=”nav-item active”>
 <a class=”nav-link”
href=”ordernow.php”><strong> Order Now </strong></a>
 </li>
 <li class=”nav-item”>
 <a class=”nav-link”
href=”feedbackform.php”><strong> Feedback </strong></a>
 </li>
 </ul>
 </div>
 </nav>
 <!—Order Bill Content →
 <section class=”container mt-4”>
 <h3> Bill for the Order</h3>
 <?php
 if ($_SERVER[“REQUEST_METHOD”] == “POST”) {
 // Get the selected menu item and quantity
 $menuItem = $_POST[“item”];
 $quantity = $_POST[“quantity”];

 // Calculate the total price
 $totalPrice = $menuItem * $quantity;
 // Display the bill details
 echo “<p> <strong> Price of the Item: </strong>
$menuItem RS</p>”;
echo “<p> <strong> Quantity: </strong>
$quantity</p>”;
 echo “<p> <strong> Total Price: </strong> $totalPrice
RS</p>”;
 }

 else {
 echo “<p>No order details found.</p>”;
 }
 ?>
 </section>
 <!—Add Bootstrap JS and jQuery Scripts →
 <script src=”https://code.jquery.com/jquery3.5.1.slim.min.js”></script>
 <script
src=”https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/
popper.min.js”></script>
 <script
src=”https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootst
rap.min.js”></script>
<!—Footer →
<footer class=”bg-dark text-white text-center” style=”padding:
10px; margin-top: 400px;”> <!—Adjust the padding to set the
desired height →
 <p> Copy © Powered by Saras. All rights reserved</p>
 </footer>
</body>
</html>