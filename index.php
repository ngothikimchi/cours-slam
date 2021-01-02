<!DOCTYPE html>
<html>
<head>
    <title> Site e-Enseignement </title>
    <meta charset="utf=8">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
    <header>
        <img src="www_logo.jpg">
        <nav>
            <ul>
                <li><a href ="index.php?page=1"> Accueil 
                    <img src="home.png" height="50" width="50">
                </a> </li>
                <li><a href ="index.php?page=2"> Les alternatives 
                        <img src="alternatives.jpg" height="50" width="50">
                    </a>
                </li>
                <li><a href ="index.php?page=3"> Les boucles 
                    <img src="boucles.jpg" height="50" width="50">
                    </a> 
                </li>               
            </ul>
        </nav>
    </header>
<center>
    <h1>Bienvenue à notre site E-Enseignment Algo / Langage C / Developpement PHP </h1>
</center>

<?php
    if (isset($_GET["page"]))
    {
        $page = $_GET["page"];    
    }
    else 
    {
        $page = 1;
    }

    switch ($page)
    {
        case 1 :require_once ("home.php");break;
        case 2 :require_once ("alternatives.php");break;
        case 3 :require_once ("boucles.php");break;
    }
?>
<!-- <center>
    <button onclick="scrollToTop()"> 
    Cliquez pour faire défiler vers le haut
    </button> 
</center> -->
</body>
</html>