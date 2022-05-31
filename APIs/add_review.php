<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

include("connection.php");

$text = $_POST["text"];
$stars = $_POST["star"];

$query = $mysqli->prepare("INSERT INTO reviews(text, star) VALUES (?, ?)");
$query->bind_param("ss", $text, $stars);
$query->execute();

$response = [];
$response["success"] = true;

echo json_encode($response);

?>