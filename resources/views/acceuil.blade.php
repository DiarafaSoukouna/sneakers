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
{{-- <button  class="btn btn-white mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="fas fa-plus-circle"> Nouveau Utilisateur</i> </button>
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modification Utilisateurs</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
          <button type="submit" class="btn btn-primary"><i class="fas fa-save"> Modifier</i></button>
      </div>
    </div>
  </div>
</div> 
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Choisissez le prix</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Contenu du modal -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div> --}}
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
                  <img src="{{asset('admintemplate')}}/assets/img/food1.avif"alt="" width="450" style="border-radius: 10px" onclick="showDetails('food');Get_produit('8', '1');">
                </a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info">
                <h5 class="font-weight-bolder mt-3">Ice Cream</h5>
                <a>
                  <img src="{{asset('admintemplate')}}/assets/img/oklm.avif" alt="" width="450" style="border-radius: 10px" onclick="showDetails('iceCream');Get_produit('1', '2');">
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
                  <img src="{{asset('admintemplate')}}/assets/img/cafe.avif" width="450" height="300" alt="" style="border-radius: 10px"onclick="showDetails('coffee');Get_produit('9', '3');">
                </a>
              </div>
            </div>
          </div>
        </div>
        <style>
          .div {
            display: flex;
            flex-wrap: wrap;
          }
          .diva{
            background-color: #f0f0f0;
            padding: .3rem 1rem;
            margin: .2rem .15rem;
            border-radius: 10rem;
            font-weight: 600;
            color: blue;
          }
        </style>
        <div id="details-food" style="display: none;">
          <div style="display: flex">
            <i class="fas fa-arrow-left" style="padding: 5px" onclick="showAllimage();"> Retour </i>
            <div style="margin-left: 30%">
              <h4>Détails Fast Food...</h4>
            </div>
          </div>
          <div class="div">
            @forEach($sous_categorie as $sous)
            @if ($sous->categorie == 1)
              <a class="diva" onclick="Get_produit('{{$sous->id}}','1');">
                {{$sous->libelle}}
              </a>
            @endif
            @endforeach
          </div>
            <div id="price1">

            </div>
        </div>
        
        <div id="details-iceCream" style="display: none;">
          <div style="display: flex">
            <i class="fas fa-arrow-left" style="padding: 5px" onclick="showAllimage();"> Retour </i>
            <div style="margin-left: 30%">
              <h4 style="font-family: match; font-size: 22px; margin-bottom: 10px">Nos offres d'Ice Cream...</h4>
            </div>
          </div>
          <div class="div">
            @forEach($sous_categorie as $sous)
            @if ($sous->categorie == 2)
              <a class="diva" onclick="Get_produit('{{$sous->id}}', '2');">
                {{$sous->libelle}}
              </a>
            @endif
            @endforeach
          </div>
          <div id="price2">

          </div>
        </div>
        <div id="details-drink" style="display: none;">
          <div style="display: flex">
            <i class="fas fa-arrow-left" style="padding: 5px" onclick="showAllimage();"> Retour </i>
            <div style="margin-left: 30%">
              <h4>Détails Drink...</h4>
            </div>
          </div>
          {{-- <div class="div">
            @forEach($sous_categorie as $sous)
            @if ($sous->categorie == 4)
              <a class="diva">
                {{$sous->libelle}}
              </a>
            @endif
            @endforeach
          </div> --}}
          <div class="row">
            @foreach ($produits as $produit)
            @if ($produit->id_categorie == 4)
            <div class="col-lg-4">
              <div style="margin-bottom: 20px">
                <div class="card">
                  <img src="{{asset('admintemplate')}}/assets/img/boi2.avif" width="200"  style="border-radius: 5px" class="card-img-top mx-auto d-block" onclick="showDetailss('{{$produit->ids}}', '{{$produit->libelle}}', '{{$produit->price}}', 'boi2.avif')"><br>
                  <div style="margin-left: 10%;">
                    <label for="" style="font-size: 20px;color: black;font-weight: 600;font-family: math;">{{$produit->libelle}}</label>
                    <p><span>{{$produit->price}} Fr</span> </p>
                  </div>
                </div>
              </div>
            </div>
            @endif
            @endforeach
           </div>
        </div>
        
        <div id="details-coffee" style="display: none;">
          <div style="display: flex">
            <i class="fas fa-arrow-left" style="padding: 5px" onclick="showAllimage();"> Retour </i>
            <div style="margin-left: 30%">
              <h4>Détails Coffee...</h4>
            </div>
          </div>
          <div class="div">
            @forEach($sous_categorie as $sous)
            @if ($sous->categorie == 3)
              <a class="diva" onclick="Get_produit('{{$sous->id}}', '3');">
                {{$sous->libelle}}
              </a>
            @endif
            @endforeach
            <div id="price3">

            </div>
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
            image: image,
            quantite: 1
        });

        // Vérifier si le produit a plusieurs prix
        if (prixProduit.includes(',')) {
            // Si oui, divisez la chaîne en un tableau de prix
            var prixArray = prixProduit.split(',');

            // Afficher le modal avec les différents prix
            var modal = document.getElementById('myModal');
            var modalBody = modal.querySelector('.modal-body');
            modalBody.innerHTML = '';

            prixArray.forEach(function(prix) {
                var prixButton = document.createElement('button');
                prixButton.textContent = prix.trim() + ' Fr';
                prixButton.className = 'btn btn-primary';
                prixButton.onclick = function() {
                    // Ajouter le produit avec le prix sélectionné au panier
                    panier.push({
                        idProduit: idProduit,
                        nomProduit: nomProduit,
                        image: image,
                        prixProduit: parseFloat(prix.trim()), // Convertir le prix en nombre
                        quantite: 1
                    });

                    // Mettre à jour l'affichage du panier
                    updateCartDisplay();

                    // Fermer le modal
                    $('#myModal').modal('hide');
                };

                modalBody.appendChild(prixButton);
            });

            // Afficher le modal
            $('#myModal').modal('show');
        } else {
            // Si un seul prix, ajouter directement au panier
            panier[panier.length - 1].prixProduit = parseFloat(prixProduit);
            updateCartDisplay();
        }
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
function Get_produit(idProduit,id) {
    $.ajax({
          url: "./Get_produit/" + idProduit,
          type: "GET",
          success: function(data) {
              console.log('data', data);
              var plans = data.Type;
              var html = "";
              html += "<div class='row'>";
              for (let i = 0; i < plans.length; i++) {
                  html += `
                  <div class="col-lg-4">
                    <div style="margin-bottom: 20px">
                      <div class="card">
                        <img src="{{asset('admintemplate')}}/assets/img/cafe.avif" width="200"  style="border-radius: 5px" class="card-img-top mx-auto d-block" onclick="showDetailss('${plans[i]['id']}', '${plans[i]['libelle']}', '${plans[i]['price']}', 'cafe.avif')"><br>
                        <div style="margin-left: 10%;">
                        <label for="" style="font-size: 20px;color: black;font-weight: 600;font-family: math;">${plans[i]['libelle']}</label>
                         <p><span>${plans[i]['price']} Fr</span> </p>
                        </div>
                      </div>
                    </div>
                  </div>`;
              }
              html += "</div>";
              // Mettre à jour le contenu du champ de sélection avec les options générées
              var price = $("#price" + id)
              price.html(html);
          }
      });
 }
</script>
@endsection
