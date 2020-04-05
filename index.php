<?php

$db = require_once 'database\start.php';
$posts = $db->getAll($pdo);

include 'index.view.php';
?>