<html>
    <body>
        
        <div>
            <?php
            require_once "header.html";
            require_once "welcomeUser.php";
            ?>
            <?php welcomeUser($userName, $userFirstname); ?>
        </div>
        <div class="event" tagname="connecteur" id="creationDeCompte">creer un compte</div>
        <div class="event" tagname="connecteur" id="connexion">se connecter</div>
        <div class="event" id="vente">vendre</div>
        <div class="event" id="produits">consulter les articles</div>
        <div class="event" id="utilisateurs">consulter la liste des utilisateurs</div>
        <script>
            var role = sessionStorage.getItem('Role');
            if(typeof role !== 'undefined'){
              document.getElementsByTagName("connecteur").style.display = "none";

            }
        </script>
        <script src ="../Javascript/redirect.js"></script>
    </body>
</html>