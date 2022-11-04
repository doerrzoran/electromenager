<html>
<head>
    <script src="https://app.simplefileupload.com/buckets/b8bc1f8a3fed9fd752a08588100a7e0b.js"></script>
</head>
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
            console.log(role);
            if(role > 0){
              document.getElementById("creationDeCompte").style.display = "none";
              document.getElementById("connexion").style.display = "none";
            }else{
                document.getElementById("vente").style.display = "none";
            }
            if(role != 1){
                document.getElementById("utilisateurs").style.display = "none";
            }
        </script>
        <script src ="../Javascript/redirect.js"></script>
    </body>
</html>