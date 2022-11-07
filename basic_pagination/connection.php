<?php

$connection = new PDO(
    'mysql:host=localhost;dbname=film_rental',
    'root',
    '',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
);
