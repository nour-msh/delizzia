<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

include("connection.php");
$f_name=$PUT["firstname"];
$l_name=$PUT["lastname"];
$email = $PUT["email"];
$password = $PUT["password"];
$number=$PUT["number"];
$user_id = $PUT["user_id"];

$query = $mysqli->prepare("UPDATE restaurants SET firstname=?, lastname=?, email=?, password=?,number=? where user_id=?");
$query->bind_param("sssss", $f_name, $l_name, $email, $password,$number, $user_id);
$query->execute();

$response = [];
$response["success"] = true;

echo json_encode($response);

?>