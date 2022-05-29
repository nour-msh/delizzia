<?php

include("connection.php");
$f_name=$_POST["firstname"];
$l_name=$_POST["lastname"];
$email = $_POST["email"];
$password = $_POST["password"];
$number=$_POST["number"];
$payment_method = $_POST["payment_method"];
$user_id = $_POST["user_id"];

$query = $mysqli->prepare("UPDATE restaurants SET firstname=?, lastname=?, email=?, password=?,number=?,payment_method=? where user_id=?");
$query->bind_param("ssssss", $f_name, $l_name, $email, $password,$number,$payment_method, $user_id);
$query->execute();

$response = [];
$response["success"] = true;

echo json_encode($response);

?>