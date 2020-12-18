<?php
include __DIR__ . "/scripts/database.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./dist/css/main.css">
</head>
<body>
    <div id="app">
        <header>
            <div class="header-top">
                <div class="header-top-img container-small">
                    <img src="./img/logo.png" alt="">
                </div>
            </div>
        </header>

        <main>
            <div class="dischi container-small-small">
                <ul class="cds-lista flex">
                    <li class="cd" v-for="cd in cds">
                    <img :src="cd.poster" alt="">
                        <h3 class="mt white"> {{ cd.title }}</h3>
                        <h4 class="mt white fs">  {{ cd.author }} </h4>
                        <h4 class="mt white"> {{ cd.year }} </h4>
                        <h4 class="mt white fs"> {{ cd.genre }} </h4>
                    </li>
                </ul>
            </div>
        </main>
    </div>

    <!-- inclusione js -->
    <script src="./dist/js/main.js"></script>
</body>
</html>