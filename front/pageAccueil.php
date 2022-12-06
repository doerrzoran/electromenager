
        <div>
            <?php
            require_once "header.html";
            require_once "welcomeUser.php";
            welcomeUser($userName, $userFirstname); ?>
        </div>
        <div class="event" id="creationDeCompte">creer un compte</div>
        <div class="event" id="connexion">se connecter</div>
        <div class="event" id="utilisateur">consulter votre page</div>
        <div class="event" id="vente">vendre</div>
        <div class="event" id="produits">consulter les articles</div>
        <div class="event" id="utilisateurs">consulter la liste des utilisateurs</div>
        <div class="event" id="administrateur">ajouter un nouvel administrateur</div>
        <script>
            var role = sessionStorage.getItem('Role');
            if(role > 0){
              document.getElementById("creationDeCompte").style.display = "none";
              document.getElementById("connexion").style.display = "none";
            }else{
                document.getElementById("vente").style.display = "none";
                document.getElementById("utilisateur").style.display = "none";
            }
            if(role != 1){
                document.getElementById("utilisateurs").style.display = "none";
                document.getElementById("administrateur").style.display = "none";
            }
        </script>
        <script src ="../Javascript/redirect.js"></script>
    </body>
    <?php
        require_once "footer.html"; 
    ?>
</html>