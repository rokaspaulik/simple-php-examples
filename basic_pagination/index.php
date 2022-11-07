<?php

require './connection.php';
require './config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
    <title>Document</title>
</head>
<body>
    <main class="container">
        <?php
            foreach ($data as $item) {
                echo implode(PHP_EOL, $item) . "<hr>";
            }
        ?>

        <div class="grid">
            <?php
                for ($i = 1; $i <= $pagesCount; $i++) {
                    $activeClass = $i == $page ? "class='contrast'" : '';

                    $paramPage = "?page={$i}";
                    $paramPerPage = isset($_GET['perPage']) ? "&perPage={$perPage}" : '';
                    $paramTable = isset($_GET['table']) ? "&table={$table}" : '';

                    $getParams = $paramPage . $paramPerPage . $paramTable;

                    echo "<a href='{$getParams}' role='button' $activeClass style='padding: 8px'>$i</a>";
                }
            ?>
        </div>

        <footer>
            <small>Per page: <?= $perPage ?></small>
        </footer>
    </main>
</body>
</html>
