<html>
 <body>
    <script>var data = sessionStorage.getItem('Alert');
    if(data != null){
        alert(data);
        sessionStorage.removeItem('Alert');
    }
    </script>

    <form action="../back/dbbFunctions.php" methode="POST" enctype = "multipart/form-data">
        <label for="type">type:</label>
        <select name="type" id="">
            <option value="1">micro onde</option>
            <option value="2">four</option>
            <option value="3">mixeur</option>
            <option value="4">petrin</option>
            <option value="5">sorbetiere</option>
            <option value="6">fer à repasser</option>
            <option value="7">fouet</option>
            <option value="7">aspirateur</option>
        </select>
        <label for="Label">Label:</label>
        <input type="text" name="Label">
        <label for="picture">image du produit :</label>
        <input type="file" name="picture">
        <label for="description">description :</label>
        <input type="text" name="description">
        <label for="price">prix:</label>
        <input type="number" name="price">
        <button type="submit">enregistrer</button>
    </form>
 </body>
</html>

