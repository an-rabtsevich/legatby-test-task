<?php

require_once 'DBConnection.php';

$db = new DBConnection();

$query = "SELECT `clients`.`name` FROM `clients` INNER JOIN `orders` ON `clients`.`id` = `orders`.`client` WHERE `orders`.`status` = 'Complete' GROUP BY `clients`.`name` HAVING COUNT(`orders`.`status`) > 4";

$result = mysqli_fetch_all($db->connection->query($query), MYSQLI_ASSOC);

var_dump($result);