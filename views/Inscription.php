<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <h1>Formulaire d'inscription</h1>

    <form action="/register" method="POST">
        <div>
            <label for="FirstName">Entrez votre nom</label>
            <input type="text" name="nom">
        </div>

        <div>
            <label for="password">Entrez votre mot de passe</label>
            <input type="text" name="password">
        </div>
        <button type="submit" name="Envoyer"> Envoyer </button>
    </form>

</body>

</html>