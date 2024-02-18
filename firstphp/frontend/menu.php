<!DOCTYPE html>
<html lang=”en”>
<head>
 <meta charset=”UTF-8”>
 <meta name=”viewport” content=”width=device-width, initialscale=1.0”>
 <title>Menus </title>
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
 <li class=”nav-item active”>
 <a class=”nav-link” href=”menus.php”><strong>
Menus </strong></a>
 </li>
 <li class=”nav-item”>
 <a class=”nav-link”
href=”contactus.php”><strong> Contact Us </strong></a>
 </li>
 <li class=”nav-item”>
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
 <h1 class=”display-4”><strong> Our Menus </strong> </h1>
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
 background-image: url(‘image/menus.jpg’); /*Path for
background image */
 background-size: cover;
 background-position: center;
 color: #fff; /* Text color for the banner */
 height: 70vh; /* screen height */
 }
 </style>
 <!—Scrolling Menus Content →
 <section class=”container mt-4”>
 <h1>Our Menus</h1>
 <div id=”menuCarousel” class=”carousel slide” dataride=”carousel”>
 <div class=”carousel-inner”>
 <!—Menu Items 1-3 →
 <div class=”carousel-item active”>
 <div class=”row”>
 <div class=”col-md-4”>
 <div class=”card”>
 <img src=”idli.jpg” class=”card-imgtop” >
 <div class=”card-body”>
 <h5 class=”card-title”>Idli
Sambar</h5>
 <p class=”card-text”><strong>
Price</strong>: 30 RS</p>
 </div>
 </div>
 </div>
 <div class=”col-md-4”>
 <div class=”card”>
 <img src=”dosa.jpg” class=”card-imgtop” >
 <div class=”card-body”>
 <h5 class=”card-title”>Dosa
Chutney</h5>
 <p class=”card-text”><strong>
Price</strong>: 70 RS</p>
 </div>
 </div>
 </div>
<div class=”col-md-4”>
 <div class=”card”>
 <img src=”vada.jpg” class=”card-imgtop” >
 <div class=”card-body”>
 <h5 class=”card-title”>Vada</h5>
 <p class=”card-text”><strong>
Price</strong>: 20 RS</p>
 </div>
 </div>
 </div>
 </div>
 </div>
 <!—Menu Items 4-6 →
 <div class=”carousel-item”>
 <div class=”row”>
 <div class=”col-md-4”>
 <div class=”card”>
 <img src=”chickenbiriyani.jpg”
class=”card-img-top” >
<div class=”card-body”>
 <h5 class=”card-title”>Chicken
Biriyani</h5>
 <p class=”cardtext”>Price</strong>: 220 RS</p>
 </div>
 </div>
 </div>
<div class=”col-md-4”>
 <div class=”card”>
 <img src=”eggbiriyani.jpg”
class=”card-img-top” >
 <div class=”card-body”>
 <h5 class=”card-title”>Egg
Biriyani</h5>
 <p class=”cardtext”>Price</strong>: 180 RS</p>
 </div>
 </div>
 </div>
<div class=”col-md-4”>
 <div class=”card”>
 <img src=”vegbiriyani.jpg”
class=”card-img-top” >
 <div class=”card-body”>
 <h5 class=”card-title”>Veg
Biriyani</h5>
 <p class=”cardtext”>Price</strong>: 120 RS</p>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 <!—Controls (Optional) →
 <a class=”carousel-control-prev” href=”#menuCarousel”
role=”button” data-slide=”prev”>
 <span class=”carousel-control-prev-icon” ariahidden=”true”></span>
 <span class=”sr-only”>Previous</span>
 </a>
 <a class=”carousel-control-next” href=”#menuCarousel”
role=”button” data-slide=”next”>
<span class=”carousel-control-next-icon” ariahidden=”true”></span>
 <span class=”sr-only”>Next</span>
 </a>
 </div>
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
10px; margin-top: 30px;”> <!—Adjust the padding to set the
desired height →
 <p>&copy; Copy © Powered by Saras. All rights reserved</p>
 </footer>
</body>
</html>