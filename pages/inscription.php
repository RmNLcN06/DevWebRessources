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

    <input type="submit" name="submit" value="S'inscrire">
</form>