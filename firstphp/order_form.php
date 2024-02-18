<!DOCTYPE html>
<html>
<head>
 <title>Restaurant Order</title>
</head>
<body>
 <h1>Restaurant Menu</h1>
 <form action="process_order.php" method="post">
    <label for="item">Menu Item:</label>
    <select name="item[]" id="item" >
    <option value="">Select here</option>
 <option value="burger">Burger</option>
 <option value="pizza">Pizza</option>
 <option value="sandwich">Sandwich</option>
 <!-- Add more menu items here -->
 </select>
 <br>
 <label for="quantity">Quantity:</label>
 <input type="number" name="quantity[]" id="quantity" min="1" value="1">
 <br>
 <input type="submit" name="submit" value="PlaceOrder">

 </form>
</body>
</html>