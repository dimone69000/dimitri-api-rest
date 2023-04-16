<?php require_once __DIR__ . '/../pdo/pdo.php' ?>
<?php
header('Content-type: application/json; charset=UTF-8');

require_once __DIR__ .'/data/users.php';

echo json_encode($users);