<!-- DATABASE PHP -->
<?php
include_once __DIR__ . '/scripts/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AXIOS PHP DISCHI</title>
    <link rel="stylesheet" href="./dist/css/main.css">
</head>
<body>
    <div id="spotify">
        <!-- HEADER -->
        <header>

        </header>

        <!-- MAIN CONTENT -->
        <main>
            <section class="collection">
                <!-- LOGICA PHP -->
                <?php foreach ($database as $data ) { ?>
                    <img src="<?= $data['']; ?>"/> 
                    <h3> <?php echo $data['title']; ?> </h3>
                    <h4> <?php echo $data['author']; ?> </h4>
                    <h3> <?php echo $data['year']; ?> </h3>
                    <h4> <?php echo $data['genre']; ?> </h4>
                <?php }?>
            </section>
        </main>

    </div>
    <script src="./dist/js/main.js"></script>
</body>
</html>