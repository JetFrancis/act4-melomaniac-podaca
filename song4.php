

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
                <h3 class="lead">SONG 4</h3>

                <?php echo "<br/>" ?>
                <h1 class='font-italic'>"More Than Words"</h1>  
                
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

                        echo "<h2 class='text-primary'>More Than Words</h2>";  
                        echo "<p class='lead'>Westlife</p>";
                        echo "<br/>";

                        echo "<p class='small'>[Verse]:</p>";
                        echo "<p>[B]    Saying [E]I love you</p>";
                        echo "<p>[C#m]Is not the words I [E]want to [F#]hear from you [B] </p>";
                        echo "<p>It's not that [E]I want you </p>";
                        echo "<p>[C#m]   Not to say, but [E]if you [F#]only [G#m]knew </p>";
                        echo "<br/>";

                        echo "<p>[B]  [C#m]How easy [F#]it would be to [B]show me [F#]how you [G#m]feel </p>";
                        echo "<p>[B]More than [C#m]words is [F#]all you have to [B]do to [B]make it [E]real </p>";
                        echo "<p>Then you [Em]wouldn't have to [B]say that you [G#m]love [B]me  [G#m]    [B]</p>";
                        echo "<p>Cos [C#m]I'd [F#]already [B]know</p>";
                        echo "<br/>";

                        echo "<p class='small'>[Chorus]</p>";
                        echo "<p>What would you [F#]do if my [G#m]heart [B]was [F#]torn in [E]two</p>";
                        echo "<p>More than words to show you [C#m]feel</p>";
                        echo "<p>That your [F#]love for me is [B]real </p>";
                        echo "<p>What would you [F#]say if I [G#m]took [B]those [F#]words [E]away</p>";
                        echo "<p>Then you couldn't make things [C#m]new</p>";
                        echo "<p>Just by [F#]saying I love you</p>";
                        echo "<br/>";

                        echo "<p class='small'>[Verse]</p>";
                        echo "<p>[B]  Now I've tr[E]ied to t[C#m]alk to you and ma[E]ke you [F#]understand [B]</p>";
                        echo "<p>All you [E]have to do [C#m]is close your eyes</p>";
                        echo "<p>And [E]just reach [F#]out your [G#m][B]hands [C#m]and touch me</p>";
                        echo "<p>[F#]Hold me close don't [B]ever [F#]let me [G#m]go</p>";
                        echo "<p>[[B]More than [C#m]words is [F#]all I ever [B]needed you to [E]show</p>";
                        echo "<p>Then you wouldn't have to [B]say that you [G#m]love [B]me  [G#m]    [B]</p>";
                        echo "<p>Cos [C#m]I'd [F#]already [B]know </p>";
                        echo "<br/>";

                        echo "<p class='small'>[Chorus]</p>";
                        echo "<p>What would you [F#]do if my [G#m]heart [B]was [F#]torn in [E]two </p>";
                        echo "<p>More than words to show you [C#m]feel l</p>";
                        echo "<p>That your [F#]love for me is [B]real</p>";
                        echo "<p>What would you sa[F#]y if I[G#m] took t[B]hose wo[F#]rds a[E]way</p>";
                        echo "<p>Then you couldn't make things [C#m]new </p>";
                        echo "<p>Just by [F#]saying I love [B]you</p>";
                        
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
