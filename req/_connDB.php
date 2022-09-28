<?php 
    $serverName = "localhost";
    $userName = "";
    $password = "";
    $db = "";

    try 
    {
        $conn = new PDO("mysql:host=$serverName;dbname=$db", $userName, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connexion réussie";
    }
    catch(PDOException $e)
    {
        echo "Connexion échouée: " . $e->getMessage();
    }
?>