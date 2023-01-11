
      
<?php
    require_once "header.php";
?>
        <div class="text-danger" style="text-align: right; background-color: #FFFACD; border-radius: 15px; margin-left: 80%;">
          <div class="event" id="creationDeCompte" style="cursor:pointer; font-size: 20px; padding-bottom: 10px;">creer un compte</div>
          <div class="event" id="connexion" style="cursor:pointer; font-size: 20px; padding-bottom: 10px;">se connecter</div>
        </div>
        <div class="text-primary" style="text-align: left; background-color: #FFFACD; border-radius: 15px; margin-right: 75%; min-width: 30px;">
          <div class="event" id="utilisateur"  style="cursor:pointer; font-size: 20px; padding-bottom: 10px;">consulter votre page</div>
          <div class="event" id="vente" style="cursor:pointer; font-size: 20px; padding-bottom: 10px;">vendre</div>
          <div class="event" id="produits" style="cursor:pointer; font-size: 20px; padding-bottom: 10px;">consulter les articles</div>
          <div class="event" id="utilisateurs" style="cursor:pointer; font-size: 20px; padding-bottom: 10px;">consulter la liste des utilisateurs</div>
          <div class="event" id="administrateur" style="cursor:pointer; font-size: 20px; padding-bottom: 10px;">ajouter un nouvel administrateur</div>
        </div>
        
        <script>
            var role = sessionStorage.getItem('Role');
            if(role > 0){
              document.getElementById("creationDeCompte").style.display = "none";
              document.getElementById("connexion").style.display = "none";
            }else{
                document.getElementById("vente").style.display = "none";
                document.getElementById("utilisateur").style.display = "none";
            }
            if(role == 1){
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