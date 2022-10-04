<html>
    <body>
        <div>
            <?php
            require_once "welcomeUser.php";
            ?>
            <h3><?php welcomeUser($userName, $userFirstname); 
            $test = '2';
            if($test = 1){
                echo $test;
            }else{
                echo 'non';
            }
            
            
            ?></h3>
        </div>
        <a href="creationDeCompte.html">creer un compte</a>
        <a href="connexion.html">se connecter</a>
    </body>
</html>