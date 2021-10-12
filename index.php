<?php 
    require __DIR__. '/database.php';
?>

<!-- inizio html  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>AJAX Dischi</title>
</head>
<body>
    <header>

    </header>
    
    <main>
        <div class="container">
            <?php 
                foreach ($db as $album) {
                    echo '<div class="album-box">';
                    echo '<img src="' . $album['poster'] . '">';
                    echo '<h2>' . $album['title'] . '</h2>';
                    echo '<div class="box-info">' . 
                            '<span>' . $album['author'] . '</span>' .
                            '<span>' . $album['year'] . '</span>' .
                         '</div>';
                    echo '</div>';
                }
            ?>
        </div>
    </main>
</body>
</html>