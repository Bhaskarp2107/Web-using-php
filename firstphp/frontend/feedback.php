<!DOCTYPE html>
<html lang=”en”>
<head>
 <meta charset=”UTF-8”>
 <meta name=”viewport” content=”width=device-width, initialscale=1.0”>
 <title>Feedback Form</title>
 <!—Add Bootstrap CSS Link →
 <link rel=”stylesheet”
href=”https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/boot
strap.min.css”>

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
 <li class=”nav-item”>
 <a class=”nav-link”
href=”ordernow.php”><strong> Order Now </strong></a>
 </li>
 <li class=”nav-item active”>
 <a class=”nav-link”
href=”feedbackform.php”><strong> Feedback </strong></a>
 </li>
 </ul>
 </div>
 </nav>
 <style>
 body {
 background-image: url(‘image/download.jpg’); /* Add
the path to your background image */
 background-size: cover;
 background-repeat: no-repeat;
 background-attachment: fixed;
 background-position: center center;
 }
 .container {
 background-color: rgb(255 255 255 / 44%); /*
Transparent white background for the container */
 border-radius: 10px;
 padding: 20px;
 margin-top: 20px;
 box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
 max-width: 500px
 }
 .form-control {
 border: 1px solid #ced4da;
 border-radius: 4px;
 }
 .btn-primary {
 background-color: #007bff;
 border: none;
 }
 .btn-primary:hover {
 background-color: #0056b3;
 }
 </style>
</head>
<body>
 <form action=”emailsms.php” method=”post”>
 <div class=”container”>
 <h1 class=”text-center”>Feedback Form</h1>

 <div class=”form-group”>
 <label for=”name”>Name</label>
 <input type=”text” class=”form-control” id=”name”
name=”name” required>
 </div>
 <div class=”form-group”>
 <label for=”email”>Email</label>
 <input type=”email” class=”form-control”
id=”email” name=”email” required>
 </div>
 <div class=”form-group”>
 <label for=”mobile”>Mobile</label>
 <input type=”mobile” class=”form-control”
id=”mobile” name=”mobile” required>
 </div>
 <div class=”form-group”>
 <label for=”message”>Feedback</label>
 <textarea class=”form-control” id=”message”
name=”message” rows=”5” required></textarea>
 </div>
 <button type=”submit” class=”btn btn-primary btnblock”>Submit</button>
 </form>

 </div>
 <!—Footer →
 <footer class=”bg-dark text-white text-center”
style=”padding: 10px; margin-top: 30px;”> <!—Adjust the padding
to set the desired height →
 <p> Copy © Powered by Saras. All rights reserved</p>
 </footer>
</body>
</html>