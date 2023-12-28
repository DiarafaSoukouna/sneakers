@extends('layouts.Dashboard')
@section('content')

<section class="my-5 py-5">
    <br>
    <br>
    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
        <div class="container border-bottom">
            <div class="row justify-space-between py-2">
              <div class="col-lg-3 me-auto">
                <p class="lead text-dark pt-1 mb-0">Form simple</p>
              </div>
              <div class="col-lg-3">
                <div class="nav-wrapper position-relative end-0">
                  <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#preview-forms-simple" role="tab" aria-selected="true">
                        <i class="fas fa-desktop text-sm me-2"></i> Formulaire
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#code-forms-simple" role="tab" aria-selected="false">
                        <i class="fas fa-code text-sm me-2"></i> liste
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        <div class="card-body">
            <div class="tab-content tab-space">
                <div class="tab-pane active" id="preview-forms-simple">
                  <div class="row" >
                      <div class="col-lg-11 mx-auto d-flex justify-content-center flex-column">
                      <h3 class="text-center" style="font-family: math">Commande</h3>
                      <form role="form" id="contact-form" action="{{route('Commandes.store')}}" method="post" autocomplete="off">
                        @csrf
                        @method('POST')
                          <div class="card-body">
                          <div class="row">
                            <div class="col-md-2">
                              <label class="form-label">Type</label>
                              <div class="input-group input-group mb-4">
                                <select class="form-control" id="type_id" name="type[]">
                                  <option value="">-- choisir --</option>
                                  @foreach ($SousCategorie as $Sous)
                                  <option value="{{$Sous->id}}">{{$Sous->libelle}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>
                              <div class="col-md-2">
                                <label class="form-label">Produit</label>
                                <div class="input-group input-group mb-4">
                                  <select class="form-control" id="Produit_id" name="produit[0]">

                                  </select>
                                </div>
                              </div>
                              <div class="col-md-2">
                                <label class="form-label">Prix</label>
                                <div class="input-group input-group mb-4">
                                  <select class="form-control price" id="price" name="price[0]">

                                  </select>
                                </div>
                              </div>
                              <div class="col-md-2">
                                <label class="form-label">Quantité</label>
                                <div class="input-group input-group mb-4">
                                  <input class="form-control quantity" id="quantity" value="1"  name="quantity[0]" type="number" placeholder="la quantité" onkeyup="calculerMontant(this)">  
                                </div>
                              </div>
                              <div class="col-md-2">
                                <label class="form-label">Montant</label>
                                <div class="input-group input-group mb-4">
                                  <input class="form-control" type="number" placeholder="le montant" name="montant[]" id="montant1">  
                                </div>
                              </div>
                              <div class="col-md-2">
                                <label class="form-label"></label>
                                <div class="input-group input-group mb-4">
                                    <button type="button" id="addcolumn" class="btn btn-info btn-sm me-2"><i class="fas fa-plus"></i></button>
                                </div>
                              </div>
                          </div>
                          <div id="dynamicadd"></div>
                           <div class="row">
                              <div class="col-md-12">
                              <button type="submit" class="btn bg-gradient-dark w-100">Valider</button>
                              </div>
                          </div>
                          </div>
                      </form>
                      </div>
                  </div>
              </div>
              <div class="tab-pane" id="code-forms-simple">
                <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table
                        id="datatable"
                        class="table table-striped table-bordered"
                      >
                        <thead>
                          <tr>
                            <th>Date de la commande</th>
                            <th>Montant </th>
                            <th>Quantité</th>
                            <th>Utilisateur</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($commande as $item)
                              <tr>
                                  <td>{{$item->date_commande}}</td>
                                  <td>{{$item->montant_total}}</td>
                                  <td>{{$item->quantite_total }}</td>
                                  <td>
                                    @foreach ($user as $users)
                                    @if ($item->user_id == $users->id)
                                     {{$users->name}}
                                     {{$users->firstname}}
                                    @endif
                                    @endforeach
                                  </td>
                                  <td>ok</td>
                              </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
        </div>
      {{-- </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mx-auto">
              <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-4">
               
              
            </div>
        </div>     --}}
  </section>
  <script>
    
    $(document).ready(function() {
        var i = 1;
        $('#addcolumn').click(function() {
          i++;
          var newRow = `
              <div id="row${i}" class="row">
                <div class="col-md-2">
                    <div class="input-group input-group mb-4">
                      <select class="form-control select2 type_id" name="type[]">
                        <option value="">-- choisir --</option>
                        @foreach ($SousCategorie as $Sous)
                        <option value="{{$Sous->id}}">{{$Sous->libelle}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="input-group input-group mb-4">
                      <select class="form-control Produit_id" name="produit[]">
                      </select>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="input-group input-group mb-4">
                      <select class="form-control price" name="price[]">

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

        $(document).on('keyup', rowSelector + ' .quantity', function() {
            var quantite = $(this).val();
            var prix = $(rowSelector + ' .price').val();

            if (quantite && prix) {
                var montant = quantite * prix;
                $(rowSelector + ' .montant').val(montant);
            }
        });

        $(document).on('change', rowSelector + ' .type_id', function() {
            var id_cl = $(this).val();
            var produitDropdown = $(rowSelector + ' .Produit_id');
            var montant = $(rowSelector + ' .montant');
            var price = $(rowSelector + ' .price');
            var quantity = $(rowSelector + ' .quantity');

            $.ajax({
                url: "./Type_get/" + id_cl,
                type: "GET",
                success: function(data) {
                    var plans = data.Type;
                    var html = "";
                    html += `<option value="">-- choisir --</option>`;

                    for (let i = 0; i < plans.length; i++) {
                        html += `<option value="${plans[i]['id']}">${plans[i]['libelle']}</option>`;
                    }
                    produitDropdown.html(html);
                    montant.val("");
                    quantity.val("1");
                    price.val("");
                }
            });
        });

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

        $(document).on('change', rowSelector + ' .price', function() {
          var selectedPrice = $(this).val().trim();  
          $(rowSelector + ' .montant').val(selectedPrice);
          $(rowSelector + ' .quantity').val("1");
        });

        // Fonction pour réinitialiser les champs Montant, Quantité, etc.
        // function resetFields(rowSelector) {
        //     $(rowSelector + ' .montant').val("");
        //     $(rowSelector + ' .quantity').val("1");
        // }

    // Attach other event handlers as needed...
}










// première affichage de du truc 
        $(document).on('click', '.remove_row', function() {
            var row_id = $(this).attr("id");
            $('#row' + row_id + '').remove();
        });
          $(document).on('keyup', '#quantity', function() {
            var quantite = this.value;
            var prix = $("#price").val();
            console.log(quantite);

            if (quantite && prix) {
                var montant = quantite * prix;
                $("#montant1").val(montant);
                console.log(montant);
            }
            })
          $('#type_id').change(function(event) {
                      var id_cl = this.value;
                      $.ajax({
                      url: "./Type_get/" + id_cl,
                      type: "GET",
                        success: function(data) {
                          console.log(data);
                          var plans = data.Type;
                          var html = "";
                          html += `<option value="">-- choisir --</option>`;

                          for (let i = 0; i < plans.length; i++) {
                          html += `<option  value="${plans[i]['id']}">${plans[i]['libelle']}</option>`;
                        }
                        $("#Produit_id").html(html);
                        document.getElementById("price").value = "";
                        document.getElementById("montant1").value = "";
                        document.getElementById("quantity").value = "1";
                      }
                      });
          });
          $('#Produit_id').change(function(event) {
      var id_cl = this.value;
      $.ajax({
          url: "./Price_get/" + id_cl,
          type: "GET",
          success: function(data) {
              console.log(data);
              var plans = data.Price;
              var html = "";
              var prices = plans[0]['price'].split(','); // Diviser la chaîne en un tableau de nombres

              // Mettre à jour la valeur du champ "montant" avec le premier prix
              document.getElementById("montant1").value = prices[0];
              document.getElementById("quantity").value = "1";

              // Mettre à jour le contenu du champ de sélection avec les options générées
              for (let i = 0; i < prices.length; i++) {
                  html += `<option value="${prices[i]}">${prices[i]}</option>`;
              }

              // Mettre à jour le contenu du champ de sélection avec les options générées
              $("#price").html(html);
          }
      });
  });

  $('#price').change(function(event) {
      var selectedPrice = $(this).val().trim();  // Utiliser trim() pour supprimer les espaces

      // Mettre à jour la valeur du champ "montant"
      document.getElementById("montant1").value = selectedPrice;
      document.getElementById("quantity").value = "1";
  });
});
  </script>
@endsection