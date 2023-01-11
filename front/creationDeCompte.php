<html>
    <script>var data = sessionStorage.getItem('Alert');
        if(data != null){
            alert(data);
            sessionStorage.removeItem('Alert');
        }
        </script>
    <body>
        <?php 
        require_once "header.php"; 
        ?>
        <div class="text-primary" style="text-align: left; background-color: #FFFACD; border-radius: 15px; margin-right: 65%; font-size: 20px; min-width: 250px">
        <form action="../back/scriptCreationDeCompte.php" method="POST" enctype="multipart/form-data" style="font-size: 20px;">
            <div class="form-group">
                <label for="nom" >nom:</label>
                <input type="text" name="nom" required>
            </div>
            <div class="form-group">
                <label for="prenom">prenom:</label>
                <input type="text" name="prenom" required>
            </div>
            <div class="form-group">
                <label for="mail">addresse mail</label>
                <input type="email" name="mail" pattern="+@g+.com" required>
            </div>
            <div class="form-group">
                <label for="Password">mot de passe</label>
                <input type="password" name="password" minlength="5" maxlength="10" required >
            </div>
            <div class="form-group">
                <label for="password2">confirmer le mot de pase</label>
                <input type="password" name="password2" minlength="5" maxlength="10" required>
            </div>
                <input type="submit"> </input>
        </form>
        </div>
    <?php
    require_once "footer.html"; 
    ?>
    <script src ="../Javascript/redirect.js"></script>

</html>