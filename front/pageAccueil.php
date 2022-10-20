<html>
    <body>
        
        <div>
            <?php
            require_once "header.html";
            require_once "welcomeUser.php";
            ?>
            <?php welcomeUser($userName, $userFirstname); ?>
        </div>
        <div class="event" id="creationDeCompte">creer un compte</div>
        <div class="event" id="connexion">se connecter</div>
        <div class="event" id="vente">vendre</div>
        <div class="event" id="produits">consulter les articles</div>
        <div class="event" id="utilisateurs">consulter la liste des utilisateurs</div>
        <script>
            var role = sessionStorage.getItem('Role');
            if(typeof role == 'undefined'){
              document.getElementById("creationDeCompte").style.display = "none";
              document.getElementById("connexion").style.display = "none";
            }
        </script>
        <script src ="../Javascript/redirect.js"></script>
    </body>
</html>