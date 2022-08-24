<?php 
    if(isset($_GET["page"])) 
    {
        $page = $_GET["page"];
    }
    else 
    {
        $page = '';
    }


    switch($page)
    {
        // Menu Pages Header
        case "accueil":
            $pagepath = 'pages/accueil.php';
            break;
        case "connexion":
            $pagepath = 'pages/connexion.php';
            break;
        case "inscription":
            $pagepath = 'pages/inscription.php';
            break;
        case "article":
            $pagepath = 'pages/article.php';
            break;

        
        
        default:
            $pagepath = "pages/accueil.php";
        // Menu 
    }

    if(!file_exists($pagepath))
    {
        $pagepath = 'pages/accueil.php';
    }
?>