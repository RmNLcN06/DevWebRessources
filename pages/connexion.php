<form action="req/_login.php" method="post">
    <label for="email">Mail: </label>  
    <input type="text" name="email">
    <span class="error"><?= $emailErr; ?></span>

    <label for="identity">Identifiant: </label> 
    <input type="text" name="identity">
    <span class="error"><?= $identityErr; ?></span>

    <label for="pwd">Mot de passe: </label> 
    <input type="password" name="pwd">
    <span class="error"><?= $pwdErr; ?></span>

    <input type="submit" name="submit" value="Se connecter">
</form>