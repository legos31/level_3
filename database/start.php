<?php
$config = include 'config.php';
include 'function.php';
include 'database\QueryBuilder.php';
include 'database\Connection.php';

return new QueryBuilder (Connection::make($config['database']));