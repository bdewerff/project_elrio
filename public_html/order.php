<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Order</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/yeti/bootstrap.min.css">
</head>
<body>

<?php include 'navigation.php'; ?>

			<br />

<div class="container">
<h1>Order</h1>
<form>
    First Name:<br>
    <input type="text" name="firstname"><br>
    Last Name:<br>
    <input type="text" name="lastname"><br>
    Phone Number:<br>
    <input type="text" name="phonenumber"><br>
    Address:<br>
    <input type="text" name="address"><br>
    Item:<br>
    <select name="item">
        <option value=" "> </option>
        <option value="tacoSalad">Taco Salad</option>
        <option value="grilledchickenSalad">Grilled Chicken Salad</option>
        <option value="fishtacos">Fish Tacos</option>
        <option value="seafoodchimichanga">Seafood Chimichanga</option>
        <option value="fajitas">Fajitas</option>
        <option value="quesadilla">Quesadillas</option>
        <option value="chimichanga">Chimichanga</option>
        <option value="burrito">Burrito</option>
        <option value="steakandBeans">Steak and Beans</option>
        <option value="tacos">Tacos</option>
        <option value="cheeseburger">Cheeseburger</option>
        <option value="chickenstrips">Chicken Strips</option>
    </select>
</form>
<br>
<button type="button" class="btn btn-primary">Submit</button>
<?php include 'footer.php'; ?>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" 
crossorigin="anonymous"></script>
</body>
</html>