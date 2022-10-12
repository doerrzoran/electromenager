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
        <input type="select" name="type">
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

