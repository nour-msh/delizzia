<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

include("connection.php");

$name = $_POST["resto_name"];
$bio = $_POST["bio"];
$pizza_menu = $_POST["pizza_menu"];

$query = $mysqli->prepare("insert into restaurants(resto_name, bio, pizza_menu) VALUES (?, ?, ?)");
$query->bind_param("sss", $name, $bio, $pizza_menu);
$query->execute();

$response = [];
$response["success"] = true;

echo json_encode($response);

?>