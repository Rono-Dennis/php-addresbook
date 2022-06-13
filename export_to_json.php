<?php
include("connection.php");
$sql=mysqli_query($conn,"select * from user_details");
while($row=mysqli_fetch_assoc($sql))
{
$lastname=$row['lastname'];
$firstname=$row['firstname'];
$email=$row['email'];
$street=$row['street'];
$zip_code=$row['zip_code'];
$city=$row["city"];
$posts[] = array('Lastname'=> $lastname, 'Firstname'=> $firstname, 'email'=> $email, 'street'=> $street, 'zip-code'=> $zip_code,'city'=> $city);
}
$response['address_book'] = $posts;

$fp = fopen('addressbook.json', 'w');
fwrite($fp, json_encode($response));
fclose($fp);
header("Location:index.php");
?>