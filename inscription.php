<html>

<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
</head>

<body>
    <div id="container">
        <!-- zone de connexion -->

        <form action="verification.php" method="POST">
            <h1>Inscription</h1>

            <label><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

            <p>email</p>
            <input type="email" placeholder="Entre le mail" name="email" required>

            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" required>

            <label><b>Confirmer le mot de passe</b></label>
            <input type="password" placeholder="Confirmer le mot de passe" name="password" required>

            <label><b>Téléphone</b></label>
            <input type="tel" placeholder="Entre le numero de telephone" name="phone" required>

            <label><b>Condition générale</b></label>
            <input type="checkbox" placeholder="Accepter les conditions générales" name="TOU" required>


            <input type="submit" id='submit' value='LOGIN'>
            <?php
            if (isset($_GET['erreur'])) {
                $err = $_GET['erreur'];
                if ($err == 1 || $err == 2)
                    echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
            }
            ?>
        </form>
    </div>
</body>

</html>