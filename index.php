<?php

$db = require_once 'database\start.php';

$post = $db->getOne('posts', '1');
$posts = $db->getAll('posts');


include 'index.view.php';
?>