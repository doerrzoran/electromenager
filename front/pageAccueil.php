<html>
    <body>
        <div>
            <?php
            require_once "welcomeUser.php";
            session_start();
            $_SESSION['name'];

            ?>
            <h3><?php welcomeUser(); ?></h3>
        </div>
        <a href="creationDeCompte.html">creer un compte</a>
        <a href="connexion.html">se connecter</a>
    </body>
</html>