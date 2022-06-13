<?php
include("connection.php"); 

if(isset($_POST['submit'])){
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$street = $_POST['street'];
$zip_code = $_POST['zip_code'];
$city = $_POST['city'];
$sql = "INSERT INTO user_details
 VALUES ('$lastname','$firstname','$email','$street','$zip_code','$city')";
mysqli_query($conn,$sql);
header("Location:index.php");
}
echo '<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Address Book</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<h3 class="mx-auto col-lg-6 pt-4 text-center">Entry in address book</h3>
<div class="container">
<form class="mx-auto col-lg-6 pt-2" action="add_user.php" method="POST">

<div class="form-group">
<label for="name">Last Name :</label>
<input type="name" name="lastname" class="form-control" placeholder="Enter your last name" />
</div>

<div class="form-group">
<label for="name">First Name :</label>
<input type="name" name="firstname" class="form-control" placeholder="Enter your first name" />
</div>

<div class="form-group">
<label for="email">Email :</label>
<input type="email" name="email" class="form-control" placeholder="Enter your email" />
</div>


<div class="form-group">
<label for="text">Street :</label>
<input type="text" name="street" class="form-control" placeholder="Enter your street" />
</div>


<div class="form-group">
<label for="number">Zip-code</label>
<input type="number" name="zip_code" class="form-control" placeholder="Enter your zip-code" />
</div>

<div class="form-group">
<label for="number">city</label>
<input type="text" name="city" class="form-control" placeholder="Enter your city" />
</div>


<div class="form-group"> 
<input value="Submit" type="submit" name="submit" class="btn btn-primary" />
</form>
</div>
</body>
</html>';

 
?>
