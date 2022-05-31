<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

include("connection.php");
$query = $mysqli->prepare("SELECT * from users");
$query->execute();
$array = $query->get_result();
$response = [];
while($getUser = $array->fetch_assoc()){
    $response[] = $getUser;
} 
$json = json_encode($response);
echo $json;

?>