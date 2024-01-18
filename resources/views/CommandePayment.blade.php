@extends('layouts.Dashboard')
@section('content')
<header class="header-2">
  <div class="page-header min-vh-25 relative" style="background-image: url('{{asset('admintemplate')}}/assets/img/chaussures.jpg')">
    <span class="mask opacity-4"></span>
    <div class="container">
       <div class="row">
        <div class="col-lg-7 text-center mx-auto">
            <br>
        </div>
      </div> 
    </div>
  </div>
</header>


  <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
    <br>
    <div class="text-center">
        <h1 class="text-dark pt-3 mt-n5" style="font-family: math">La liste des commandes</h1>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table
          id="datatable"
          class="table table-striped table-bordered"
        >
          <thead>
            <tr>
              <th>Numéro</th>
              <th>Date de la commande</th>
              <th>Montant</th>
              <th>Effectuée par</th>
              <th>#</th>
              {{--<th>#</th> --}}
            </tr>
          </thead>
          <tbody>
            @foreach ($commande as $item)
                <tr>
                    <td>{{$id++}}</td>
                    <td>{{$item->date_commande}}</td>
                    <td>{{$item->montant_total}}</td>
                    @foreach ($user as $users)
                    @if($users->id == $item->user_id)
                    <td>{{$users->firstname}}</td>
                    @endif
                    @endforeach
                    <td>
                        @if($item->statut == 0)
                        <div class="buttons">
                            <button href="#" type="button" id="{{ $item->id }}" onclick="showEditModal({{ $item->id }})" data-bs-toggle="modal" data-bs-target="#editModal" class="btn btn-dark btn-sm me-2  user_edit"><i class="fas fa-money-bill-alt" style="font-size: 16px"> payment</i></button>
                        </div>
                        @endif
                        <div class="buttons">
                        @if($item->statut == 1)
                           <i class="fas fa-check-circle me-2" style="color:rgb(24, 92, 24); font-size:20px">Payé</i>  
                        @if(auth()->user()->profil_id == 1)
                            <form method="POST" action="{{ route('commande.reset', ['id' => $item->id]) }}">
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}
                                     <button href="#" type="submit" class="btn btn-danger btn-sm me-2" ><i class="fas fa-paint-brush" style="font-size: 16px">Annuler</i></button>
                            </form>
                             
                        @endif
                        @endif
                        </div>
                    </td>
                    {{-- <td class="text-center">
                      <div class="buttons">
                        <button href="#" type="button" id="{{ $item->id }}" onclick="showEditModal({{ $item->id }})" class="btn btn-info btn-sm me-2  user_edit"><i class="fas fa-edit"></i></button>
                      </div>
                    </td>
                    <td class="text-center">
                      <div class="buttons">
                       <form method="POST" action="{{ route('utilisateurs.destroy', ['id' => $item->id]) }}" id="delete-form-{{ $item->id }}">
                                @csrf
                                @method('DELETE')
                                <button type="button" onclick="showDeleteConfirmation({{ $item->id }})" class="btn btn-danger btn-sm me-2"><i class="fas fa-trash-alt"></i> </button>
                            </form>
                        </div>
                      </td> --}}
                </tr>
                
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="font-family: math">Detail de commande effectueé le<label class="text-dark"  style="font-size: 18px" id="date"></label> </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" id="editcommande" method="POST">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
            <div class="modal-body">
                <div class="table-responsive">
                    <table
                    id="datatable"
                    class="table table-striped table-bordered"
                    >
                    <thead>
                        <tr>
                        <th>Nom</th>
                        <th>Prix</th>
                        <th>Quantité</th>
                        <th>Montant</th>
                        <th>Image</th>
                        </tr>
                    </thead>
                    <tbody id="detailcommande">
                        
                    </tbody>
                    </table>
                    <div id="montantcommande">

                    </div>
                </div>
            </div>
            
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
          <button type="submit" class="btn btn-primary"><i class="fas fa-save"> valider</i></button>
          </div>
      </form>
    </div>
  </div>
</div>
<script>

function confirmPayment(){
        Swal.fire({
            title: "Do you want to save the changes?",
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: "Save",
          }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
              Swal.fire("Saved!", "", "success");
            } else if (result.isDenied) {
              Swal.fire("Changes are not saved", "", "info");
            }
          });
    }
</script>
    {{-- <script src="{{asset('admintemplate')}}/dist/js/sweetalert.js"></script>
    <script>
      function showDeleteConfirmation(userId) {
          Swal.fire({
          title: "Êtes vous vraiment sûre de vouloir supprimer?",
          icon: "warning",
          showCancelButton: true,
          confirmButtonText: "Confirmez",
          cancelButtonText: "Annuler",
      }).then((result) => {
          if (result.isConfirmed) {
              // L'utilisateur a confirmé la suppression, soumettez le formulaire
              document.getElementById('delete-form-' + userId).submit();
          }
      });
      }
  </script>--}}
  <script>
  
      function showEditModal (ids) {
          var lien="./commande_edit/"
          var liena='./commande_update/'
          $('#editcommande').attr('action',liena+ids)
        //   $('#editModal').modal('show')
          $.ajax({
                url:lien+ids,
                method: "GET",
                success: function (response) {
                    console.log(response.commande);
                    var plans = response.commande;
                    var html = "";
                    var html2 = "";
                    var total = 0;
                    var timestampString  = plans[0]['creation'];
                    // Créer un objet Date avec la timestamp
                    var timestamp = Date.parse(timestampString);

                    // Créer un objet Date avec la timestamp
                    var date = new Date(timestamp);

                    // Obtenir les composants de la date
                    var jour = ('0' + date.getDate()).slice(-2);
                    var mois = ('0' + (date.getMonth() + 1)).slice(-2); // Ajoutez 1 car les mois commencent à 0
                    var annee = date.getFullYear();
                    var heures = ('0' + date.getHours()).slice(-2);
                    var minutes = ('0' + date.getMinutes()).slice(-2);

                    // Formater la date comme souhaité (par exemple : 09/01/2020 à 16:30)
                    var dateFormatee = jour + '/' + mois + '/' + annee + ' à ' + heures + ':' + minutes;

                    $("#date").text(dateFormatee);
                // Mettre à jour le contenu du champ de sélection avec les options générées
                    for (let i = 0; i < plans.length; i++) {
                        html += `<tr>
                                    <td>${plans[i]['libelle']}</td>
                                    <td>${plans[i]['price_commande']}</td>
                                    <td>${plans[i]['quantity']}</td>
                                    <td>${parseInt(plans[i]['quantity']) * parseInt(plans[i]['price_commande']) }</td>
                                    <td><img src="{{asset('admintemplate')}}/assets/img/${plans[i]['image']}" width="60" style="border-radius: 50%" alt=""></td>
                                </tr>`;
                                total += parseInt(plans[i]['quantity']) * parseInt(plans[i]['price_commande']) 
                    }
                    $("#detailcommande").html(html);
                    html2 += `<thead>
                                <tr>
                                    <th width="417" style=" float: right;">
                                        Montant
                                    </th>
                                    <th width="350">
                                        ${total}
                                    </th>
                                </tr>
                            </thead>`;
                    $("#montantcommande").html(html2);
                }
          }); 
      }
  </script> 
 @endsection
