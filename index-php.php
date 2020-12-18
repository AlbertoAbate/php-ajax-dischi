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
            <?php foreach($database as $cd){ ?>
                <li class="cd">

                    <img src="<?php echo $cd['poster'] ?>" alt="">
                    <h3 class="mt white"> <?php echo $cd['title'] ?></h3>
                    <h4 class="mt white fs"> <?php echo $cd['author'] ?> </h4>
                    <h4 class="mt white"> <?php echo $cd['year'] ?> </h4>
                    <h4 class="mt white fs"> <?php echo $cd['genre'] ?> </h4>
                </li>
            <?php } ?>
                 
                
            </ul>
        </div>
    </main>

    <!-- inclusione js -->
    <script src="./dist/js/main.js"></script>
</body>
</html>