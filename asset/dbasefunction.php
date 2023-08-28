<?php
declare(strict_types=1);

require_once './conx.php';
function getAllUniversities ($conx)
{
	$sql = "SELECT * universities ";
	$universities = $conx->query($sql);
	return $universities->fetchALL(PDO::FETCH_OBJ);
}

function insertQuery ($conx, $sql, $placeholder)
{
	$sql = "INSERT INTO `universities` (`name`, `state_of_location`, `number_of_lectuers`, `id`) VALUES (:name, :state, :lecturer_count, :id)";
	$statement = $conx->prepare(sql);
	$statement->execute($placeholder);
}

?>