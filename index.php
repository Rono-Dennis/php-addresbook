<?php
include("connection.php");
$query= mysqli_query($conn,"SELECT * FROM user_details");
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
<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header"> 
</div> 
</div>
</nav>
<div class="container">
<div class="mx-auto col-lg-10 pt-4">';
if(mysqli_num_rows($query) == 0){
echo '<span>No entry found</span>';
}
else{
echo '<table class="table">
<thead>
<tr class="active">
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Street</th>
<th>Zip-code</th>
<th>City</th>
<th>Edit</th>
</tr>
</thead>
<tbody>';
while($data= mysqli_fetch_array($query)){
echo '<tr class="active">
<td>'.$data["firstname"].'</td>
<td>'.$data["lastname"].'</td>
<td>'.$data["email"].'</td>
<td>'.$data["street"].'</td>
<td>'.$data["zip_code"].'</td>
<td>'.$data["city"].'</td>
<td><a href="edit_user.php?email='.$data["email"].'">Update</a></td></tr>';
}
echo '</tbody></table>';
}
echo '</div>
</div>
<div class="text-center"> 
<a class="navbar-brand" href="export_to_xml.php">XML Export</a> 
<a class="navbar-brand" href="export_to_json.php">JSON Export</a> 
<a class="navbar-brand" href="add_user.php">Add Data</a>
</div> 
</body>
</html>';
?>