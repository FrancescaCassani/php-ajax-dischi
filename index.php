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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
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
                    <div class="btn">
                        <h4>Upgrade</h4>
                    </div>
                    <img src="./img/logo.png" alt="User">
                    <h5>Frankie<i class="fas fa-angle-down"></i></h5>
                </div>
            </div>
        </header>

        <!-- MAIN CONTENT -->
        <div class="list-cd">
            <ul class="collection">
                <!-- LOGICA PHP -->
                <?php foreach ($database as $data ) { ?>
                    <li class="album">
                        <div class="album-cover">
                            <img src="<?= $data['poster']; ?>"/> 
                        </div>
                        <div class="layover">
                            <i class="far fa-play-circle"></i>
                        </div>
                        <h3 class="title"> <?php echo $data['title']; ?> </h3>
                        <h4 class="autore"> <?php echo $data['author']; ?> </h4>
                        <h3 class="year"> <?php echo $data['year']; ?> </h3>
                        <h4 class="genre"> <?php echo $data['genre']; ?> </h4>
                    </li>
                <?php }?>
            </ul>
        </div>

    </div>
    <script src="./dist/js/main.js"></script>
</body>
</html>