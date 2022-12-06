<html>
    <script>var data = sessionStorage.getItem('Alert');
        if(data != null){
            alert(data);
            sessionStorage.removeItem('Alert');
        }
        </script>
    <body>
        <?php 
        require_once "header.html"; 
        ?>
        <form action="../back/scriptCreationDeCompte.php" method="POST" enctype="multipart/form-data">
            <label for="nom" >nom:</label>
            <input type="text" name="nom" required>
            <label for="prenom">prenom:</label>
            <input type="text" name="prenom" required>
            <label for="mail">addresse mail</label>
            <input type="email" name="mail" pattern="+@g+.com" required>
            <label for="Password">mot de passe</label>
            <input type="password" name="password" minlength="5" maxlength="10" required >
            <label for="password2">confirmer le mot de pase</label>
            <input type="password" name="password2" minlength="5" maxlength="10" required>
            <input type="submit"> </input>
        </form>
    </body>
    <?php
    require_once "footer.html"; 
    ?>
    <script src ="../Javascript/redirect.js"></script>

</html>