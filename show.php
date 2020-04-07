<?php

$db = require_once 'database\start.php';

$post = $db->getOne('posts', '1');