<!DOCTYPE html>
<html lang=”en”>
<head>
 <meta charset=”UTF-8”>
 <meta name=”viewport” content=”width=device-width, initialscale=1.0”>
 <title>Order Now</title>
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
 <!—Banner Section →
 <!—Full-Screen Banner Section →
 <div class=”jumbotron jumbotron-fluid bg-banner text-center
d-flex align-items-center”>
 <div class=”container”>
 <h1 class=”display-4”><strong> Order Now </strong> </h1>
 </div>
 </div>
 <!—Add Bootstrap JS and jQuery Scripts →
 <script src=”https://code.jquery.com/jquery3.5.1.slim.min.js”></script>
 <script
src=”https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/
popper.min.js”></script>
 <script
src=”https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootst
rap.min.js”></script>
 <!—Add Custom CSS →
 <style>
 .bg-banner {
 background-image: url(‘image/ordernow.jpg’); /*Path
for background image */
 background-size: cover;
 background-position: center;
 color: #fff; /* Text color for the banner */
 height: 70vh; /* screen height */
 }
 </style>
 <!—Order Now Content →
 <section class=”container mt-4”>
 <h1>Order Now</h1>
 <p>
 You can now place your order for delivery or pickup.
Please select the items you’d like to order and proceed to the
checkout.
 </p>
 <!—Order Form (Sample) →
 <form action=”generatebill.php” method=”post”>
 <div class=”form-group”>
 <label for=”item”>Select Menu Item</label>
 <select class=”form-control” id=”item”
name=”item”> <!—Add name attribute →

 <option>Select here</option>
<option value=”30”>Idli Sambar</option>
 <option value=”70”>Dosa Chutney</option>
 <option value=”20”>Vada</option>
 <option value=”220”>Chicken Biriyani</option>
 <option value=”180”>Egg Biriyani</option>
 <option value=”120”>Veg Biriyani</option>

 </select>
 </div>

 <div class=”form-group”>
 <label for=”quantity”>Quantity</label>
 <input type=”number” class=”form-control”
id=”quantity” name=”quantity”> <!—Add name attribute →
 </div>

 <button type=”submit” class=”btn btn-primary”>View
Bill</button>
 </form>
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
 <footer class=”bg-dark text-white text-center”
style=”padding: 10px; margin-top: 30px;”> <!—Adjust the padding
to set the desired height →
 <p> Copy © Powered by Saras. All rights reserved</p>
 </footer>
</body>
</html>