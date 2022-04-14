


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
                        <li class="nav-item"><a class="nav-link text-light" href="song1.php">Song1</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="song2.php">Song2</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="song3.php">Song3</a></li>
                         <li class="nav-item"><a class="nav-link text-light" href="song4.php">Song4</a></li>
                          <li class="nav-item"><a class="nav-link text-light" href="song5.php">Song5</a></li>
                          <li class="nav-item"><a class="nav-link text-light" href="song6.php">Song6</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Header-->
        <header class="bg-dark bg-gradient text-white">
            <div class="container px-3 mb-0 text-center">

                <img src="images/icon01.PNG" width="50" height="50">
                <h3 class="lead">SONG 2</h3>

                <?php echo "<br/>" ?>
                <h1 class='font-italic'>"At My Worst"</h1>  
                
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
                        //lyrics
                        echo "<h2 class='text-primary'>At My Worst</h2>";  
                        echo "<p class='lead'>Pink Sweats</p>";
                        echo "<br/>";

                        echo "<p>Can I call you [C]baby? Can you be my [Am]friend?</p>";
                        echo "<p>Can you be my [Dm]lover up until the very [G]end?</p>";
                        echo "<p>Let me show you [C]love, oh, no pretend [Am]</p>";
                        echo "<p>[Stick by my [Dm]side even when the world is caving in [G], yeah</p>";
                        echo "<br/>";

                        echo "<p class='small'>[Pre-Chorus]</p>";
                        echo "<p>Oh, oh, oh, don't [C], don't you [Am]worry</p>";
                        echo "<p>I'll be [Dm]there whenever you [G]want me</p>";
                        echo "<br/>";

                        echo "<p class='small'>[Chorus]</p>";
                        echo "<p>I need [C]somebody who can love me at my [Am]worst</p>";
                        echo "<p>Know I'm not [Dm]perfect, but I hope you see my [G]worth</p>";
                        echo "<p>'Cause it's only [C]you, nobody new, I put you [Am]first</p>";
                        echo "<p>And for you [Dm], girl, I swear I'd do the [G]worst</p>";
                        echo "<br/>";

                        echo "<p class='small'>[Post-Chorus]</p>";
                        echo "<p>Ooh ooh-ooh Ooh-ooh-ooh ooh-ooh-ooh-ooh<p/>";
                        echo "<br/>";

                        echo "<p class='small'>[Verse 2]</p>";
                        echo "<p>If you stay [C]forever, let me hold your [Am]hand</p>";
                        echo "<p>I can fill those [Dm]places in your heart no one else [G]can</p>";
                        echo "<p>Let me show you [C]love, oh, no [Am]pretend, yeah</p>";
                        echo "<p>I'll be right [Dm]here, baby, you know it's sink or [G]swim</p>";
                        echo "<br/>";

                        echo "<p class='small'>[Pre-Chorus]</p>";
                        echo "<p>Oh, oh, oh, don't [C], don't you [Am]worry</p>";
                        echo "<p>I'll be [Dm]there whenever you [G]want me</p>";
                        echo "<br/>";

                        echo "<p class='small'>[Chorus]</p>";
                        echo "<p>I need [C]somebody who can love me at my [Am]worst</p>";
                        echo "<p>Know I'm not [Dm]perfect, but I hope you see my [G]worth</p>";
                        echo "<p>'Cause it's only [C]you, nobody new, I put you [Am]first</p>";
                        echo "<p>And for you [Dm], girl, I swear I'd do the [G]worst</p>";
                        echo "<br/>";

                        echo "<p class='small'>[Post-Chorus]</p>";
                        echo "<p>Ooh ooh-ooh Ooh-ooh-ooh ooh-ooh-ooh-ooh<p/>";
                        echo "<br/>";

                        echo "<p class='small'>[Outro]</p>";
                        echo "<p>I need [C]somebody who can love me at my [Am]worst</p>";
                        echo "<p>Know I'm not [Dm]perfect, but I hope you see my [G]worth</p>";
                        echo "<p>'Cause it's only [C]you, nobody new, I put you [Am]first</p>";
                        echo "<p>And for you [Dm], girl, I swear I'd do the [G]worst</p>";
                        echo "<br/>";


                        ?>
                        <br>
                        <!--audio-->
                        <p class='text-dark fw-bolder'>PLAY</p>
                        <audio controls>
                        <source src="audios/sound2.mp3" type="audio/mpeg">
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