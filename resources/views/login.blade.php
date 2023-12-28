<!--
=========================================================
* Material Kit 2 - v3.0.4
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-kit 
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('admintemplate')}}/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{asset('admintemplate')}}/assets/img/favicon.png">
  <title>
    HOUSE CREAM
  </title>
 
  <link href="{{asset('admintemplate')}}/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="{{asset('admintemplate')}}/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
 {{--  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script> --}}
  <!-- Material Icons -->
 {{--  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet"> --}}
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('admintemplate')}}/assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
{{--   <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script> --}}
</head>

<body class="sign-in-basic">
  <!-- Navbar Transparent -->
  <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent ">
    <div class="container">
      <center>
      <a class="navbar-brand  text-white " href="" style="font-family: math; font-size:25px;font-weight:700;">
        WELCOME TO HOUSE CREAM
      </a>
      
    </center>
      
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="page-header align-items-start min-vh-100" style="background-image: url('{{asset('admintemplate')}}/assets/img/ice45.jpg');" loading="lazy">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-4 col-md-8 col-12 mx-auto">
          <div class="card z-index-0 fadeIn3 fadeInBottom">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Connexion</h4>
                <div class="row mt-3">
                  <h6 class="text-white font-weight-bolder text-center mt-2 mb-0">
                    Si vous n'avez pas un compte, veuillez contacter l'administrateur.</h6>
              </div>
            </div>
            <div class="card-body">
              @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
              <form class="text-start" action="{{route('loginAUth')}}"  method="POST" >
            @csrf
            @method('POST')
                <div class="input-group input-group-outline my-3">
                  <label class="form-label">Email</label>
                  <input
                      type="text"
                      class="form-control "
                      placeholder=""
                      name="email"
                      aria-label="Email"
                      aria-describedby="basic-addon1"
                      required=""
                    />
                </div>
                <div class="input-group input-group-outline mb-3">
                  <label class="form-label">Password</label>
                  <input
                      type="password"
                      class="form-control "
                      placeholder=""
                      name="password"
                      aria-label="Password"
                      aria-describedby="basic-addon1"
                      required=""
                    />
                </div>
                <div class="text-center">
                  <button  type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Login</button>
                </div>
                <p class="mt-4 text-sm text-center">
                  {{-- <a href="{{route('loginOublie')}}">Mot de passe oublié ?</a>  --}} 
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer position-absolute align-items-center bottom-2 py-2 w-100">
      <div class="container">
        
        {{-- <div class="align-items-center">
          <div class="col-12 col-md-12 text-center">
            <div class="copyright  text-sm text-white ">
              © <script>
                document.write(new Date().getFullYear())
              </script>,
              made with <i class="fa fa-heart" aria-hidden="true"></i> Dream Digital.
             
            </div>
          </div>
        </div>
        <div class="align-items-center">
          <div class="col-12 col-md-12 text-center">
           6565
        </div> --}}
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="{{asset('admintemplate')}}/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="{{asset('admintemplate')}}/assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="{{asset('admintemplate')}}/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="{{asset('admintemplate')}}/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
{{--   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script> --}}
  <script src="{{asset('admintemplate')}}/assets/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>
</body>

</html>