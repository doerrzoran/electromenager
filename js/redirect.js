
$(function() {
    $('form').submit(function() {
        $.ajax({
            type: 'POST',
            url: '../back/scriptConnexion.php',
            data: { username: $(this).name.value, 
                    password: $(this).password.value }
        });
        return false;
    }); 
})

const redirect = document.getElementById("redirect").onclick = function(){
    location.href = 'pageAccueil.php';
}