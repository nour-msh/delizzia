<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

include("connection.php");
$query = $mysqli->prepare("SELECT * from restaurants");
$query->execute();
$array = $query->get_result();
$response = [];
while($getResto = $array->fetch_assoc()){
    $response[] = $getResto;
} 
$json = json_encode($response);
echo $json;

?>