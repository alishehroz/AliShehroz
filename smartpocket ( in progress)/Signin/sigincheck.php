<?php

include 'connection.php';


// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['un']))
    {

if(!empty($_POST['un']) && !empty($_POST['un']))
{
    $username = mysqli_real_escape_string($link, $_POST['un']);
    $password = md5(mysqli_real_escape_string($link, $_POST['pas']));

     $checklogin = mysqli_query($link, "SELECT * FROM info WHERE email = '".$username."' AND pass = '".$password."'");

    if(mysqli_num_rows($checklogin) == 1)
    {
        $row = mysqli_fetch_array($checklogin);
        
        $email = $row['email'];
        $name = $row['name'];
        $surname = $row['fname'];

        
        $_SESSION['Email'] = $email;
        $_SESSION['Name'] = $name;
        $_SESSION['Surname'] = $surname;
        $_SESSION['LoggedIn'] = 1;

        header('location: index.html');
    }
    else
    {
        $feedback= "<p>Your account was not found, please try again.</p>";
    }        
} else 
{   
    $feedback= "<p>Please fill in all the blank areas.</p>";
}
    }

?>