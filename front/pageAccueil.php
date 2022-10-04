<html>
    <body>
        <div>
            <?php
            require_once "welcomeUser.php";
            ?>
            <h3><?php
            if(!$userName){
                welcomeUser($userName, $userFirstname); 
            }
            
            ?></h3>
        </div>
        <a href="creationDeCompte.html">creer un compte</a>
        <a href="connexion.html">se connecter</a>
    </body>
</html>