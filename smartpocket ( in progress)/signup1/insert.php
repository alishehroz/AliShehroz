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

//$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$msg='';
if(!empty($_POST['mail']) && isset($_POST['mail']) &&  !empty($_POST['password']) &&  isset($_POST['password']) )
{
// username and password sent from Form
$email=mysqli_real_escape_string($conn,$_POST['mail']); 
$password=mysqli_real_escape_string($conn,$_POST['password']); 

$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/';

if(preg_match($regex, $email))
{  
$password=md5($password); // Encrypted password
$activation=md5($email.time()); // Encrypted email+timestamp


$count=mysqli_query($conn,"SELECT id FROM user WHERE mail='$email'");
if(mysqli_num_rows($count) < 1)
{
mysqli_query($conn,"INSERT INTO user(mail,password,activation) VALUES('$email','$password','$activation');");

include 'smtp/Send_Mail.php';
$to=$email;
$subject="Email verification";
$body='Hi, <br/> <br/> We need to make sure you are human. Please verify your email and get started using your Website account. <br/> <br/> 
<a href="'.$base_url.'activation/'.$activation.'">'.$base_url.'activation/'.$activation.'</a>';
Send_Mail($to,$subject,$body);

$msg= "Registration successful, please activate email.";	

}
else
{
$msg= '<font color="#cc0000">The email is already taken, please try new.</font>';	
}



}
else
{
   $msg = '<font color="#cc0000">The email you have entered is invalid, please try again.</font>';  
}


}


$sql = "INSERT INTO user (fname, lname, email, pass, ad1, ad2, count, city, state, posc, card, cs,activation)
VALUES ( '$fn' , '$ln', '$em', '$pass', '$a1', '$a2', '$co', '$ci', '$st', '$pc', '$cn', '$sec','$activation')";

if ($conn->query($sql) === TRUE) {
    echo "<h1>New record created successfully</h1>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

