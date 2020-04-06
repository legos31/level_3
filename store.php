<?php
$db = require_once 'database\start.php';
//dd($_POST);
//dd($_POST['title']);
$db->create('posts', [
   'title'=> $_POST['title'],
]);

header ('location: index.php');