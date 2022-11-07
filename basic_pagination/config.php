<?php

$table = $_GET['table'] ?? 'actor';
$perPage = $_GET['perPage'] ?? 15;
$page = $_GET['page'] ?? 1;
$offset = ($page - 1) * $perPage;

$statement = $connection->prepare("SELECT * FROM {$table} ORDER BY id LIMIT {$perPage} OFFSET {$offset};");
$statement->execute();
$data = $statement->fetchAll(\PDO::FETCH_ASSOC);

$statement = $connection->prepare("SELECT CEILING(count(*) / {$perPage}) AS pages FROM actor;");
$statement->execute();
$pagesCount = $statement->fetchColumn();
