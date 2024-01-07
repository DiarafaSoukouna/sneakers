@extends('layouts.Dashboard')
@section('content')

<section class="my-5 py-5">
    <br>
    <br>
    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
        <div class="container border-bottom">
           <div style="display: flex; justify-content:space-between">
            <div>la liste des produits</div>
              <div>
                <button  class="btn btn-info" data-bs-toggle="modal" data-bs-target="#addModal"> <i class="fas fa-plus-circle"> Nouveau Utilisateur</i> 
                </button>
              </div>
           </div> 
        </div>
        <br>
         
        <div class="card-body">
            <div class="tab-content tab-space">
                <div class="tab-pane active" id="preview-forms-simple">
                  
                <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table
                        id="datatable"
                        class="table table-striped table-bordered"
                      >
                        <thead>
                          <tr>
                            <th>Nom du produit</th>
                            <th>Prix </th>
                            <th>Type</th>
                            <th>Quantité disponible</th>
                            <th>Image</th>
                            <th>#</th>
                            <th>#</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($Type as $item)
                              <tr>
                                  <td>{{$item->libelle}}</td>
                                  <td>{{$item->price}}</td>
                                  @foreach ($SousCategorie as $items)
                                  @if ($items->id == $item->type)
                                  <td>{{$items->libelle }}</td>
                                  @endif
                                  @endforeach
                                  <td><a href="#" class="editable" data-type="text" data-name="quantite" data-pk="{{ $item->id }}"> {{$item->quantite_disponible }} </a> </td>
                                  <td> <img src="{{asset('admintemplate')}}/assets/img/{{$item->image}}" alt="" style="border-radius:80px;width:10%" ></td>
                                  <td class="text-center">
                                    <div class="buttons">
                                      <button type="button" id="{{ $item->id }}" onclick="showEditModal({{ $item->id }})" class="btn btn-info btn-sm me-2  user_edit"><i class="fas fa-edit"></i></button>
                                    </div>
                                  </td>
                                  {{-- <td><button class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button></td> --}}
                                  <td class="text-center">
                                    <div class="buttons">
                                     <form method="POST" action="{{ route('contenir.destroy', ['id' => $item->id]) }}" id="delete-form-{{ $item->id }}">
                                              @csrf
                                              @method('DELETE')
                                              <button type="button" onclick="showDeleteConfirmation({{ $item->id }})" class="btn btn-danger btn-sm me-2"><i class="fas fa-trash-alt"></i> </button>
                                      </form>
                                     </div>
                                  </td>
                              </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="code-forms-simple">
                <div class="row" >
                  <div class="col-lg-10 mx-auto d-flex justify-content-center flex-column">
                  <h3 class="text-center" style="font-family: math">Commande</h3>
                  @if(session('success'))
                  <div class="alert alert-success" style="--bs-alert-padding-y: 0.5rem !important; ">
                     <div class="text-center text-white">{{ session('success') }}</div> 
                  </div>
                  @endif
                  <form role="form" id="contact-form" action="{{route('Commandes.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                      <div class="card-body">
                      <div class="row">
                        <div class="col-md-2">
                          <label class="form-label">Categorie</label>
                          <div class="input-group input-group mb-4">
                            <select class="form-control" id="categorie">  
                              <option value="">-- choisir --</option>
                              @foreach($categorie as $cate)
                              <option value="{{$cate->id}}">{{$cate->libelle}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <label class="form-label">Type</label>
                          <div class="input-group input-group mb-4">
                            <select class="form-control type_id" id="type_id" name="type" required>
                              
                            </select>
                          </div>
                        </div>
                          <div class="col-md-2">
                            <label class="form-label">Nom</label>
                            <div class="input-group input-group mb-4">
                              <input class="form-control quantity"  name="libelle" type="text" placeholder="le nom">  
                            </div>
                          </div>
                          <div class="col-md-2">
                            <label class="form-label">Prix</label>
                            <div class="input-group input-group mb-4">
                              <input class="form-control quantity"  name="price" type="number" placeholder="le prix">  
                            </div>
                          </div>
                          <div class="col-md-2">
                            <label class="form-label">Quantité disponible</label>
                            <div class="input-group input-group mb-4">
                              <input class="form-control"   name="quantite_disponible" type="number" placeholder="la quantité">  
                            </div>
                          </div>
                         
                          {{-- <div class="col-md-2">
                            <label class="form-label"></label>
                            <div class="input-group input-group mb-4">
                                <button type="button" id="addcolumn" class="btn btn-info btn-sm me-2"><i class="fas fa-plus">add row</i></button>
                            </div>
                          </div> --}}
                      </div>
                      <div id="dynamicadd"></div>
                       <div class="row">
                          <div class="col-md-12">
                          <button type="submit" class="btn btn-primary w-100">Valider</button>
                          </div>
                      </div>
                      </div>
                  </form>
                  </div>
              </div>
              </div>
        </div>

       </div>
       
    {{--<div class="container">
        <div class="row">
            <div class="col-lg-12 mx-auto">
              <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-4">
               
              
            </div>
        </div>     --}}
  </section>
  <style>
    label{
      font-family: 'Times New Roman', Times, serif;
      font-size: 18px;
      color: black;
    }
  </style>
  <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel" style="font-family: 'Times New Roman', Times, serif">Add Produit</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="contact-form" action="{{route('Commandes.store')}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('POST')
            <div class="modal-body">
             <div class="form-group mt-3">
                <label
                  >Nom</label
                >
                <input
                  type="text"
                  class="form-control"
                  name="libelle"
                  placeholder="libelle" required
                />
              </div>
             <div class="form-group mt-3">
                <label
                  > Prix</label
                >
                <input
                  type="number"
                  class="form-control"
                  name="price"
                  placeholder="Prénom" required
                />
              </div>
             <div class="form-group mt-3">
                <label
                  > Quantité disponible</label
                >
                <input
                  type="number"
                  class="form-control"
                  name="quantite_disponible"
                  placeholder="disponible" required
                />
              </div>
             
              <div class="form-group">
                <label
                  >catégorie</label
                >
                <select class="form-control" id="categorie">  
                  <option value="">-- choisir --</option>
                  @foreach($categorie as $cate)
                  <option value="{{$cate->id}}">{{$cate->libelle}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label
                  >Sous catégorie</label
                >
                <select class="form-control" id="type_id" name="type" required>
                              
                </select>
              </div>
              <div class="form-group">
                <label
                  >Image</label
                >
                <input
                  type="file"
                  class="form-control"
                  name="image" id="imageInput"
                />
              </div>
            
            <div class="col-md-4">
                <img src="" id="imagePreview" style="max-width: 80%;">
            </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"> Modifier</i></button>
            </div>
        </form>
      </div>
    </div>
  </div>
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Produit</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="" id="edituser" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
       {{ method_field('PATCH') }}
            <div class="modal-body">
             <div class="form-group mt-3">
                <label
                  >Nom</label
                >
                <input
                  type="text"
                  class="form-control"
                  name="libelle"
                  id="libelle"
                  placeholder="libelle" required
                />
              </div>
             <div class="form-group mt-3">
                <label
                  > Prix</label
                >
                <input
                  type="number"
                  class="form-control"
                  name="price"
                  id="price"
                  placeholder="Prénom" required
                />
              </div>
             <div class="form-group mt-3">
                <label
                  > Quantité disponible</label
                >
                <input
                  type="number"
                  class="form-control"
                  name="quantite_disponible"
                  id="quantite_disponible"
                  placeholder="disponible" required
                />
              </div>
             
              <div class="form-group">
                <label
                  >Type du produit</label
                >
                <select class="form-control" name="type" id="type">
                  @foreach ($SousCategorie as $as )
                  <option value="{{$as->id}}"> {{$as->libelle}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label
                  >Image</label
                >
                <input
                  type="file"
                  class="form-control images"
                  name="image"
                />
              </div>
              <div class="col-md-4">
                <img  id="image" src="" class=".image" style="max-width: 80%;">
            </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"> Modifier</i></button>
            </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    // Utilisez jQuery pour écouter le changement de l'input file
      $('#imageInput').change(function() {
          // Obtenez le fichier sélectionné
          var file = this.files[0];

          if (file) {
              // Créez un objet FileReader pour lire le fichier
              var reader = new FileReader();

              // Définissez une fonction de rappel pour être appelée une fois que la lecture est terminée
              reader.onload = function(e) {
                  // Mettez à jour l'attribut src de l'élément img avec les données de l'image
                  $('#imagePreview').attr('src', e.target.result);
              };

              // Commencez à lire le fichier en tant que Data URL
              reader.readAsDataURL(file);
          }
      });
      $('.images').change(function() {
          // Obtenez le fichier sélectionné
          var file = this.files[0];

          if (file) {
              // Créez un objet FileReader pour lire le fichier
              var reader = new FileReader();

              // Définissez une fonction de rappel pour être appelée une fois que la lecture est terminée
              reader.onload = function(e) {
                  // Mettez à jour l'attribut src de l'élément img avec les données de l'image
                  $('#image').attr('src', e.target.result);
              };

              // Commencez à lire le fichier en tant que Data URL
              reader.readAsDataURL(file);
          }
      });

      $.fn.editable.defaults.mode = "inline";
      $.ajaxSetup({
          headers:{
             'X-CSRF-TOKEN': '{{ csrf_token() }}'
          }
      });
      $('.editable').editable({
          url: "{{route('quantite.update')}}",
          type: 'text',
          pk:1,
          name:'quantite',
          title:'entrer'
      });
  </script>
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
      function showEditModal (ids) {
          var lien="./produit_edit/"
          var liena='./produit_update/'
          $('#edituser').attr('action',liena+ids)
          $('#editModal').modal('show')
          $.ajax({
                url:lien+ids,
                method: "GET",
                success: function (response) {
                    console.log(response);
                $('#libelle').val(response.produit.libelle);
                $('#price').val(response.produit.price);
                $('#quantite_disponible').val(response.produit.quantite_disponible);
                $('#type').val(response.produit.type);
                // $('#image').val(response.produit.image);
                $('#image').attr('src', "{{asset('admintemplate')}}/assets/img/"+response.produit.image);
                }
          }); 
      }
  </script>
  <script>
    
    $(document).ready(function() {
        var i = 1;
        $('#addcolumn').click(function() {
          i++;
          var newRow = `
              <div id="row${i}" class="row">
                <div class="col-md-2">
                    <div class="input-group input-group mb-4">
                      <select class="form-control select2 type_id" name="type[]" required>
                        <option value="">-- choisir --</option>
                        @foreach ($categorie as $Sous)
                        <option value="{{$Sous->id}}">{{$Sous->libelle}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="input-group input-group mb-4">
                      <select class="form-control Produit_id" name="produit[]" required>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="input-group input-group mb-4">
                      <select class="form-control price" name="price[]" required>

                      </select>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="input-group input-group mb-4">
                      <input class="form-control quantity" type="number" name="quantity[]" placeholder="la quantité">  
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="input-group input-group mb-4">
                      <input class="form-control montant" type="number" placeholder="le montant" name="montant[]">  
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="input-group input-group mb-4">
                      <button type="button" id="${i}" class="btn btn-danger btn-sm remove_row">x</button>
                    </div>
                  </div>
              </div>
          `;

          $('#dynamicadd').append(newRow);

          // Attacher des gestionnaires d'événements à cette nouvelle ligne si nécessaire...
          attachEventHandlersToRow(i);
      });

      function attachEventHandlersToRow(rowId) {
        var rowSelector = '#row' + rowId;
       
        $(document).on('change', rowSelector + ' .Produit_id', function() {
            var id_cl = $(this).val();
            var priceDropdown = $(rowSelector + ' .price');
            var montantDropdown = $(rowSelector + ' .montant');
            var quantity = $(rowSelector + ' .quantity');


            $.ajax({
                url: "./Price_get/" + id_cl,
                type: "GET",
                success: function(data) {
                    var plans = data.Price;
                    var html = "";
                    var prices = plans[0]['price'].split(',');

                    priceDropdown.val(prices[0]);
                    montantDropdown.val(prices[0]);
                    quantity.val("1");
                    for (let i = 0; i < prices.length; i++) {
                        html += `<option value="${prices[i]}">${prices[i]}</option>`;
                    }

                    priceDropdown.html(html);
                }
            });
        });

    // Attach other event handlers as needed...
}
// première affichage de du truc 
        $(".type_id").select2();
        $(document).on('click', '.remove_row', function() {
            var row_id = $(this).attr("id");
            $('#row' + row_id + '').remove();
        });
         
    $('#categorie').change(function(event) {
      var id_cl = this.value;
      // alert(id_cl);
      $.ajax({
          url: "./Price_get/" + id_cl,
          type: "GET",
          success: function(data) {
              console.log(data);
              var plans = data.Price;
              var html = "";

              // Mettre à jour le contenu du champ de sélection avec les options générées
              for (let i = 0; i < plans.length; i++) {
                  html += `<option value="${plans[i]['id']}">${plans[i]['libelle']}</option>`;
              }
              // Mettre à jour le contenu du champ de sélection avec les options générées
              $("#type_id").html(html);
          }
      });
  });

});
  </script>
@endsection