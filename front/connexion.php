<html>
    <?php require_once "header.html"; ?>
    <script>var data = sessionStorage.getItem('Alert');
    if(data != null){
        alert(data);
        sessionStorage.removeItem('Alert');
    }
    </script>
    <body>
        <div><?php require_once "header.html"; ?></div>
        <form id="contactForm" action="../back/scriptConnexion.php" method="POST" enctype="multipart/form-data">
            <label for="mail">adresse email</label>
            <input id="email" type="text" name="mail" pattern=".+@g+.com" required>
            <label for="password">mot de passe</label>
            <input type="password" name="password" required>
            <button type="submit" id="event">vous identifier</button>
        </form>
    </body>
    <script src ="../Javascript/redirect.js"></script>
</html>