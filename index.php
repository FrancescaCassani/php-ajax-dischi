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
                    <h5>{{user}}<i class="fas fa-angle-down"></i></h5>
                </div>
            </div>
        </header>


        <!-- Selection genre -->
        <div class="filter">
            <select
            v-model="activeArtist"
            @change="getArtist">
                <option value="all">All</option>
            </select>
        </div>

        <!-- MAIN CONTENT -->
        <div class="list-cd">
            <ul class="collection">
                <li class="album" v-for="album in albums">
                    <div class="album-cover">
                        <img :src="album.poster"/> 
                    </div>
                    <div class="layover">
                        <i class="far fa-play-circle"></i>
                    </div>
                    <h3 class="title"> {{album.title}} </h3>
                    <h4 class="autore"> {{album.author}} </h4>
                    <h3 class="year"> {{album.year}} </h3>
                    <h4 class="genre"> {{album.genre}} </h4>
                </li>
            </ul>
        </div>

    </div>
    <script src="./dist/js/main.js"></script>
</body>
</html>