<html>
<head>
    <script src="https://app.simplefileupload.com/buckets/b8bc1f8a3fed9fd752a08588100a7e0b.js"></script>
</head>
    <body>
    <input type="hidden" name="images" id="images" class="simple-file-upload" value="C:\MAMP\htdocs\electromenager\pictures\test.txt">
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
            if(role > 0){
              document.getElementById("creationDeCompte").style.display = "none";
              document.getElementById("connexion").style.display = "none";
              if(role != 1){
                document.getElementById("utilisateurs").style.display = "none";
              }
            }
        </script>
        <script src ="../Javascript/redirect.js"></script>
        <img src="the-returned-url"/>
    </body>
</html>