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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="./dist/css/main.css">
</head>
<body>
    <div id="spotify">
        <!-- HEADER -->
        <header>
            <div class="logo">
                <img src="./img/logo.png" alt="Spotify">
            </div>
        
            <div class="user">
                <div class="personal">
                    <h5>Upgrade</h5>
                    <img src="./img/logo.png" alt="User">
                    <h5>Frankie</h5>
                    <i 
                    class="fas fa-angle-down"></i>
                </div>
            </div>
        </header>

        <!-- MAIN CONTENT -->
        <div class="list-cd">
            <ul class="collection">
                <!-- LOGICA PHP -->
                <li class="album">
                    <?php foreach ($database as $data ) { ?>
                        <div class="album-cover">
                            <img src="<?= $data['poster']; ?>"/> 
                        </div>
                        <h3 class="title"> <?php echo $data['title']; ?> </h3>
                        <h4 class="autore"> <?php echo $data['author']; ?> </h4>
                        <h3 class="year"> <?php echo $data['year']; ?> </h3>
                        <h4 class="genre"> <?php echo $data['genre']; ?> </h4>
                    <?php }?>
                </li>
            </ul>
        </div>

    </div>
    <script src="./dist/js/main.js"></script>
</body>
</html>