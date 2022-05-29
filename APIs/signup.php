<?php
include("connection.php");
$f_name=$_POST["firstname"];
$l_name=$_POST["lastname"];
// $number=$_POST["number"];
$email = $_POST["email"];
$password = $_POST["password"];
// $payment_method = $_POST["payment_method"];
// $is_admin = $_POST["is_admin"];

$query = $mysqli->prepare("insert into users (firstname,lastname, email, password) VALUES (?,?, ?, ?)");
$query->bind_param("ssss",$f_name,$l_name,$email, $password);
$query->execute();

$response = [];
$response["success"]=true;
$json = json_encode($response);
echo $json;
?>