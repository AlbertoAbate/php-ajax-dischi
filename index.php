<?php
include __DIR__ . "/partials-php/database.php";

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
    <header>
        <div class="header-top">
            <div class="header-top-img container-small">
                <img src="./img/logo.png" alt="">
            </div>
        </div>
    </header>

    <main>
        <div class="dischi">
            <ul class="cds-lista flex">
            <?php foreach($database as $cd){ ?>
                <li class="cd">

                <img src="<?php echo $cd['poster'] ?>" alt="">
                <h3> <?php echo $cd['title'] ?></h3>
                </li>
            <?php } ?>
                 
                
            </ul>
        </div>
    </main>
</body>
</html>