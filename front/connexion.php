<html>
    <?php 
    require_once "header.php"; 
    ?>
    <script>var data = sessionStorage.getItem('Alert');
    if(data != null){
        alert(data);
        sessionStorage.removeItem('Alert');
    }
    </script>
    <body>
        <div><?php require_once "header.php"; ?></div>

        <div class="text-primary" style="text-align: left; background-color: #FFFACD; border-radius: 15px; margin-right: 70%; font-size: 20px;">
          <form id="contactForm" action="../back/scriptConnexion.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="mail">adresse email</label>
              <input id="email" type="text" name="mail" pattern="+@+.com" required>
            </div>
            <div class="form-group">
              <label for="password">mot de passe</label>
              <input type="password" name="password" minlength="5" maxlength="13" required>  
            </div>
              <button type="submit" id="event">vous identifier</button>
          </form>
        </div>
        
    </body>
    <?php
        require_once "footer.html"; 
    ?>
    <script src ="../Javascript/redirect.js"></script>
</html>