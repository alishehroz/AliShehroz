<?php


$con = mysql_connect("localhost","root","");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("spusers", $con);
session_start();
$cityy = $_SESSION['ci'];
//echo "session variable".$cityy;

$result = mysql_query('SELECT pname, pid FROM product where pcity = "'. $cityy . '"');
//$result = mysql_query("SELECT pname, pid FROM product where pcity like 'Rawalpindi'");

$rows = array();
while($r = mysql_fetch_array($result)) {
    $row[0] = $r[0];
    $row[1] = $r[1];
    array_push($rows,$row);
}

print json_encode($rows, JSON_NUMERIC_CHECK);
//echo  'alishehroz';
mysql_close($con);
?>