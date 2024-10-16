<?php
echo "Bienvenue " . $_SESSION["username"];
?> <br> <?php
        echo "\$_SESSION : ";
        var_dump($_SESSION);

        ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <div class="profile-view">
        <h1 class="profileViewMainTitle">Page de profil</h1>

        <form action="profileView" method="POST">
            <label for="title">Titre</label>
            <input type="text" name="title" required>

            <label for="message">Entre votre message ici</label>
            <textarea name="content" id="content" required></textarea>

            <button type="submit" name="envoyerPost">Envoyer Message</button>

        </form>


        <section>
            <h2>Liste de post</h2>
            <ul class="post-list">
                <?php foreach ($posts as $post): ?>
                    <li>
                        <article>

                            <!-- Si l'utilisateur a cliqué UPDATE : -->
                            <?php if (isset($_POST["update"]) && $_POST["update"] == $post->getId()) : ?>
                                <!-- Ce formulaire apparait  -->
                                <form action="updatePost" method="POST" class="update-form">
                                    <label for="">Title</label>
                                    <input type="text" name="title" id="title" value=<?= $post->gettitle() ?>>
                                    <label for="">Content</label>
                                    <input type="text" name="content" id="content" value=<?= $post->getContent() ?>>
                                    <button type="submit">modifier</button>
                                </form>

                                <!-- SINON, le formulaire de base apparait  -->
                            <?php else : ?>
                                <h3> <?= $post->gettitle() ?></h3>
                                <p> <?= $post->getContent() ?> </p>

                                <!-- si je suis l'auteur des post :  -->
                                <?php if ($post->getUserId() == $_SESSION["userId"]):  ?>
                                    <form action="deletePost" method="POST">
                                        <button type="submit" name="delete" value=<?= $post->getId() ?> class="delete-button">Supprimer</button>
                                    </form>
                                    <form action="profileView" method="POST">
                                        <button type="submit" name="update" value=<?= $post->getId() ?> class="update-button">Modifier</button>

                                    </form>
                                <?php endif ?>
                            <?php endif ?>
                        </article>
                    </li>
                <?php endforeach ?>
            </ul>
        </section>
    </div>
</body>

</html>