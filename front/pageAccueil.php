
        <div>
            <?php
            require_once "header.html";
            require_once "welcomeUser.php";
            welcomeUser($userName, $userFirstname); ?>
        </div>
        <div class="event" id="creationDeCompte" style="cursor:pointer; font-size: 20px;">creer un compte</div>
        <div class="event" id="connexion" style="cursor:pointer;">se connecter</div>
        <div class="event" id="utilisateur" style="cursor:pointer;">consulter votre page</div>
        <div class="event" id="vente" style="cursor:pointer;">vendre</div>
        <div class="event" id="produits" style="cursor:pointer;">consulter les articles</div>
        <div class="event" id="utilisateurs" style="cursor:pointer;">consulter la liste des utilisateurs</div>
        <div class="event" id="administrateur" style="cursor:pointer;">ajouter un nouvel administrateur</div>
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