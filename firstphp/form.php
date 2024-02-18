<!DOCTYPE html>
<html>
<head>
 <title>PHP Web Form</title>
</head>
<body>
 <h1>Contact Us</h1>
 <form action="process_form.php" method="post">
 <label for="name">Name:</label>
 <input type="text" name="name" id="name"
required><br><br>
 <label for="email">Email:</label>
 <input type="email" name="email" id="email"
required><br><br>
 <label for="message">Message:</label><br>
 <textarea name="message" id="message" rows="5"
required></textarea><br><br>
 <input type="submit" value="Submit">
 </form>
</body>
</html>