@extends('layouts.Dashboard')
@section('content')
<header class="header-2">
  <div class="page-header min-vh-25 relative" style="background-image: url('{{asset('admintemplate')}}/assets/img/foof5.jpg')">
    <span class="mask opacity-4"></span>
    <div class="container">
       <div class="row">
        <div class="col-lg-7 text-center mx-auto">
          <h1 class="text-white pt-3 mt-n5">La liste des utilisateurs</h1>
           <div class="buttons">
            <button  class="btn btn-white mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="fas fa-plus-circle"> Nouveau Utilisateur</i> </button>
          </div>
        </div>
      </div> 
    </div>
  </div>
</header>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nouvelle Utilisateur</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('Utilisateurs.store')}}" method="POST">
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
                name="name"
                placeholder="Nom" required
              />
            </div>
           <div class="form-group mt-3">
              <label
                > Prénom</label
              >
              <input
                type="text"
                class="form-control"
                name="firstname"
                placeholder="Prénom" required
              />
            </div>
           <div class="form-group mt-3">
              <label
                > Email</label
              >
              <input
                type="email"
                class="form-control"
                name="email"
                placeholder="Email" required
              />
            </div>
            <div class="form-group">
              <label
                >Téléphone</label
              >
              <input
                type="number"
                class="form-control"
                name="phone"
                placeholder="Telephone" required
              />
            </div>
            <div class="form-group">
              <label
                >Profil</label
              >
              <select
                class="form-control"
                name="profil_id"
                placeholder="Telephone" required
              >
              <option value="" selected disabled>-- choisir --</option>
              @foreach ($profil as $item)
               <option value="{{$item->id}}">{{$item->libelle}}</option>
              @endforeach
              </select>
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
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modification Utilisateurs</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" id="edituser" method="POST">
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
                name="name"
                id="name"
                placeholder="Nom" required
              />
            </div>
           <div class="form-group mt-3">
              <label
                > Prénom</label
              >
              <input
                type="text"
                class="form-control"
                name="firstname"
                id="firstname"
                placeholder="Prénom" required
              />
            </div>
           <div class="form-group mt-3">
              <label
                > Email</label
              >
              <input
                type="email"
                class="form-control"
                name="email"
                id="email"
                placeholder="Email" required
              />
            </div>
            <div class="form-group">
              <label
                >Téléphone</label
              >
              <input
                type="number"
                class="form-control"
                name="phone"
                id="phone"
                placeholder="Telephone" required
              />
            </div>
            <div class="form-group">
              <label>Profil</label>
              <select
                class="form-control" name="profil_id" id="profil_id" placeholder="Telephone" required >
              <option value="" selected disabled>-- choisir --</option>
              @foreach ($profil as $item)
               <option value="{{$item->id}}">{{$item->libelle}}</option>
              @endforeach
              </select>
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
<div class="modal fade" id="resetModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Réinitialiser le mot de passe de <strong id="name_reset"></strong></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" id="resetuser" method="POST">
          {{ csrf_field() }}
     {{ method_field('PATCH') }}
          <div class="modal-body">
           <div class="form-group mt-3">
              <input
                type="text"
                class="form-control"
                name="password_reset" value="12345678"
                placeholder="Nom" readonly
              />
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
  <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
    <div class="card-body">
      <div class="table-responsive">
        <table
          id="datatable"
          class="table table-striped table-bordered"
        >
          <thead>
            <tr>
              <th>Nom</th>
              <th>Prénom</th>
              
              <th>Télephone</th>
              <th>Email</th>
              <th>Profil</th>
              <th>#</th>
              <th>#</th>
              <th>#</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($user as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->firstname}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->phone}}</td>
                    <td>
                        @foreach ($profil as $prof)
                            @if ($item->profil_id == $prof->id)
                                 {{$prof->libelle}}
                            @endif
                        @endforeach
                    </td>
                    <td class="text-center">
                      <div class="buttons">
                        <button href="#" type="button" id="{{ $item->id }}" onclick="showEditModal({{ $item->id }})" class="btn btn-info btn-sm me-2  user_edit"><i class="fas fa-edit"></i></button>
                        </div>
                    </td>
                    <td class="text-center">
                      <div class="buttons">
                        <button href="#" type="button" id="{{ $item->id }}" onclick="showResetModal({{ $item->id }})" class="btn btn-info btn-sm me-2  user_edit"><i class="fas fa-lock"></i></button>
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
                      </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
  </script>
  <script>
  
      function showEditModal (ids) {
          var lien="./user_edit/"
          var liena='./user_update/'
          $('#edituser').attr('action',liena+ids)
          $('#editModal').modal('show')
          $.ajax({
                url:lien+ids,
                method: "GET",
                success: function (response) {
                    console.log(response);
                $('#name').val(response.user.name);
                $('#firstname').val(response.user.firstname);
                $('#email').val(response.user.email);
                $('#phone').val(response.user.phone);
                $('#profil_id').val(response.user.profil_id);
                $('#id_etablissement').val(response.user.id_etablissement);
                }
          }); 
      }
      
  </script>
  <script>
      function showResetModal (ids) {
          var lien="./user_edit/"
          var liena='./user_reset/'
          $('#resetuser').attr('action',liena+ids)
          $('#resetModal').modal('show')
          $.ajax({
                url:lien+ids,
                method: "GET",
                success: function (response) {
                    console.log(response);
                $('#name_reset').text(response.user.name);
                }
          }); 
      }
      
  </script>

    @endsection
