<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

include("connection.php");
$f_name=$_POST["firstname"];
$l_name=$_POST["lastname"];
$number=$_POST["number"];
$email = $_POST["email"];
$password = $_POST["password"];

$query = $mysqli->prepare("insert into users (firstname,lastname, number, email, password) VALUES (?,?,?, ?, ?)");
$query->bind_param("ssss",$f_name,$l_name,$number,$email, $password);
$query->execute();

$response = [];
$response["success"]=true;
$json = json_encode($response);
echo $json;
?>