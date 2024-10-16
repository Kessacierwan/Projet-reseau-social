<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <h1>Page de connexion</h1>

    <form action="/login" method="POST">
        <div>
            <label for="FirstName">Nom</label>
            <input type="text" name="nom">
        </div>
        <div>
            <label for="LastName">password</label>
            <input type="text" name="password">
        </div>
        <button type="submit" name="Connexion"> Connexion </button>
    </form>

</body>

</html>