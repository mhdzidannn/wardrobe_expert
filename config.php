<?php
$host = "localhost";
$user = "customer";
$pass = "12345";
$db = "wardrobe_expert";

$conn = mysqli_connect($host,$user,$pass,$db);

if (! $conn) {
    die("Fail to connect: " .mysql_error);
}
?>