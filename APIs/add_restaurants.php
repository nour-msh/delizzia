<?php

include("connection.php");

$name = $_POST["name"];
$bio = $_POST["bio"];
$pizza_menu = $_POST["pizza_menu"];
$drinks_menu = $_POST["drinks_menu"];

$query = $mysqli->prepare("insert into restaurants(name, bio, pizza_menu, drinks_menu) VALUES (?, ?, ?, ?)");
$query->bind_param("ssss", $name, $bio, $pizza_menu, $drinks_menu);
$query->execute();

$response = [];
$response["success"] = true;

echo json_encode($response);

?>