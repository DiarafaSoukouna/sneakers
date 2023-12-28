@extends('layouts.Dashboard')
@section('content')
<section>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modification mot de passe</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('user.password')}}" id="form" method="POST">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}
            <div class="modal-body">
             <div class="form-group mt-3">
                <label
                  >Ancien mot de passe</label
                >
                <input
                  type="password"
                  class="form-control"
                  name="old_password"
                  placeholder="Ancien mot de passe" required
                />
              </div>
             <div class="form-group mt-3">
                <label
                  > Nouveau mot de passe</label
                >
                <input
                  type="password"
                  class="form-control"
                  name="password"
                  placeholder="Nouveau Mot de passe" required
                />
              </div>
             <div class="form-group mt-3">
                <label
                  > Confirmez le mot de passe</label
                >
                <input
                  type="password"
                  class="form-control"
                  name="password_confirmation"
                  placeholder="Confirmez le mot depasse" required
                />
              </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"> Enrégistrer</i></button>
            </div>
        </form>
      </div>
    </div>
  </div>
  <br>
    <div class="page-header min-vh-100">
      <div class="container">
        <div class="row">
          <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
            <div class="position-relative h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('{{asset('admintemplate')}}/assets/img/pizza3.avif'); background-size: cover;" loading="lazy"></div>
          </div>
          <div class="col-xl-5 col-lg-6 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
            <div class="card d-flex blur justify-content-center shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                <div class="bg-gradient-primary shadow-primary border-radius-lg p-3">
                  <h3 class="text-white text-center text-primary mb-0">Profil</h3>
                </div>
              </div>
              <div class="card-body">
                <p class="pb-3">
                  vous pouvez modifié vos informations  <button  class="btn btn-white mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="fas fa-plus-circle"> Modifier le mot de passe</i> </button>
                </p>
                <form id="contact-form"  action="{{ route('user.update', ['id' => Auth::user()->id]) }}" method="POST" autocomplete="off">
                  {{ csrf_field() }}
                   {{ method_field('PATCH') }}
                   @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                  <div class="card-body p-0 my-3">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="input-group input-group-static mb-4">
                          <label>Nom</label>
                          <input type="text" class="form-control" value="{{$user->name}}" name="name">
                        </div>
                      </div>
                      <div class="col-md-6 ps-md-2">
                        <div class="input-group input-group-static mb-4">
                          <label>Prénom</label>
                          <input type="text" class="form-control" value="{{$user->firstname}}" name="firstname">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="input-group input-group-static mb-4">
                          <label>Téléphone</label>
                          <input type="number" class="form-control" value="{{$user->phone}}" name="phone">
                        </div>
                      </div>
                      <div class="col-md-6 ps-md-2">
                        <div class="input-group input-group-static mb-4">
                          <label>Email</label>
                          <input type="email" class="form-control" value="{{$user->email}}" name="email">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="input-group input-group-static mb-4">
                          <label>Profil</label>
                          <select
                          class="form-control"
                          name="profil_id"
                          placeholder="Telephone" required readonly
                          >@foreach ($profil as $item)
                          @if($item->id == $user->profil_id)
                          <option value="{{$item->id}}" readonly>{{$item->libelle}}</option>
                          @endif
                          @endforeach
                          </select>
                        </div>
                      </div>
                      @if(auth()->user()->profil_id == 2 || auth()->user()->profil_id == 4)
                      <div class="col-md-6 ps-md-2">
                        <div class="input-group input-group-static mb-4">
                          <label>Etablissement</label>
                          <select
                          class="form-control" name="id_etablissement" placeholder="Etablissement" required >
                          @foreach ($etablissement as $item)
                          @if($item->id_etablissement == auth()->user()->profil_id)
                          <option value="{{$item->id_etablissement}}" readonly>{{$item->nom_etablissement}}</option>
                          @endif
                          @endforeach
                          </select>
                        </div>
                      </div>
                      @endif
                    </div>
                    <div class="row">
                      <div class="col-md-12 text-center">
                        <button type="submit" class="btn bg-gradient-primary mt-3 mb-0">Enrégistrer</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
      $(document).ready(function () {
          $('.form').submit(function (e) {
              e.preventDefault();
  
              var form = $(this);
  
              $.ajax({
                  type: form.attr('method'),
                  url: form.attr('action'),
                  data: form.serialize(),
                  success: function (response) {
                      // Gérez ici la soumission réussie du formulaire
                  },
                  error: function (xhr, status, error) {
                      var errors = xhr.responseJSON.errors;
  
                      $.each(errors, function (key, value) {
                          // Affichez les erreurs de validation à l'utilisateur
                          alert(value[0]);
                      });
                  },
              });
          });
      });
  </script>
  

@endsection