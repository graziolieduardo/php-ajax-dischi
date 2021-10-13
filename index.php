<?php 
    require __DIR__. '/data/database.php';
?>

<!-- inizio html  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Linked Axios  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.23.0/axios.min.js" integrity="sha512-Idr7xVNnMWCsgBQscTSCivBNWWH30oo/tzYORviOCrLKmBaRxRflm2miNhTFJNVmXvCtzgms5nlJF4az2hiGnA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Linked vue.js  -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!-- linked css  -->
    <link rel="stylesheet" href="css/style.css">
    <title>AJAX Dischi</title>
</head>
<body>
    <div id="root">
        <header>
            <div id="logo">
                <h1>PHP DISCHI</h1>
            </div>

            <div>
                <select name="genreSelect" id="genreSelect" @change="filteredList" v-model="selectValue">
                    <option value="">All</option>
                    <option v-for="genre in genres" :value="genre"> {{ genre }} </option>
                </select>
            </div>
        </header>
        
        <main>
            <div class="container">
                <div class="album-box" v-for="album in filteredAlbums">
                    <img :src="album.poster" alt="">
                    <h2>{{album.title}}</h2>
                    <div class="box-info">
                        <span> {{ album.author }} </span>
                        <span> {{ album.year }} </span>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="js/main.js"></script>
</body>
</html>
