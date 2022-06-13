 <?php
include("connection.php"); 
 
$email_get = $_GET['email'];
$user_details = mysqli_query($conn,"SELECT * FROM user_details where email = '$email_get'");
$details= mysqli_fetch_array($user_details);
$query= mysqli_query($conn,"SELECT * FROM city");
if(isset($_POST['submit'])){
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$street = $_POST['street'];
$zip_code = $_POST['zip_code'];
$city = $_POST['city'];
$sql = "UPDATE user_details SET lastname='$lastname', firstname='$firstname',email='$email',street='$street',zip_code='$zip_code',city='$city' where email='$email'";
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
<h3 class="mx-auto col-lg-8 text-center">Edit address book</h3>
<div class="container">
<form class="mx-auto col-lg-8" action="edit_user.php" method="POST">
<div class="form-group">
<label">LastName :</label>
<input type="name" name="lastname" class="form-control" placeholder="Enter your last name" value="'.$details["lastname"].'" />
</div>
<div class="form-group">
<label>FirstName :</label>
<input type="name" name="firstname" class="form-control" placeholder="Enter your first name" value="'.$details["firstname"].'" />
</div>

<div class="form-group">
<label">Email :</label>
<input type="email" name="email" class="form-control" placeholder="Enter your email" value="'.$details["email"].'" />
</div>

<div class="form-group">
<label>Street :</label>
<input type="text" name="street" class="form-control" placeholder="Enter your street" value="'.$details["street"].'" />
</div>

<div class="form-group">
<label>Zip-code</label>
<input type="number" name="zip_code" class="form-control" placeholder="Enter your zip-code" value="'.$details["zip_code"].'" />
</div>

<div class="form-group">
<label>City</label>
<input type="text" name="city" class="form-control" placeholder="Enter your city" value="'.$details["city"].'" />

 
</div>
<input value="Submit" type="submit" name="submit" class="btn btn-primary" />
</form>
</div>
</body>
</html>';
?>