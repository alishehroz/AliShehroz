<?php
session_start();
$name = $_SESSION["uname"];
echo $name . " is logout";
session_unset();
session_destroy();

?>
