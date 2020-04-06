<?php

$db = require_once 'database\start.php';
$posts = $db->getAll('posts');

include 'index.view.php';
?>