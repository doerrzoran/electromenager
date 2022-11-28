[...document.getElementsByClassName("event")].forEach(function(item) {
    item.addEventListener('click', function() {
      obj[this.id]();
    })
  }) 
  var obj = {
    creationDeCompte: function() {
        window.location.href = "../front/creationDeCompte.php"
    },
    connexion: function() {
        window.location.href = "../front/connexion.php"
    },
    vente: function() {
        window.location.href = "../front/miseEnVente.php"
    },
    produits: function() {
        window.location.href = "../back/displayProduct.php"
    },
    utilisateurs: function() {
        window.location.href = "../back/displayUsers.php"
    },
    title: function() {
        window.location.href = "../front/pageAccueil.php"
    },
    utilisateur: function() {
        window.location.href = "../back/DisplaySeller.php"
    },
    cart: function() {
        window.location.href = "../back/displayCart.php"
    },
    administrateur: function() {
        window.location.href = "../front/nouvelAdministrateur.php"
    }
  }