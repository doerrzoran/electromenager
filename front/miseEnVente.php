<html>
<head>
    <script src="https://app.simplefileupload.com/buckets/b8bc1f8a3fed9fd752a08588100a7e0b.js"></script>
</head>
 <body>
 <div><?php require_once "header.php"; ?></div>
    <script>var data = sessionStorage.getItem('Alert');
    if(data != null){
        alert(data);
        sessionStorage.removeItem('Alert');
    }
    </script>

<div class="text-primary" style="text-align: left; background-color: #FFFACD; border-radius: 15px; margin-right: 65%; font-size: 20px; min-width: 300px">
 <form action="../back/scriptProduct.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="seller" value="<?php echo $userID ?>">
        <div>
          <label for="type">type:</label>
          <select name="type">
            <option value="1">micro onde</option>
            <option value="2">four</option>
            <option value="3">mixeur</option>
            <option value="4">petrin</option>
            <option value="5">sorbetiere</option>
            <option value="6">fer à repasser</option>
            <option value="7">fouet</option>
            <option value="8">aspirateur</option>
          </select>
        </div>
        <div>
          <label for="Label">Label:</label>
          <input type="text" name="Label" required>
        </div>
        <div> 
          <label for="description">description :</label>
          <textarea name="description" id="" cols="50" rows="3" minlength="20" maxlength="30" required ></textarea>
        </div>
        <div>
          <label for="price">prix:</label>
          <input type="number" name="price" required>  
        </div>
        <input type="hidden" id="image" class="simple-file-upload" required>
        <input type="hidden" name="image" id="picture" required>
        <button type="submit">enregistrer</button>
    </form>
</div>
    
   
 </body>
 <?php
      require_once "footer.html"; 
  ?>
   <script>
    const message = document.getElementById('image');
    message.addEventListener('fileUploadSuccess', function () {
      document.getElementById('picture').value = this.value;
    });
  </script>
  <script src ="../Javascript/redirect.js"></script>
</html>



