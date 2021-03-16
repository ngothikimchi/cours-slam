<!DOCTYPE html>
<html>
<head>
    <title> Site e-Enseignement </title>
    <meta charset="utf=8">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
    <header class="color_header">               
        <img class="taille_logo" src="logo.png">                        
        <nav>
            <ul>
                <li>
                <a href="index.php?page=1">Accueil</a>
                </li>
                <li>
                <a href="index.php?page=2">Les alternatives</a>
                </li>
                <li>
                <a href="index.php?page=3">Les boucles</a>
                </li>
               
            </ul>
        </nav>        
    </header>
<center>
    <h1 class="font_h1">Bienvenue à notre site E-Enseignement Algo / Langage C / Developpement PHP </h1>
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
<!-- <footer>Copyright - Editions 2021</footer> -->
</body>
</html>