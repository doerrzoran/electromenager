<html>
    <body>
        <div>
            <?php
            require_once "welcomeUser.php";
            $_SESSION['name'];

            ?>
            <h3><?php welcomeUser(); ?></h3>
        </div>
        <a href="creationDeCompte.html">creer un compte</a>
        <a href="connexion.html">se connecter</a>
    </body>
</html>