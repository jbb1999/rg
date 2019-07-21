<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "RG";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>






<!DOCTYPE html>
<html>
<head>



    <form action="http://localhost/new%20project/login.php">
        <input type="submit" value="gå til login" />
    </form>

</head>
<body>

</body>
</html>
