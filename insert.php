<?php
// include("dbconfig.php");



 
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "address_book";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

$sql1 = "UPDATE MyGuests SET firstname='Alfred', lastname='Schmidt' email='schmidt@example.com' WHERE id=3";
 


// if(isset($_POST['submit'])){
// $lastname = $_POST['lastname'];
// $firstname = $_POST['firstname'];
// $email = $_POST['email']; 
// $sql = "INSERT INTO myguests  
//  VALUES ('$lastname','$firstname','$email')";
// mysqli_query($conn,$sql);
// }

if(mysqli_query($conn, $sql)){
            echo "<h3>data stored successfully."
                . " Please browse your data"
                . " to view the updates</h3>";
  
        } else{
            echo "ERROR: Sorry $sql. "
                . mysqli_error($conn);
        }
         


// header("Location:index.php");
// } (lastname,lastname,email,street,zip_code,city)

// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com')";

// if (mysqli_query($conn, $sql)) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

mysqli_close($conn);







 
?>
