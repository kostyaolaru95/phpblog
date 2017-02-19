<?php
session_start();

$conn = mysql_connect('localhost', 'root', '');
if (!$conn) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("blog", $conn);


$email=$_GET["email"];
$pass=$_GET["pass"];


$result = mysql_query("SELECT * FROM `user` where email='$email' and password=$pass");
if (!$result)
    die(mysql_error($conn));
if($test = mysql_fetch_array($result)) {
    $_SESSION['useremail'] = $email;
}
mysql_close($conn);
header ("Location: index.php");
?>