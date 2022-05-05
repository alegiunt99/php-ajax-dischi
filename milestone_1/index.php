<!-- 
Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP,
che stampa direttamente i dischi in pagina:
al caricamento della pagina ci saranno tutti i dischi.
 -->

<?php

    $songs = [

        // canzone 1
        [

            "author" => "Bon Jovi",
            "genre" => "Rock",
            "poster" => "https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg",
            "title" => "New Jersey",
            "year" => "1988",

        ],

        // canzone 2
        [

            "author" => "Queen",
            "genre" => "Pop",
            "poster" => "https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg",
            "title" => "Live at Wembley 86",
            "year" => "1992"

        ],

        // canzone 3
        [

            "author" => "Sting",
            "genre" => "Pop",
            "poster" => "https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg",
            "title" => "Ten's Summoner's Tales",
            "year" => "1993",

        ],

        // canzone 4
        [

            "author" => "Steve Gadd Band",
            "genre" => "Jazz",
            "poster" => "https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg",
            "title" =>  "Steve Gadd Band",
            "year" => "2018"

        ],

        // canzone 5
        [

            "author" => "Iron Maiden",
            "genre" => "Metal",
            "poster" => "https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg",
            "title" => "Brave new World",
            "year" => "2000"

        ],

        // canzone 6
        [

            "author" => "Eric Clapton",
            "genre" => "Rock",
            "poster" => "https://upload.wikimedia.org/wikipedia/en/9/97/Eric_Clapton_OMCOMR.jpg",
            "title" => "One more car, one more raider",
            "year" => "2002"

        ],

        // canzone 7
        [

            "author" => "Deep Purple",
            "genre" => "Rock",
            "poster" => "https://images-na.ssl-images-amazon.com/images/I/51rggtPgmRL.jpg",
            "title" => "Made in Japan",
            "year" => "1972"

        ],

        // canzone 8
        [

            "author" => "Metallica",
            "genre" => "Metal",
            "poster" => "https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg",
            "title" => "And Justice for All",
            "year" => "1988"

        ],

        // canzone 9
        [

            "author" => "Dave Weckl",
            "genre" => "Jazz",
            "poster" => "https://img.discogs.com/KOBsqQwKiNKH-q927oHMyVdDzSo=/fit-in/596x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6406665-1418464475-6120.jpeg.jpg",
            "title" => "Hard Wired",
            "year" => "1994"

        ],

        // canzone 10
        [

            "author" => "Michael Jackson",
            "genre" => "Pop",
            "poster" => "https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg",
            "title" => "Bad",
            "year" => "1987"

        ],
    ]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <!-- link per Bootstrap (v5.0) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="script.js" defer></script>
    <title>Vue Dischi php Milestone1</title>
</head>
<body>

    <!-- Header con logo -->
    <header class="container-fluid">

        <div class="row">
            <div class="col-2">
                <img src="img/spotify-logo.png" alt="logo spotify">
            </div>
        </div>

    </header>


    <main class="container">

        <!-- creo le card delle canzoni  -->
        <div class="row" id="songs-container">

        <?php
            foreach($songs as $song){

                echo('<div class="col col-md-6 col-lg-3 card-song">');

                    echo('<img src="' . $song["poster"] . '" />');

                    echo('<h4 id="song-title">' . $song["title"] . '</h4>');

                    echo('<p>' . $song["author"] . '</p>');

                    echo('<span">' . $song["year"] . '</span>');
                
                echo('</div>');

            }
        ?>
            <div class="col col-md-6 col-lg-3 card-song">


            </div>
        </div>
        
    </main>
    
</body>
</html>