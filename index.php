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
            <nav>
                <?php include("inc/_nav.php"); ?>
            </nav>
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