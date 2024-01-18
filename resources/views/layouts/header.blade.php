
      <div class="container position-sticky z-index-sticky top-0"><div class="row"><div class="col-12">
        <nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid px-0">
            <a class="navbar-brand font-weight-bolder ms-sm-3" href="{{route('dashboard')}}" data-placement="bottom" >
              <!-- <img src="{{asset('admintemplate')}}/assets/img/log.png" alt="photo logo" width='60'> -->
            <i class="fas fa-home"> SONINKE SNEAKERS</i>  
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
              <ul class="navbar-nav navbar-nav-hover ms-auto">
                @if(auth()->user()->profil_id == 1)
                <li class="nav-item dropdown dropdown-hover mx-2">
                  <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="material-icons opacity-6 me-2 text-md"></i>
                    Parametres
                    <img src="{{asset('admintemplate')}}/assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2">
                  </a>
                  <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages">
                    <div class="d-none d-lg-block">
                      <a href="{{route('Utilisateurs.index')}}" class="dropdown-item border-radius-md">
                        <span>Utilisateurs</span>
                      </a>
                    </div>
                    <div class="d-none d-lg-block">
                      <a href="{{route('Commandes.index')}}" class="dropdown-item border-radius-md">
                        <span>Produits</span>
                      </a>
                    </div>
                    <div class="d-none d-lg-block">
                      <a href="{{route('CommandePayment.index')}}" class="dropdown-item border-radius-md">
                        <span>Commandes</span>
                      </a>
                    </div>
                  </div>
                </li>
                @endif
                
                <li class="nav-item my-auto ms-3 ms-lg-0">
                  
                  <a href="{{route('utilisateurs.profil')}}" class="btn btn-sm  bg-gradient-secondary  mb-0 me-1 mt-2 mt-md-0">{{ Auth::user()->name }}</a>
                  
                </li>
                <li class="nav-item my-auto ms-3 ms-lg-0">
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                  <button href="#" class="btn btn-sm  bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0">Déconnexion</button>
                </form>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
        </div></div></div>