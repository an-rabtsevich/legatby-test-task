<?php 

require_once '../DBConnection.php';

$db = new DBConnection();

$data = $_POST['country_input'];

$query = "SELECT `name` FROM `country` WHERE `name` LIKE '$data%' LIMIT 5";
$result = $db->connection->query($query)->fetch_all(MYSQLI_ASSOC);

echo json_encode($result);