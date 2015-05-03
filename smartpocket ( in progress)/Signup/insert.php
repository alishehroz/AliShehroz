<?php

include 'connection.php';

$fn = $_POST["fname"];
$ln = $_POST["lname"];
$em = $_POST["mail"];
$pass = $_POST["password"];
$a1 = $_POST["add1"];
$a2 = $_POST["add2"];
$co = $_POST["country"];
$ci = $_POST["city"];
$st = $_POST["spr"];
$pc = $_POST["postalcode"];
$cn = $_POST["cnumber"];
$sec= $_POST["csc"];

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO info (fname, lname, email, pass, ad1, ad2, count, city, state, posc, card, cs)
VALUES ( '$fn' , '$ln', '$em', '$pass', '$a1', '$a2', '$co', '$ci', '$st', '$pc', '$cn', '$sec')";

if ($conn->query($sql) === TRUE) {
    echo "<h1>New record created successfully</h1>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

