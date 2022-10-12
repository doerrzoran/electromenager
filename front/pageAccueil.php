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
        <div class="event" id="creationDeCompte">creer un compte</div>
        <div class="event" id="connexion">se connecter</div>
        <script src ="../Javascript/redirect.js"></script>
    </body>
</html>