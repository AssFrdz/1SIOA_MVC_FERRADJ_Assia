<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <h1>Se connecter</h1>

    <form action="index.php?action=connexion" method="post">
    <label for="user"> Utilisateur</label>
    <input type="text" name="user" id="user">
    <label for="mdp"> Mot de passe </label>
    <input type="password" name="mdp">
    <input type="submit" value="Se connecter">
    </form>

</body>
</html>