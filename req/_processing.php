<?php 
    if(isset($_GET["/"])) 
    {
        $page = $_GET["/"];
    }
    else 
    {
        $page = '';
    }


    switch($page)
    {
        // Menu Pages Header
        case "connexion":
            $pagepath = 'pages/connexion.php';
            break;
        case "inscription":
            $pagepath = 'pages/inscription.php';
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