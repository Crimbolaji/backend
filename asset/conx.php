<?php
declare(strict_types=1);
require_once './config.php';

try {
    $connection = new PDO("mysql:host=localhost;dbname=" . $config ['name_of_database'],$config['username'],$config['password']);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\Throwable $th) {
    echo "Error:" .$e->getMessage();
}


?>