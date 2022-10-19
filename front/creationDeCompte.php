<html>
    <script>var data = sessionStorage.getItem('Alert');
        if(data != null){
            alert(data);
            sessionStorage.removeItem('Alert');
        }
        </script>
    <body>
        <?php require_once "header.html"; ?>
        <form action="../back/scriptCreationDeCompte.php" method="POST" enctype="multipart/form-data">
            <label for="nom">nom:</label>
            <input type="text" name="nom">
            <label for="prenom">prenom:</label>
            <input type="text" name="prenom">
            <label for="mail">addresse mail</label>
            <input type="email" name="mail">
            <label for="Password">mot de passe</label>
            <input type="password" name="password">
            <label for="password2">confirmer le mot de pase</label>
            <input type="password" name="password2">
            <input type="submit"> </input>
        </form>
    </body>
    <script src ="../Javascript/redirect.js"></script>

</html>