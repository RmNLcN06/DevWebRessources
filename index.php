<?php require("req/_processing.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("inc/_head.php"); ?>
</head>
<body>
    <div class="page">
        <div class="wrapper">
            <header>
                <?php include("inc/_header.php"); ?>
            </header>
            <?php
                $homePage = "/DevWebRessources/?page=accueil";
                $indexPage = "/DevWebRessources/index.php";
                $indexPageBis = "/DevWebRessources/";

                $localPage = $_SERVER['REQUEST_URI'];
                echo $homePage . "<br>";
                echo $localPage;

                if(($homePage != $localPage) && ($indexPage != $localPage) && ($indexPageBis != $localPage)) {
            ?>
            <nav>
                <?php include("inc/_nav.php"); ?>
            </nav>
            <?php
                }
            ?>
            
            <main>
                <?php include($pagepath); ?>
            </main>
            <footer>
                <?php include("inc/_footer.php"); ?>
            </footer>
        </div>
    </div>

    <!-- Javascript Files -->
    <script src="app/js/script.js"></script>
</body>
</html>