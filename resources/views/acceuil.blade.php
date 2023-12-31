@extends('layouts.Dashboard')
@section('content')
<header class="header-2">
  <div class="page-header min-vh-75 relative" style="background-image: url('{{asset('admintemplate')}}/assets/img/foof5.jpg');background-size:cover">
    <span class="mask opacity-4"></span>
    <div class="container">
      <div class="row">
        <div class="col-lg-7 text-center mx-auto"> 
          {{--  <p class="lead text-white mt-3">Direcction de l'informatique et de l'infomation sanitaire(DIIS) </p> --}}
          {{-- <h2 class="text-white pt-3 mt-n5">SYSTEME D'INFORMATION DE GESTION(SIG)</h2> --}}
          {{-- <h2 class="text-white pt-3 ">Rapport mensuel  <br/> de l'établissement sanitaire primaire </h2> --}}
          <div class="buttons">
            <a href="{{route('Commandes.index')}}" type="button" class="btn btn-white mt-4">Ajouter une commande</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

<section class="pt-3 pb-4" id="count-stats">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 mx-auto py-3">
        <div class="row">
          <div class="col-md-4">
            <div class="p-3 text-center">
              @foreach ($user as $com)
              <h1 class="text-gradient text-primary"> <span id="state3" countTo="{{$com->numbers}}">0</span></h1>
              @endforeach
              <h5 class="mt-3"><a href="#">Utilisateurs</a></h5>
              <p class="text-sm font-weight-normal">Les personnes qui ont le droit d'accès au systéme.</p>
            </div>
          </div><div class="col-md-4 position-relative">
            <div class="p-3 text-center">
              @foreach ($nbre_commandes as $com)
              <h1 class="text-gradient text-primary"> <span id="state2" countTo="{{$com->nbre}}">0</span></h1>
              @endforeach
              <h5 class="mt-3"><a href="{{route('Commandes.index')}}">Nombre de commande</a></h5>
              <p class="text-sm font-weight-normal">Le nombre de commande effectueé aujourd'hui. </p>
            </div>
            <hr class="vertical dark">
          </div>
          <div class="col-md-4 position-relative">
            <div class="p-3 text-center">
              @foreach ($commande as $com)
              <h1 class="text-gradient text-primary"> <span id="state1" countTo="{{$com->montant_total}}">0</span></h1>
              @endforeach
              <h5 class="mt-3"><a href="#">Montant total des commande</a></h5>
              <p class="text-sm font-weight-normal">Le montant total des commandes effectueés aujourd'hui.</p>
            </div>
            <hr class="vertical dark">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .produit-details, .produit-ligne{
    display: flex; justify-content: space-between;
  }
  .border1{
    border-bottom: 2px solid black;
  }
</style>
<section class="my-5 py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="" style="border-radius:10px;padding:2px;color:black;font-size:50px"> 
         <i class="fas fa-cart-plus"> PANIER</i> 
         <div class="row" id="panier" style="font-size: 15px">

         </div>
        </div>
      </div>
      <div class="col-lg-9 ms-auto">
        <div class="img">
          <div class="row justify-content-start">
            <div class="col-md-6">
              <div class="info">
                <h5 class="font-weight-bolder mt-3">Fast Food</h5>
                <a>
                  <img src="{{asset('admintemplate')}}/assets/img/food1.avif"alt="" width="450" style="border-radius: 10px" onclick="showDetails('food')">
                </a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info">
                <h5 class="font-weight-bolder mt-3">Ice Cream</h5>
                <a>
                  <img src="{{asset('admintemplate')}}/assets/img/oklm.avif" alt="" width="450" style="border-radius: 10px" onclick="showDetails('iceCream')">
                </a>
              </div>
            </div>
          </div>
          <div class="row justify-content-start mt-5">
            <div class="col-md-6 mt-3">
              <h5 class="font-weight-bolder mt-3">Drink</h5>
              <a>
                <img src="{{asset('admintemplate')}}/assets/img/boi2.avif" width="450" alt="" style="border-radius: 10px" onclick="showDetails('drink')">
              </a>
            </div>
            <div class="col-md-6 mt-3">
              <div class="info">
                <h5 class="font-weight-bolder mt-3">Coffee</h5>
                <a>
                  <img src="{{asset('admintemplate')}}/assets/img/cafe.avif" width="450" height="300" alt="" style="border-radius: 10px"onclick="showDetails('coffee')">
                </a>
              </div>
            </div>
          </div>
        </div>
        
        <div id="details-food" style="display: none;">
          <!-- Contenu pour Fast Food -->
          <div style="display: flex">
            <i class="fas fa-arrow-left" style="padding: 5px" onclick="showAllimage();"> Retour </i>
            <div style="margin-left: 30%">
              <h4>Détails Fast Food...</h4>
            </div>
          </div>
           <div class="row">
            @foreach ($produits as $produit)
            @if ($produit->id_categorie == 1)
            <div class="col-lg-4">
              <img src="{{asset('admintemplate')}}/assets/img/food1.avif" width="200"  style="border-radius: 5px"  onclick="showDetailss('{{$produit->ids}}', '{{$produit->libelle}}', '{{$produit->price}}', 'food1.avif')"><br>
              <div style="margin-left: 20%">
                <h5 class="text-primary"> <span>{{$produit->price}}</span> Fr</h5>
              </div>
              <label for="" style="font-size: 17px;color: black;font-weight: 600;font-family: math;">{{$produit->libelle}}</label>
            </div>
            @endif
            @endforeach
           </div>
        </div>
        
        <div id="details-iceCream" style="display: none;">
          <div style="display: flex">
            <i class="fas fa-arrow-left" style="padding: 5px" onclick="showAllimage();"> Retour </i>
            <div style="margin-left: 30%">
              <h4>Détails Ice Cream...</h4>
            </div>
          </div>
          <div class="row">
            @foreach ($produits as $produit)
            @if ($produit->id_categorie == 2)
            <div class="col-lg-4">
              <img src="{{asset('admintemplate')}}/assets/img/oklm.avif" width="200"  style="border-radius: 5px"  onclick="showDetailss('{{$produit->ids}}', '{{$produit->libelle}}', '{{$produit->price}}', 'oklm.avif')"><br>
              <div style="margin-left: 20%">
                <h5 class="text-primary"> <span>{{$produit->price}}</span> Fr</h5>
              </div>
              <label for="" style="font-size: 17px;color: black;font-weight: 600;font-family: math;">{{$produit->libelle}}</label>
            </div>
            @endif
            @endforeach
           </div>
        </div>
        <div id="details-drink" style="display: none;">
          <div style="display: flex">
            <i class="fas fa-arrow-left" style="padding: 5px" onclick="showAllimage();"> Retour </i>
            <div style="margin-left: 30%">
              <h4>Détails Drink...</h4>
            </div>
          </div>
          <div class="row">
            @foreach ($produits as $produit)
            @if ($produit->id_categorie == 3)
            <div class="col-lg-4">
              <img src="{{asset('admintemplate')}}/assets/img/boi2.avif" width="200"  style="border-radius: 5px" onclick="showDetailss('{{$produit->ids}}', '{{$produit->libelle}}', '{{$produit->price}}', 'boi2.avif')"><br>
              <div style="margin-left: 20%">
                <h5 class="text-primary"> <span>{{$produit->price}}</span> Fr</h5>
              </div>
              <label for="" style="font-size: 17px;color: black;font-weight: 600;font-family: math;">{{$produit->libelle}}</label>
            </div>
            @endif
            @endforeach
           </div>
        </div>
        
        <div id="details-coffee" style="display: none;">
          <div style="display: flex">
            <i class="fas fa-arrow-left" style="padding: 5px" onclick="showAllimage();" onclick="showDetailss('{{$produit->ids}}', '{{$produit->libelle}}', '{{$produit->price}}')"> Retour </i>
            <div style="margin-left: 30%">
              <h4>Détails Coffee...</h4>
            </div>
          </div>
          <div class="row">
            @foreach ($produits as $produit)
            @if ($produit->id_categorie == 4)
            <div class="col-lg-4">
              <img src="{{asset('admintemplate')}}/assets/img/cafe.avif" width="200"  style="border-radius: 5px" onclick="showDetailss('{{$produit->ids}}', '{{$produit->libelle}}', '{{$produit->price}}', 'cafe.avif')"><br>
              <div style="margin-left: 20%">
                <h5 class="text-primary"> <span>{{$produit->price}}</span> Fr</h5>
              </div>
              <label for="" style="font-size: 17px;color: black;font-weight: 600;font-family: math;">{{$produit->libelle}}</label>
            </div>
            @endif
            @endforeach
           </div>
        </div>
      </div>
    </div>
  </div>
</section>

</div>
<script>
  function showDetails(category) {
    // Cacher le contenu de la classe .img
    document.querySelector('.img').style.display = 'none';

    // Masquer toutes les divs détaillées
    hideAllDetails();

    // Afficher la div détaillée correspondante à la catégorie
    document.getElementById('details-' + category).style.display = 'block';
  }


  function showAllimage() {
      // Masquer toutes les divs détaillées
      document.querySelector('.img').style.display = 'block';
      hideAllDetails();
      
  }
  function hideAllDetails() {
      // Masquer toutes les divs détaillées
      var detailDivs = document.querySelectorAll('[id^="details-"]');
      detailDivs.forEach(function (div) {
          div.style.display = 'none';
      });
  }
  var panier = [];  // Utilisez un tableau pour stocker les produits dans le panier

function showDetailss(idProduit, nomProduit, prixProduit, image) {
    // Vérifier si le produit est déjà dans le panier
    var produitExistant = panier.find(function(produit) {
        return produit.idProduit === idProduit;
    });

    if (produitExistant) {
        // Si le produit existe déjà, augmenter la quantité
        produitExistant.quantite += 1;
    } else {
        // Sinon, ajouter le produit au panier avec une quantité de 1 par défaut
        panier.push({
            idProduit: idProduit,
            nomProduit: nomProduit,
            prixProduit: prixProduit,
            image: image,
            quantite: 1
        });
    }

    // Mettre à jour l'affichage du panier
    updateCartDisplay();
}

function updateCartDisplay() {
    // Mettez à jour l'affichage du panier ici
    var panierDiv = document.getElementById('panier');
    panierDiv.innerHTML = "";  // Effacer le contenu actuel du panier

    // Parcourir les produits dans le panier et les ajouter à l'affichage
    panier.forEach(function(produit) {
        // Créer une div pour chaque produit
        var produitDiv = document.createElement('div');
        produitDiv.className = 'produit';  // Ajouter une classe pour le style CSS

        // Ajouter du code HTML avec des balises pour chaque produit
        produitDiv.innerHTML = `
          <div class="border1">
            <div class="produit-ligne">
                <img src="{{asset('admintemplate')}}/assets/img/${produit.image}" width="60" alt="${produit.nomProduit}">
                <span class="nom-produit">${produit.nomProduit}</span>
                <span class="quantite">Quantité: ${produit.quantite}</span>
            </div>
            <div class="produit-details">
                <span class="montant text-primary">Montant:  ${produit.prixProduit * produit.quantite} Fr</span>
                <button class="btn btn-sm btn-danger" onclick="supprimerProduit(${produit.idProduit})">X</button> 
            </div>
          </div><br/>
        `;

        // Ajouter la div du produit au panier
        panierDiv.appendChild(produitDiv);
    });
}
function supprimerProduit(idProduit) {
    // Ajoutez ici votre logique pour supprimer le produit du panier en utilisant l'id du produit
    // Par exemple, vous pouvez utiliser une boucle pour trouver l'index du produit dans le tableau panier et le supprimer
    
    for (var i = 0; i < panier.length; i++) {
        if ( parseInt(panier[i].idProduit) === idProduit) {
            panier.splice(i, 1); // Supprimer le produit du tableau
            break; // Sortir de la boucle une fois que le produit est trouvé et supprimé
        }
    }
    console.log("moh", idProduit); //
    // Mettez à jour l'affichage du panier après la suppression
    updateCartDisplay();
}

</script>
@endsection
