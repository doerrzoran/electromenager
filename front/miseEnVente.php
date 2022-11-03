<html>
<head>
    <script src="https://app.simplefileupload.com/buckets/b8bc1f8a3fed9fd752a08588100a7e0b.js"></script>
</head>
 <body>
 <div><?php require_once "header.html"; ?></div>
 <?php require_once '../back/userId.php'; ?>
    <script>var data = sessionStorage.getItem('Alert');
    if(data != null){
        alert(data);
        sessionStorage.removeItem('Alert');
    }
    </script>

    <input type="file" id="image" class="simple-file-upload" required>
    <input type="text" name="image" id="picture" required> >

    <form action="../back/scriptProduct.php" method="POST" enctype="multipart/form-data">
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
        <input type="hidden" name="seller" value="<?php echo $userID ?>">
        <label for="Label">Label:</label>
        <input type="text" name="Label" required>
        <label for="picture">image du produit :</label>

        

        <label for="description">description :</label>
        <textarea name="description" id="" cols="30" rows="10" minlength="20" maxlength="30" required >description</textarea>
        <label for="price">prix:</label>
        <input type="number" name="price" required>  
        <button type="submit">enregistrer</button>
    </form>
 </body>
   <script>
    var message = document.getElementById('image').oninput = function () {
      document.getElementById('picture').value = this.value;
    };
  </script>
  <script src ="../Javascript/redirect.js"></script>
</html>



