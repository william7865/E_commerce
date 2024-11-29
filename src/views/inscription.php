<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/inscription.css">
    <title>Document</title>
</head>
<body>
    <h2>Inscription</h2>
    <form class="inscription" action="inscription" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password">
        <label for="password2">Confirmer le mot de passe</label>
        <input type="password" name="password2" id="password2">
        <button type="submit">S'inscrire</button>
        <a href="connexion">Déjà inscrit ?</a>
    </form>
    
</body>
</html>