[...document.getElementsByClassName("event")].forEach(function(item) {
    item.addEventListener('click', function() {
      obj[this.id]();
    })
  }) 
  var obj = {
    creationDeCompte: function() {
        window.location.href = "../front/creationDeCompte.html"
    },
    connexion: function() {
        window.location.href = "../front/connexion.html"
    }
    vente: function() {
        window.location.href = "../front/miseEnVente.php"
    }
  }