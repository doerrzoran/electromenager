<html>
 <body>
    <script>var data = sessionStorage.getItem('Alert');
    if(data != null){
        alert(data);
        sessionStorage.removeItem('Alert');
    }
    </script>

    <form action="../back/dbbFunctions.php" methode="POST" enctype = "multipart/form-data">
        <label for="type"></label>
        <input type="list" name="type">
        <label for="Label"></label>
        <input type="text" name="Label">
        <label for="picture"></label>
        <input type="picture" name="picture">
        <label for="description"></label>
        <input type="text" name="description">
        <label for="price"></label>
        <input type="price" name="price">
        <button type="submit"></button>
    </form>
 </body>
</html>

