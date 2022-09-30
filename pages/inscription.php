<?php 
require("req/_testInput.php");
$name = $surname = $email = $identity = $password = $passwordConfirm = "";
$nameErr = $surnameErr = $emailErr = $identityErr = $passwordErr = $passwordConfirmErr = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    
    $surname = test_input($_POST["surname"]);
    $email = test_input($_POST["email"]);
    $identity = test_input($_POST["identity"]);

    ///////////////////////////////////////////

    // Name
    if(empty($_POST["name"]) && !isset($_POST["name"]))
    {
        $nameErr = "Nom requis";
    }
    else
    {
        $name = test_input($_POST["name"]);
        // Name Verification
        if(!preg_match("/^[a-zA-Z-' ]*$/", $name)) 
        {
            $nameErr = "Seulement des lettres et des espaces sont acceptés";
        }
    }

    // Surname
    if(empty($_POST["surname"]) && !isset($_POST["surname"]))
    {
        $surnameErr = "Prénom requis";
    }
    else
    {
        $surname = test_input($_POST["surname"]);
        // Surname Verification
        if(!preg_match("/^[a-zA-Z-' ]*$/", $surname)) 
        {
            $surnameErr = "Seulement des lettres et des espaces sont acceptés";
        }
    }

    // Email
    if(empty($_POST["email"]) && !isset($_POST["email"]))
    {
        $emailErr = "Mail requis";
    }
    else
    {
        $email = test_input($_POST["email"]);
        
        // Email Address Verification
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $emailErr = "Format email invalide";
        }
    }

    // Identity
    if(empty($_POST["identity"]) && !isset($_POST["identity"]))
    {
        $identityErr = "Identité requise";
    }
    else
    {
        $identity = test_input($_POST["identity"]);
    }

    // Password
    if(empty($_POST["password"]) && !isset($_POST["password"]))
    {
        $passwordErr = "Mot de passe requis";
    }
    else
    {
        $password = test_input($_POST["password"]);
    }

    // Confirm Password
}
?>


<h2>Veuillez vous inscrire:</h2>

<form action="req/_signin.php" method="post">
    <label for="name">Nom: </label>
    <input type="text" name="name">
    <span class="error">* <?= $nameErr; ?></span>

    <label for="surname">Prénom: </label>
    <input type="text" name="surname">
    <span class="error">* <?= $surnameErr; ?></span>

    <label for="email">Mail: </label>
    <input type="text" name="email">
    <span class="error">* <?= $emailErr; ?></span>

    <label for="identity">Identifiant: </label>
    <input type="text" name="identity">
    <span class="error">* <?= $identityErr; ?></span>

    <label for="password">Entrez un mot de passe: </label>
    <input type="password" name="password">
    <span class="error">* <?= $passwordErr; ?></span>

    <label for="passwordConfirm">Entrez un mot de passe: </label>
    <input type="password" name="passwordConfirm">
    <span class="error">* <?= $passwordConfirmErr; ?></span>

    <input type="submit" name="submit" value="S'inscrire">
</form>