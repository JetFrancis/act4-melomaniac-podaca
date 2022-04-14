

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Melomaniac Activity</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
      
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="#page-top"> Tune'f Music </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link text-light " href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="song01.php">Song1</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="song02.php">Song2</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="song03.php">Song3</a></li>
                         <li class="nav-item"><a class="nav-link text-light" href="song04.php">Song4</a></li>
                          <li class="nav-item"><a class="nav-link text-light" href="song05.php">Song5</a></li>
                          <li class="nav-item"><a class="nav-link text-light" href="song06.php">Song6</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark bg-gradient text-white">
            <div class="container px-3 mb-0 text-center">

                <img src="images/icon01.PNG" width="50" height="50">
                <h3 class="lead">SONG 1</h3>

                <?php echo "<br/>" ?>
                <h1 class='font-italic'>"Take Me Home, Country Road"</h1> 
                
            </div>
        </header>
        <style>
            body {
                background: #654ea3;
                background: linear-gradient(to bottom, #ffefba, #ffffff);
            }
        </style>
        <!-- About section-->
        <section id="songs">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-12 text-center">
                        <img src="images/icon02.PNG" width="100" height="100">
                    
                        <?php

                        echo "<h2 class='text-primary'>Take Me Home, Country Road</h2>";  
                        echo "<p class='lead'>John Denver</p>";
                        echo "<br/>";

                        echo "<p>[G] Almost Heaven, [Em] West Virginia</p>";
                        echo "<p>[D] Blue Ridge Mountains, [C] Shenandoah [G] River</p>";
                        echo "<p>[G] Life is old here, [Em] older than the trees</p>";
                        echo "<p>[D] younger than the mountains, [C] blowin like a [G] breeze</p>";
                        echo "<br/>";

                        echo "<p class='small'>[Chorus]</p>";
                        echo "<p>Country [G] Roads, take me [D] home</p>";
                        echo "<p>To a [Em] place, I [C] belong</p>";
                        echo "<p>West [G] Virginia, mountain [D] mama</p>";
                        echo "<p>Take me [C] home, country [G] roads</p>";
                        echo "<br/>";

                        echo "<p class='small'>[Verse 2]</p>";
                        echo "<p>[G] All my memories [Em] gather round her</p>";
                        echo "<p>[D] Miner's lady, [C] stranger to blue [G] water</p>";
                        echo "<p>[G] Dark and dusty, [Em] painted on the sky</p>";
                        echo "<p>[D] Misty taste of moonshine, [C] teardrop in my [G] eye</p>";
                        echo "<br/>";

                        echo "<p class='small'>[Verse 3]</p>";
                        echo "<p>[Em] I hear her [D] voice in the [G] morning hour she calls me</p>";
                        echo "<p>The [C] radio re- [G]minds me of my [D] home far away</p>";
                        echo "<p>And [Em] driving down the [F] road I get a [C] feeling that</p>";
                        echo "<p>I [G] should have been home [D] yesterday, yester-[D7] day</p>";
                        echo "<br/>";

                        ?>
                        <br>
                        <p class='text-dark fw-bolder'>PLAY</p>
                        <audio controls>
                    <source src="audios/sound1.mp3" type="audio/mpeg">
                </audio> 
                    </div>
                </div>
            </div>
        </section>

        <footer class="py-3 bg-primary">
            <div class="container px-4"><p class="m-0 text-center text-dark">Copyright &copy; 2022. Jet Francis Q. Podaca</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
