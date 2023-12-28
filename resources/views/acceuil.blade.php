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
          <h2 class="text-white pt-3 ">Rapport mensuel  <br/> de l'établissement sanitaire primaire </h2>
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
          <div class="col-md-4 position-relative">
            <div class="p-3 text-center">
              <h1 class="text-gradient text-primary"><span id="state1" countTo="75">0</span></h1>
              <h5 class="mt-3"><a href="#">Rapports</a></h5>
              <p class="text-sm font-weight-normal">Les rapports de générés par les établissements.</p>
            </div>
            <hr class="vertical dark">
          </div>
          <div class="col-md-4 position-relative">
            <div class="p-3 text-center">
              @foreach ($commande as $com)
              <h1 class="text-gradient text-primary"> <span id="state2" countTo="{{$com->montant_total}}">0</span></h1>
              @endforeach
              <h5 class="mt-3"><a href="{{route('Commandes.index')}}">Commandes</a></h5>
              <p class="text-sm font-weight-normal">Les commandes effectueés aujourd'hui. </p>
            </div>
            <hr class="vertical dark">
          </div>
          <div class="col-md-4">
            <div class="p-3 text-center">
              @foreach ($user as $com)
              <h1 class="text-gradient text-primary"> <span id="state3" countTo="{{$com->numbers}}">0</span></h1>
              @endforeach
              <h5 class="mt-3"><a href="#">Utilisateurs</a></h5>
              <p class="text-sm font-weight-normal">Les personnes qui ont le droit d'accès au systéme.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="my-5 py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 ms-auto">
        <div class="row justify-content-start">
          <div class="col-md-6">
            <div class="info">
              <i class="material-icons text-gradient text-primary text-3xl">content_copy</i>
              <h5 class="font-weight-bolder mt-3">Fast Food</h5>
              <img src="{{asset('admintemplate')}}/assets/img/food1.avif"alt="" style="border-radius: 10px">
            </div>
          </div>
          <div class="col-md-6">
            <div class="info">
              <i class="material-icons text-gradient text-primary text-3xl">flip_to_front</i>
              <h5 class="font-weight-bolder mt-3">Ice Cream</h5>
              <img src="{{asset('admintemplate')}}/assets/img/oklm.avif" alt="" style="border-radius: 10px">
            </div>
          </div>
        </div>
        <div class="row justify-content-start mt-5">
          <div class="col-md-6 mt-3">
            <i class="material-icons text-gradient text-primary text-3xl">price_change</i>
            <h5 class="font-weight-bolder mt-3">Drink</h5>
            <img src="{{asset('admintemplate')}}/assets/img/boi2.avif" alt="" style="border-radius: 10px">
          </div>
          <div class="col-md-6 mt-3">
            <div class="info">
              <i class="material-icons text-gradient text-primary text-3xl">devices</i>
              <h5 class="font-weight-bolder mt-3">Coffee</h5>
              <img src="{{asset('admintemplate')}}/assets/img/cafe.avif" width="640" height="415" alt="" style="border-radius: 10px">
            </div>
          </div>
        </div>
      </div>
      {{-- <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
        <div class="rotating-card-container">
          <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">
            <div class="front front-background" style="background-image: url(https://images.unsplash.com/photo-1569683795645-b62e50fbf103?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80); background-size: cover;">
              <div class="card-body py-7 text-center">
                <i class="material-icons text-white text-4xl my-3">touch_app</i>
                <h3 class="text-white"> <img src="{{asset('admintemplate')}}/assets/img/embleme.png" height="100" width="100"></h3>
                {{-- <img src="{{asset('admintemplate')}}/assets/img/dirb.png" height="55" width="330"> -}}
                 <h3 class="text-white">Direcction de l'informatique et de l'infomation sanitaire(DIIS)</h3> 
                {{-- <p class="text-white opacity-8">SYSTEME D'INFORMATION DE GESTION(SIG)</p> -}}
              </div>
            </div>
            <div class="back back-background" style="background-image: url(https://images.unsplash.com/photo-1498889444388-e67ea62c464b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1365&q=80); background-size: cover;">
              <div class="card-body pt-7 text-center">
                <h3 class="text-white">(SIG)</h3>
                <p class="text-white opacity-8"> Rapport mensuel de l'établissement sanitaire primaire</p>
                @if(auth()->user()->profil_id == 1)
                <a href="{{route('Utilisateurs.index')}}" class="btn btn-white btn-sm w-50 mx-auto mt-3">Ajouter un utilisateur</a>
                @endif
          @if(auth()->user()->profil_id == 2 || auth()->user()->profil_id == 4)
                <a href="{{route('Rapports.index')}}" class="btn btn-white btn-sm w-50 mx-auto mt-3">Rédiger un rapport</a>
                @else
                <a href="{{route('Rapports.create')}}" class="btn btn-white btn-sm w-50 mx-auto mt-3">Les Rapports</a>
               
                @endif
              </div>
            </div>
          </div>
        </div>
      </div> --}}
      
    </div>
  </div>
</section>

</div>
    @endsection
