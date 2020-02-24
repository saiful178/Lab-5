<?php

session_start();

?>

<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html

<?php
if(isset($_POST['submit']))
{
	$_query = "INSERT INTO 'academic_db'('Name', 'Email', 'Gender', 'password', 'Gender', 'Image') VALUES (:Name, :Email, :Gender, :password, :Gender, :Image)";
	$dns="mysql:host=localhost;dbname=academic_db";
	$username= "root";
	$password= "";
}
try
{
	$db = new PDO($dns, $username, $password);
	$statement = $db->prepare($_query);
}
catch(Exception $e)
{
	$error_message = $e -> getMessage();
	echo "<p>Error: $error_message</p>";
}

?>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "academic_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>