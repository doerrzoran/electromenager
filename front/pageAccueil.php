<html>
    <body>
        <div>
            <?php
            session_start();
            
            if(isset($_SESSION['id'])){
                echo "connecté en temps que". $_SESSION['id'];
            }
            ?>
        </div>
        <a href="creationDeCompte.html">creer un compte</a>
        <a href="connexion.html">se connecter</a>
    </body>
</html>