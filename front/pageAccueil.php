<html>
    <body>
        <div>
            <?php
            require_once "welcomeUser.php";
            ?>
            <h3><?php welcomeUser($userName, $userFirstname); ?></h3>
        </div>
        <a href="creationDeCompte.html">creer un compte</a>
        <!-- <a href="connexion.html">se connecter</a> -->
        <div id="event">se connecter</div>
    </body>
</html>