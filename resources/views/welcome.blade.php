@extends('layouts.Dashboard')
@section('content')
<header class="header-2">
  <div class="page-header min-vh-65 relative" style="background-image: url('{{asset('admintemplate')}}/assets/img/bg2.jpg')">
    <span class="mask bg-gradient-primary opacity-4"></span>
    <div class="container">
      <div class="row">
        <div class="col-lg-7 text-center mx-auto">
          <h1 class="text-white pt-3 mt-n5">Rapport en cours de rédaction</h1>
          
        </div>
      </div>
    </div>
  </div>
</header>


<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
  
  
  <form action="{{route('Rapports.store')}}" method="POST">
    @csrf
    @method('POST')
  <section class="my-5 py-5">
 
    <div class="container mt-sm-5 mt-3">
      <div class="row">
        <div class="col-lg-3">
          <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
            <h3>Rapport</h3>
            <h6 class="text-secondary font-weight-normal pe-3"></h6>
          </div>
        </div>
  
        <div class="col-lg-9">
          <div class="row mt-3">
            <!-- Buttons color -->
  <div class="col-12">
    <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
      <div class="container border-bottom">
        <div class="row justify-space-between py-2">
          <div class="col-lg-3 me-auto">
            <p class="lead text-dark pt-1 mb-0">Réalisateur du rapport</p>
          </div>
         
        </div>
      </div>
      <div class="tab-content tab-space">
        <div class="tab-pane active" id="preview-btn-color">
          <div class="container text-center py-2 mt-2">
          {{-- <iframe width="100%" height="450px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
            <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.0.4" rel="stylesheet" /> --}}
            <div class="container text-center py-2 mt-2">
             
                <div class="row">
                  <div class="col-8 mx-auto">
                    <div class="input-group input-group-static">
                      <label>Version</label>
                      <input type="text" name="version" class="form-control" >
                    </div>
                    <div class="input-group input-group-static">
                      <label>Nom</label>
                      <input type="text" name="Nom" class="form-control" >
                    </div>
                    </nav>
                    <div class="input-group input-group-static">
                      <label>Prénon</label>
                      <input type="text" name="Prenom" class="form-control" >
                    </div>
                    <div class="input-group input-group-static">
                      <label>Fonction</label>
                      <input type="text" name="Fonction" class="form-control" >
                    </div>
                    <div class="input-group input-group-static">
                      <label>Contact</label>
                      <input type="number" name="Contact" class="form-control" >
                    </div>
                    <div class="input-group input-group-static">
                      <label>Observation</label>
                      <textarea type="text" name="observation" class="form-control" required>
                      </textarea>
                    </div>
                    <div class="buttons">
                      <button type="submit"  class="btn btn-primary mt-4">Valider </button>
                    </div>
                  </div>
              
                </div>
            </div>
  
            '></iframe>
        </div>
       
      </div>
    </div>
  </div>
  
  <!-- Buttons gradient -->
  
  
  <!-- Buttons outline -->
  
  <!-- Buttons sizes -->

  
  <!-- Buttons icons -->
 
  
          </div>
         

        </div>
      </div>
      <div class="row pt-lg-6">
        <div class="col-lg-3">
          <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
            <h3>I.1. Activités de consultation et de soins</h3>
            {{-- <h6 class="text-secondary font-weight-normal pe-3">6+ elements that you need for text manipulation and insertion</h6> --}}
          </div>
        </div>
        <div class="col-lg-9">
          <div class="row mt-3">
            <!-- Typography -->
  <div class="col-12">
    <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
      <div class="container border-bottom">
        <div class="row justify-space-between py-2">
          <div class="col-lg-3 me-auto">
            <p class="lead text-dark pt-1 mb-0">#</p>
          </div>
          
        </div>
      </div>
      <div class="tab-content tab-space">
        <div class="tab-pane active" id="preview-typo">
           <div class="row text-center py-2 mt-2">
              <div class="row">
                <div class="col-10 mx-auto">
                  <p>Des activités de consultations et de soins ont-elles été réalisées ou enregistrées dans l établissement au cours du mois.</p>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Oui
                    </label>
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                      Non
                    </label>
                  </div>
      <div class="buttons">
        <button  class="btn btn-primary mt-4">Enregistrer </button>
      </div>
    </div>
    </div>
        </div>
            
        </div>
      
      </div>
      
    </div>
  </div>
  <div class="info-horizontal bg-gradient-primary border-radius-xl d-block d-md-flex p-4">
        <div class="ps-0 ps-md-3 mt-3 mt-md-0">
          <p class="text-white">
            -Consultant = patient qui vient avec un problème de santé pour la première fois.<br>
            -Consultation = nombre de visites au praticien pour un problème de santé y compris les contrôles.
          </p>
          
        </div>
      </div>
          </div>
        </div>
      </div>
      <div class="row pt-lg-6">
        <div class="col-lg-3">
          <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
            <h3>I.1.1 Activités de soins curantifs</h3>
            <h6 class="text-secondary font-weight-normal pe-3">
              Noter le nombre de consultants, consultations, mises en observation. Durée totale des mise en observation en heur,
              cas référés et cas contre-référés enregistrés dans la formation sanitaire au cours du mois
            </h6>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="row mt-3">
            <!-- Alerts -->
  <div class="col-12">
    <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
      <div class="container border-bottom">
        <div class="row justify-space-between py-2">
          <div class="col-lg-3 me-auto">
            <p class="lead text-dark pt-1 mb-0"> Tableau 1</p>
          </div>
   
        </div>
      </div>
      <div class="tab-content tab-space">
        <div class="tab-pane active" id="preview-alert">
          {{-- <iframe width="100%" height="550px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
            <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
            <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.0.4" rel="stylesheet" /> --}}
            <div class="row text-center py-2 mt-2">
              <div class="row">
                <div class="col-11 mx-auto">
      
      <div class="card">
        <div class="table-responsive">
          {{-- <form action="{{route('soins_curatifs.store')}}" method="POST"> --}}
            {{-- @csrf
            @method('POST') --}}
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Activités</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">0-4 ans</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">5-09 ans</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">10-14 ans</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">15-19 ans</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">20-24 ans</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">25-49 ans</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">50 ans et plus</th>
              </tr>
            </thead>
            <tbody>
            <tr>
                <td class="text-xxs">
                  <input type="text" readonly class="form-control" name="libelle[0]" value="Nombre de consultants" >
                
                </td>
                <td><input type="number" name="tranche_0_4[0]" class="form-control" required></td>
                <td><input type="number" name="tranche_5_9[0]" class="form-control" required></td>
                <td><input type="number" name="tranche_10_14[0]" class="form-control" required></td>
                <td><input type="number" name="tranche_15_19[0]" class="form-control" required></td>
                <td><input type="number" name="tranche_20_24[0]" class="form-control" required></td>
                <td><input type="number" name="tranche_25_49[0]" class="form-control" required></td>
                <td><input type="number" name="tranche_50_p[0]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly class="form-control" name="libelle[1]" value="Nombre de consultations" >
                  </div>
                </td>
                <td><input type="number" name="tranche_0_4[1]" class="form-control" required></td>
                <td><input type="number" name="tranche_5_9[1]" class="form-control" required></td>
                <td><input type="number" name="tranche_10_14[1]" class="form-control" required></td>
                <td><input type="number" name="tranche_15_19[1]" class="form-control" required></td>
                <td><input type="number" name="tranche_20_24[1]" class="form-control" required></td>
                <td><input type="number" name="tranche_25_49[1]" class="form-control" required></td>
                <td><input type="number" name="tranche_50_p[1]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly class="form-control" name="libelle[2]" value="Nombre de MO" >
                  </div>
                </td>
                <td><input type="number" name="tranche_0_4[2]" class="form-control" required></td>
                <td><input type="number" name="tranche_5_9[2]" class="form-control" required></td>
                <td><input type="number" name="tranche_10_14[2]" class="form-control" required></td>
                <td><input type="number" name="tranche_15_19[2]" class="form-control" required></td>
                <td><input type="number" name="tranche_20_24[2]" class="form-control" required></td>
                <td><input type="number" name="tranche_25_49[2]" class="form-control" required></td>
                <td><input type="number" name="tranche_50_p[2]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly class="form-control" name="libelle[3]" value="Durée totale des MO (en heure)" >
                  </div>
                </td>
                <td><input type="number" name="tranche_0_4[3]" class="form-control" required></td>
                <td><input type="number" name="tranche_5_9[3]" class="form-control" required></td>
                <td><input type="number" name="tranche_10_14[3]" class="form-control" required></td>
                <td><input type="number" name="tranche_15_19[3]" class="form-control" required></td>
                <td><input type="number" name="tranche_20_24[3]" class="form-control" required></td>
                <td><input type="number" name="tranche_25_49[3]" class="form-control" required></td>
                <td><input type="number" name="tranche_50_p[3]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly class="form-control" name="libelle[4]" value="Nombre de cas référés vers une autre structure sanitaire" >
                  </div>
                </td>
                <td><input type="number" name="tranche_0_4[4]" class="form-control" required></td>
                <td><input type="number" name="tranche_5_9[4]" class="form-control" required></td>
                <td><input type="number" name="tranche_10_14[4]" class="form-control" required></td>
                <td><input type="number" name="tranche_15_19[4]" class="form-control" required></td>
                <td><input type="number" name="tranche_20_24[4]" class="form-control" required></td>
                <td><input type="number" name="tranche_25_49[4]" class="form-control" required></td>
                <td><input type="number" name="tranche_50_p[4]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly class="form-control" name="libelle[5]" value=Nombre de fiches de contre référence reçues" >
                  </div>
                </td>
                <td><input type="number" name="tranche_0_4[5]" class="form-control" required></td>
                <td><input type="number" name="tranche_5_9[5]" class="form-control" required></td>
                <td><input type="number" name="tranche_10_14[5]" class="form-control" required></td>
                <td><input type="number" name="tranche_15_19[5]" class="form-control" required></td>
                <td><input type="number" name="tranche_20_24[5]" class="form-control" required></td>
                <td><input type="number" name="tranche_25_49[5]" class="form-control" required></td>
                <td><input type="number" name="tranche_50_p[5]" class="form-control" required></td>
              </tr>
            </tbody>
          </table>
          <div class="buttons">
            <button  class="btn btn-primary mt-4">Valider </button>
          </div>
        </div>
      </div>
    </div> 
    </div>
  </div>
  
            {{-- '></iframe> --}}
        </div>
        
      </div>
    </div>
  </div>
  
          </div>



      
 
        </div>
      </div>
  
      <div class="row pt-lg-6">
        <div class="col-lg-3">
          <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
            <h3>I.1.2 Activités de soins infirmiers et petite chirurgie</h3>
            <h6 class="text-secondary font-weight-normal pe-3">
              Noter le nombre de consultants, consultations, mises en observation. Durée totale des mise en observation en heur,
              cas référés et cas contre-référés enregistrés dans la formation sanitaire au cours du mois
            </h6>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="row mt-3">
            <!-- Alerts -->
  <div class="col-12">
    <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
      <div class="container border-bottom">
        <div class="row justify-space-between py-2">
          <div class="col-lg-3 me-auto">
            <p class="lead text-dark pt-1 mb-0"> Tableau 2</p>
          </div>
   
        </div>
      </div>
      <div class="tab-content tab-space">
        <div class="tab-pane active" id="preview-alert">
          <div class="row text-center py-2 mt-2">
              <div class="row">
                <div class="col-11 mx-auto">
      
      <div class="card">
        <div class="table-responsive">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Soins</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nombre</th>
              </tr>
            </thead>
            <tbody>
            <tr>
                <td class="text-xxs">
                  <input type="text" readonly class="form-control" name="libelle1[0]" value="Pensements" >
                
                </td>
                <td><input type="number" name="nombre1[0]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle1[1]" class="form-control" value="Injections" >
                  </div>
                </td>
                <td><input type="number" name="nombre1[1]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle1[2]" class="form-control" value="Perfusions" >
                  </div>
                </td>
                <td><input type="number" name="nombre1[2]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle1[3]" class="form-control" value="Autres soins" >
                  </div>
                </td>
                <td><input type="number" name="nombre1[3]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle1[4]" class="form-control" value="Petite chirurgie,circoncision masculine" >
                  </div>
                </td>
                <td><input type="number" name="nombre1[4]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle1[5]" class="form-control" value="Petite chirurgie, suture de plaie traumatique" >
                  </div>
                </td>
                <td><input type="number" name="nombre1[5]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle1[6]" class="form-control" value="Petite chirurgie, incision abcès" >
                  </div>
                </td>
                <td><input type="number" name="nombre1[6]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle1[7]" class="form-control" value="Autres petites chirurgies" >
                  </div>
                </td>
                <td><input type="number" name="nombre1[7]" class="form-control" required></td>
              </tr>
      
              
            </tbody>
          </table>
          <div class="buttons">
            <button  class="btn btn-primary mt-4">Enregistrer </button>
          </div>
        </div>
      </div>
    </div> 
    </div>
  </div>
        </div>
        
      </div>
    </div>
  </div>
          </div>
        </div>
      </div>

      <div class="row pt-lg-6">
        <div class="col-lg-3">
          <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
            <h3>I.2. Activités de suivi de la mère et de l'enfant</h3>
            {{-- <h6 class="text-secondary font-weight-normal pe-3">6+ elements that you need for text manipulation and insertion</h6> --}}
          </div>
        </div>
        <div class="col-lg-9">
          <div class="row mt-3">
            <!-- Typography -->
  <div class="col-12">
   {{--  <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
      <div class="container border-bottom">
        <div class="row justify-space-between py-2">
          <div class="col-lg-3 me-auto">
            <p class="lead text-dark pt-1 mb-0">#</p>
          </div>
          
        </div>
      </div>
      <div class="tab-content tab-space">
        <div class="tab-pane active" id="preview-typo">
          <div class="row text-center py-2 mt-2">
              <div class="row">
                <div class="col-10 mx-auto">
                  <p>Des séances de consultations prénatales ont-elles été réalisées  dans l établissement au cours du mois.</p>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Oui
                    </label>
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                      Non
                    </label>
                  </div>
      <div class="buttons">
        <button  class="btn btn-primary mt-4" ">Enregistrer </button>
      </div>
    </div>
    </div>
        </div>
            
        </div>
      
      </div>
      
    </div> --}}
  </div>
  
          </div>
        </div>
      </div>

      <div class="row pt-lg-6">
        <div class="col-lg-3">
          <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
            <h3>I.2.1 Activités de consultations prénatales</h3>
            {{-- <h6 class="text-secondary font-weight-normal pe-3">6+ elements that you need for text manipulation and insertion</h6> --}}
          </div>
        </div>
        <div class="col-lg-9">
          <div class="row mt-3">
            <!-- Typography -->
  <div class="col-12">
    <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
      <div class="container border-bottom">
        <div class="row justify-space-between py-2">
          <div class="col-lg-3 me-auto">
            <p class="lead text-dark pt-1 mb-0">#</p>
          </div>
          
        </div>
      </div>
      <div class="tab-content tab-space">
        <div class="tab-pane active" id="preview-typo">
           <div class="row text-center py-2 mt-2">
              <div class="row">
                <div class="col-10 mx-auto">
                  <p>Des séances de consultations prénatales ont-elles été réalisées  dans l établissement au cours du mois.</p>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Oui
                    </label>
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                      Non
                    </label>
                  </div>
      <div class="buttons">
        <button  class="btn btn-primary mt-4">Enregistrer </button>
      </div>
    </div>
    </div>
        </div>
            
        </div>
      
      </div>
      
    </div>
  </div>
  
          </div>
        </div>
      </div>
    

      <div class="row pt-lg-6">
        <div class="col-lg-3">
          <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
            <h3>Consultations prénatales</h3>
            <h6 class="text-secondary font-weight-normal pe-3">
              Noter le nombre de consultants prénatales de 1er,2éme, 3éme, 4éme, 5éme ran et plus
            </h6>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="row mt-3">
            <!-- Alerts -->
  <div class="col-12">
    <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
      <div class="container border-bottom">
        <div class="row justify-space-between py-2">
          <div class="col-lg-3 me-auto">
            <p class="lead text-dark pt-1 mb-0">Tableau 3</p>
          </div>
   
        </div>
      </div>
      <div class="tab-content tab-space">
        <div class="tab-pane active" id="preview-alert">
          <div class="row text-center py-2 mt-2">
              <div class="row">
                <div class="col-11 mx-auto">
      
      <div class="card">
        <div class="table-responsive">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Femmes enceintes reçues</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nombre</th>
              </tr>
            </thead>
            <tbody>
            <tr>
                <td class="text-xxs">
                  <input type="text" readonly name="libelle2[0]" class="form-control" value="CPN1 au cours du 1er trimestre de la grossesse" >
                
                </td>
                <td><input type="number" name="nombre2[0]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle2[1]" class="form-control" value="CPN1 au trimestre de la grossesse" >
                  </div>
                </td>
                <td><input type="number" name="nombre2[1]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle2[2]" class="form-control" value="CPN2" >
                  </div>
                </td>
                <td><input type="number" name="nombre2[2]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle2[3]" class="form-control" value="CPN3" >
                  </div>
                </td>
                <td><input type="number" name="nombre2[3]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle2[4]" class="form-control" value="CPN4 au 9ème mois de la grossesse" >
                  </div>
                </td>
                <td><input type="number" name="nombre2[4]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle2[5]" class="form-control" value="CPN4 autre trimestre de la grossesse" >
                  </div>
                </td>
                <td><input type="number" name="nombre2[5]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle2[6]" class="form-control" value="CPN5 et plus" >
                  </div>
                </td>
                <td><input type="number" name="nombre2[6]" class="form-control" required></td>
              </tr>
      
              
            </tbody>
          </table>
          <div class="buttons">
            <button  class="btn btn-primary mt-4">Enregistrer </button>
          </div>
        </div>
      </div>
    </div> 
    </div>
  </div>
        </div>
        
      </div>
    </div>
  </div>
          </div>
        </div>
      </div>

      <div class="row pt-lg-6">
        <div class="col-lg-3">
          <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
            <h3>Dépistage des grossesses</h3>
            <h6 class="text-secondary font-weight-normal pe-3">
              Noter le nombre de grossesse à risque diabetique CPN1, le nombre des femmes enceintes soufrantes ou 
              d'anèmie ou dépistées positives à la syphilis au cours des consultations prénatales.
            </h6>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="row mt-3">
            <!-- Alerts -->
  <div class="col-12">
    <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
      <div class="container border-bottom">
        <div class="row justify-space-between py-2">
          <div class="col-lg-3 me-auto">
            <p class="lead text-dark pt-1 mb-0">Tableau 4</p>
          </div>
   
        </div>
      </div>
      <div class="tab-content tab-space">
        <div class="tab-pane active" id="preview-alert">
           <div class="row text-center py-2 mt-2">
              <div class="row">
                <div class="col-11 mx-auto">
      
      <div class="card">
        <div class="table-responsive">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nombre</th>
              </tr>
            </thead>
            <tbody>
            <tr>
                <td class="text-xxs">
                  <input type="text" readonly name="libelle3[0]" class="form-control" value="Grossesse à risque dépistées en CPN1" >
                
                </td>
                <td><input type="number" name="nombre3[0]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle3[1]" class="form-control" value="Femmes enceintes malnutries dépistées en CPN" >
                  </div>
                </td>
                <td><input type="number" name="nombre3[1]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle3[2]" class="form-control" value="Femmes enceintes anémiées dépistées en CPN" >
                  </div>
                </td>
                <td><input type="number" name="nombre3[2]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle3[3]" class="form-control" value="Femmes enceintes dépistées positives à la syphilis en CPN" >
                  </div>
                </td>
                <td><input type="number" name="nombre3[3]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle3[4]" class="form-control" value="Femmes enceintes dépistées positives à AgHDs en CPN" >
                  </div>
                </td>
                <td><input type="number" name="nombre3[4]" class="form-control" required></td>
              </tr>
            </tbody>
          </table>
          <div class="buttons">
            <button  class="btn btn-primary mt-4" >Enregistrer </button>
          </div>
        </div>
      </div>
    </div> 
    </div>
  </div>
        </div>
        
      </div>
    </div>
  </div>
          </div>
        </div>
      </div>


      <div class="row pt-lg-6">
        <div class="col-lg-3">
          <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
            <h3>Prévention au cours de la grossesses</h3>
            <h6 class="text-secondary font-weight-normal pe-3">
              Noter le nombre de femmes enceintes vues à partir du 4éme
            </h6>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="row mt-3">
            <!-- Alerts -->
  <div class="col-12">
    <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
      <div class="container border-bottom">
        <div class="row justify-space-between py-2">
          <div class="col-lg-3 me-auto">
            <p class="lead text-dark pt-1 mb-0">Tableau 5</p>
          </div>
   
        </div>
      </div>
      <div class="tab-content tab-space">
        <div class="tab-pane active" id="preview-alert">
           <div class="row text-center py-2 mt-2">
              <div class="row">
                <div class="col-11 mx-auto">
      
      <div class="card">
        <div class="table-responsive">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nombre</th>
              </tr>
            </thead>
            <tbody>
            <tr>
                <td class="text-xxs">
                  <input type="text" readonly name="libelle4[0]" class="form-control" value="Sulfadoxine pyrimétamine (1ère dose)" >
                
                </td>
                <td><input type="number" name="nombre4[0]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle4[1]" class="form-control" value="Sulfadoxine pyrimétamine (2ème dose)" >
                  </div>
                </td>
                <td><input type="number" name="nombre4[1]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle4[2]" class="form-control" value="Sulfadoxine pyrimétamine (3ème dose)" >
                  </div>
                </td>
                <td><input type="number" name="nombre4[2]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle4[3]" class="form-control" value="Sulfadoxine pyrimétamine (4ème dose)" >
                  </div>
                </td>
                <td><input type="number" name="nombre4[3]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle4[4]" class="form-control" value="Sulfadoxine pyrimétamine (5ème dose et plus)" >
                  </div>
                </td>
                <td><input type="number" name="nombre4[4]" class="form-control" required></td>
              </tr>

              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle4[5]" class="form-control" value="nombre de femmes enceintes vues en CPN et ayant reçu une MILDE" >
                  </div>
                </td>
                <td><input type="number" name="nombre4[5]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle4[6]" class="form-control" value="nombre de femmes enceintes vues en CPN et mise sous Fer + flate Cp" >
                  </div>
                </td>
                <td><input type="number" name="nombre4[6]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle4[7]" class="form-control" value="Femmes enceintes vues en CPN et déparasitées" >
                  </div>
                </td>
                <td><input type="number" name="nombre4[7]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle4[8]" class="form-control" value="Nombre de femmes reçues en CPN qui ont bénéficié d un counselind PFPPI et de conseils nutritionnels" >
                  </div>
                </td>
                <td><input type="number" name="nombre4[8]" class="form-control" required></td>
              </tr>
            </tbody>
          </table>
          <div class="buttons">
            <button  class="btn btn-primary mt-4" >Enregistrer </button>
          </div>
        </div>
      </div>
    </div> 
    </div>
  </div>
  
        </div>
        
      </div>
    </div>
  </div>
          </div>
        </div>
      </div>

      <div class="row pt-lg-6">
        <div class="col-lg-3">
          <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
            <h3>I.2.2 Accouchements et  consultations prénatales</h3>
            {{-- <h6 class="text-secondary font-weight-normal pe-3">6+ elements that you need for text manipulation and insertion</h6> --}}
          </div>
        </div>
        <div class="col-lg-9">
          <div class="row mt-3">
            <!-- Typography -->
  <div class="col-12">
    <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
      <div class="container border-bottom">
        <div class="row justify-space-between py-2">
          <div class="col-lg-3 me-auto">
            <p class="lead text-dark pt-1 mb-0">#</p>
          </div>
          
        </div>
      </div>
      <div class="tab-content tab-space">
        <div class="tab-pane active" id="preview-typo">
          
            <div class="row text-center py-2 mt-2">
              <div class="row">
                <div class="col-10 mx-auto">
                  <p>Des accouchements et des consultations prénatales ont-ils été réalisés ou enregistrés dans l établissement au cours du mois.</p>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Oui
                    </label>
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                      Non
                    </label>
                  </div>
      <div class="buttons">
        <button  class="btn btn-primary mt-4">Enregistrer </button>
      </div>
    </div>
    </div>
        </div>
            
        </div>
      
      </div>
      
    </div>
  </div>
  
          </div>
        </div>
      </div>

      <div class="row pt-lg-6">
        <div class="col-lg-3">
          <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
            <h3>Lieu d'accouchement</h3>
            <h6 class="text-secondary font-weight-normal pe-3">
              Noter le nombre d'accouchement par lieu et par tranche d'âge pour tous les accouchements enregistrés dans le ... nombre de cas référé vers une autre structure sanitaire.
            </h6>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="row mt-3">
            <!-- Alerts -->
  <div class="col-12">
    <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
      <div class="container border-bottom">
        <div class="row justify-space-between py-2">
          <div class="col-lg-3 me-auto">
            <p class="lead text-dark pt-1 mb-0">Tableau 6</p>
          </div>
   
        </div>
      </div>
      <div class="tab-content tab-space">
        <div class="tab-pane active" id="preview-alert">
          <div class="row text-center py-2 mt-2">
              <div class="row">
                <div class="col-11 mx-auto">
      
      <div class="card">
        <div class="table-responsive">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Lieu accouchement</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">08-14 ans</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">15-19 ans</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">20-24 ans</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">25-49 ans</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">50 ans et plus</th>
              </tr>
            </thead>
            <tbody>
            <tr>
                <td class="text-xxs">
                  <input type="text" readonly class="form-control" name="libelle55[0]" value="Accouchement dans l établissement" >
                
                </td>
                <td><input type="number" name="tranche_8_14_1[0]" class="form-control" required></td>
                <td><input type="number" name="tranche_15_19_1[0]" class="form-control" required></td>
                <td><input type="number" name="tranche_20_24_1[0]" class="form-control" required></td>
                <td><input type="number" name="tranche_25_49_1[0]" class="form-control" required></td>
                <td><input type="number" name="tranche_50_p_1[0]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly class="form-control" name="libelle55[1]" value="Accouchement à domicile" >
                  </div>
                </td>
                <td><input type="number" name="tranche_8_14_1[1]" class="form-control" required></td>
                <td><input type="number" name="tranche_15_19_1[1]" class="form-control" required></td>
                <td><input type="number" name="tranche_20_24_1[1]" class="form-control" required></td>
                <td><input type="number" name="tranche_25_49_1[1]" class="form-control" required></td>
                <td><input type="number" name="tranche_50_p_1[1]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly class="form-control" name="libelle55[2]" value="Nombre de cas référés vers une autre structure sanitaire" >
                  </div>
                </td>
                <td><input type="number" name="tranche_8_14_1[2]" class="form-control" required></td>
                <td><input type="number" name="tranche_15_19_1[2]" class="form-control" required></td>
                <td><input type="number" name="tranche_20_24_1[2]" class="form-control" required></td>
                <td><input type="number" name="tranche_25_49_1[2]" class="form-control" required></td>
                <td><input type="number" name="tranche_50_p_1[2]" class="form-control" required></td>
              </tr>
            
            </tbody>
          </table>
          <div class="buttons">
            <button  class="btn btn-primary mt-4">Enregistrer </button>
          </div>
        </div>
      </div>
    </div> 
    </div>
  </div>
        </div>
        
      </div>
    </div>
  </div>
          </div>
        </div>
      </div>

      <div class="row pt-lg-6">
        <div class="col-lg-3">
          <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
            <h3>Statut Vaccinal au VAT à l'accouchement</h3>
            <h6 class="text-secondary font-weight-normal pe-3">
              A l'accouchement, noter le nombre de femmes avec statut vaccinal à jour.
            </h6>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="row mt-3">
            <!-- Alerts -->
  <div class="col-12">
    <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
      <div class="container border-bottom">
        <div class="row justify-space-between py-2">
          <div class="col-lg-3 me-auto">
            <p class="lead text-dark pt-1 mb-0">Tableau 7</p>
          </div>
   
        </div>
      </div>
      <div class="tab-content tab-space">
        <div class="tab-pane active" id="preview-alert">
          <div class="row text-center py-2 mt-2">
              <div class="row">
                <div class="col-11 mx-auto">
      
      <div class="card">
        <div class="table-responsive">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Statut Vaccinal au VAT à l accouchement</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nombre</th>
              </tr>
            </thead>
            <tbody>
            <tr>
                <td class="text-xxs">
                  <input type="text" readonly name="libelle5[0]" class="form-control" value="Femmes Correctement vaccinées" >
                
                </td>
                <td><input type="number" name="nombre5[0]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle5[1]" class="form-control" value="Femmes Incompètement vaccinées" >
                  </div>
                </td>
                <td><input type="number" name="nombre5[1]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle5[2]" class="form-control" value="Femmes Non vaccinées" >
                  </div>
                </td>
                <td><input type="number" name="nombre5[2]" class="form-control" required></td>
              </tr>
            
            </tbody>
          </table>
          <div class="buttons">
            <button  class="btn btn-primary mt-4">Enregistrer </button>
          </div>
        </div>
      </div>
    </div> 
    </div>
  </div>
        </div>
        
      </div>
    </div>
  </div>
          </div>
        </div>
      </div>

      <div class="row pt-lg-6">
        <div class="col-lg-3">
          <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
            <h3>Issue de la grossesse</h3>
            <h6 class="text-secondary font-weight-normal pe-3">
              Noter le nombre de naissances vivantes, Mort-nés frais, Mort-nés macérés, Enfants nés vivants avec moins de 2500 g, nouveau-nés protégés à la naissance contre le tétanos, avortements spontanés, avortements provoqués.
            </h6>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="row mt-3">
            <!-- Alerts -->
  <div class="col-12">
    <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
      <div class="container border-bottom">
        <div class="row justify-space-between py-2">
          <div class="col-lg-3 me-auto">
            <p class="lead text-dark pt-1 mb-0">Tableau 8</p>
          </div>
   
        </div>
      </div>
      <div class="tab-content tab-space">
        <div class="tab-pane active" id="preview-alert">
          <div class="row text-center py-2 mt-2">
              <div class="row">
                <div class="col-11 mx-auto">
      
      <div class="card">
        <div class="table-responsive">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nombre</th>
              </tr>
            </thead>
            <tbody>
            <tr>
                <td class="text-xxs">
                  <input type="text" readonly name="libelle6[0]" class="form-control" value="Naissances vivantes" >
                
                </td>
                <td><input type="number" name="nombre6[0]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle6[1]" class="form-control" value="Mort-nés frais" >
                  </div>
                </td>
                <td><input type="number" name="nombre6[1]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle6[2]" class="form-control" value="Mort-nés marcérés" >
                  </div>
                </td>
                <td><input type="number" name="nombre6[2]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle6[3]" class="form-control" value="Enfants nés vivants dont le poids de naissance est inférieur à 2500 g" >
                  </div>
                </td>
                <td><input type="number" name="nombre6[3]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle6[4]" class="form-control" value="Prématurés" >
                  </div>
                </td>
                <td><input type="number" name="nombre6[4]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle6[5]" class="form-control" value="Nouveau-nés protégés à la naissance contre le tétanos" >
                  </div>
                </td>
                <td><input type="number" name="nombre6[5]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle6[6]" class="form-control" value="Accouchements multiples" >
                  </div>
                </td>
                <td><input type="number" name="nombre6[6]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle6[7]" class="form-control" value="Avortements spontanés" >
                  </div>
                </td>
                <td><input type="number" name="nombre6[7]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle6[8]" class="form-control" value="Avortements provoqués" >
                  </div>
                </td>
                <td><input type="number" name="nombre6[8]" class="form-control" required></td>
              </tr>
            </tbody>
          </table>
          <div class="buttons">
            <button  class="btn btn-primary mt-4">Enregistrer </button>
          </div>
        </div>
      </div>
    </div> 
    </div>
  </div>
  
        </div>
        
      </div>
    </div>
  </div>
          </div>
        </div>
      </div>

      <div class="row pt-lg-6">
        <div class="col-lg-3">
          <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
            <h3>Evacuation des mères et des nouveau-nés/Complications obstétricales</h3>
            <h6 class="text-secondary font-weight-normal pe-3">
              Noter le nombre de mères évacuées avant ou après l'accouchement et de nouveau-nés évacués, le nombre de complications obstétricales, le nombre de complications obstétricales référées.
            </h6>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="row mt-3">
            <!-- Alerts -->
  <div class="col-12">
    <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
      <div class="container border-bottom">
        <div class="row justify-space-between py-2">
          <div class="col-lg-3 me-auto">
            <p class="lead text-dark pt-1 mb-0">Tableau 9</p>
          </div>
   
        </div>
      </div>
      <div class="tab-content tab-space">
        <div class="tab-pane active" id="preview-alert">
          <div class="row text-center py-2 mt-2">
              <div class="row">
                <div class="col-11 mx-auto">
      
      <div class="card">
        <div class="table-responsive">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nombre</th>
              </tr>
            </thead>
            <tbody>
            <tr>
                <td class="text-xxs">
                  <input type="text" readonly name="libelle7[0]" class="form-control" value="Evacuation des mères avant l accouchement" >
                
                </td>
                <td><input type="number" name="nombre7[0]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle7[1]" class="form-control" value="Evacuation des mères après l accouchement" >
                  </div>
                </td>
                <td><input type="number" name="nombre7[1]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle7[2]" class="form-control" value="Evacuation des nouveau-nés" >
                  </div>
                </td>
                <td><input type="number" name="nombre7[2]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle7[3]" class="form-control" value="Nombre de femmes ayant présenté une CO*" >
                  </div>
                </td>
                <td><input type="number" name="nombre7[3]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle7[4]" class="form-control" value="Nombre de femmes présentant une CO* référées vers une autre structure sanitaire" >
                  </div>
                </td>
                <td><input type="number" name="nombre7[4]" class="form-control" required></td>
              </tr>
            </tbody>
          </table>
          <div class="buttons">
            <button  class="btn btn-primary mt-4">Enregistrer </button>
          </div>
        </div>
      </div>
    </div> 
    </div>
  </div>
        </div>
        
      </div>
    </div>
  </div>
          </div>
        </div>
      </div>

      <div class="row pt-lg-6">
        <div class="col-lg-3">
          <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
            <h3>Déclaration de naissance en salle d'accouchement</h3>
            <h6 class="text-secondary font-weight-normal pe-3">
              Noter pour les enfants nés vivants dans le mois, ceux dont une fiche de déclaration de naissance a été renseignée dont la fiche de la déclaration de naissance renseignée comporte les informations nécessaires pour l'attribution d'un numéro d'acte de naissance.
            </h6>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="row mt-3">
            <!-- Alerts -->
  <div class="col-12">
    <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
      <div class="container border-bottom">
        <div class="row justify-space-between py-2">
          <div class="col-lg-3 me-auto">
            <p class="lead text-dark pt-1 mb-0">Tableau 10a</p>
          </div>
   
        </div>
      </div>
      <div class="tab-content tab-space">
        <div class="tab-pane active" id="preview-alert">
          <div class="row text-center py-2 mt-2">
              <div class="row">
                <div class="col-11 mx-auto">
      
      <div class="card">
        <div class="table-responsive">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Sexe Masculin</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Sexe Féminin</th>
              </tr>
            </thead>
            <tbody>
            <tr>
                <td class="text-xxs">
                  <input type="text" readonly class="form-control" name="libelle8[0]" value="Nombre enfants nés vivants au cours du mois dont
                  la fiche de déclaration de naissance a été renseignée" >
                
                </td>
                <td><input type="number" name="masculin[0]" class="form-control" required></td>
                <td><input type="number" name="feminin[0]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly class="form-control" name="libelle8[1]" value="Nombre enfants nés vivants au cours du mois dont
                  la fiche de déclaration de naissance a été renseignée comporte les informations nécessaires pour
                  l attribution d un numéro d acte de naissance" >
                  </div>
                </td>
                <td><input type="number" name="masculin[1]" class="form-control" required></td>
                <td><input type="number" name="feminin[1]" class="form-control" required></td>
              </tr>
             
            </tbody>
          </table>
          <div class="buttons">
            <button  class="btn btn-primary mt-4">Enregistrer </button>
          </div>
        </div>
      </div>
    </div> 
    </div>
  </div>
        </div>
        
      </div>
    </div>
  </div>
          </div>
        </div>
      </div>

      <div class="row pt-lg-6">
        <div class="col-lg-3">
          <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
            <h3>Consultations postnatales</h3>
            <h6 class="text-secondary font-weight-normal pe-3">
              Noter le nombre de femmes ssuivi/reçues en vonsultations postnatales.
            </h6>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="row mt-3">
            <!-- Alerts -->
  <div class="col-12">
    <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
      <div class="container border-bottom">
        <div class="row justify-space-between py-2">
          <div class="col-lg-3 me-auto">
            <p class="lead text-dark pt-1 mb-0">Tableau 10b</p>
          </div>
   
        </div>
      </div>
      <div class="tab-content tab-space">
        <div class="tab-pane active" id="preview-alert">
         <div class="row text-center py-2 mt-2">
              <div class="row">
                <div class="col-11 mx-auto">
      
      <div class="card">
        <div class="table-responsive">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre de femmes vues en consultations postnatales</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nombre</th>
              </tr>
            </thead>
            <tbody>
            <tr>
                <td class="text-xxs">
                  <input type="text" readonly name="libelle9[0]" class="form-control" value="Consultation postnatale immédiate dans les 6 à 72 heures suivant l accouchement" >
                
                </td>
                <td><input type="number" name="nombre9[0]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle9[1]" class="form-control" value="Consultation postnatale entre dans 6ème à 10ème jours après l accouchement" >
                  </div>
                </td>
                <td><input type="number" name="nombre9[1]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle9[2]" class="form-control" value="Consultation postnatale autre périodes(>72h et <6jours; >10jours et <6ème semaine)" >
                  </div>
                </td>
                <td><input type="number" name="nombre9[2]" class="form-control" required></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                  <input type="text" readonly name="libelle9[3]" class="form-control" value="Consultation postnatale (6ème semaine à 8ème semaine)" >
                  </div>
                </td>
                <td><input type="number" name="nombre9[3]" class="form-control" required></td>
              </tr>
             
            </tbody>
          </table>
          <div class="buttons">
            <button  class="btn btn-primary mt-4" >Enregistrer </button>
          </div>
        </div>
      </div>
    </div> 
    </div>
  </div>
  
        </div>
        
      </div>
    </div>
  </div>
          </div>
        </div>
      </div>
      <div class="buttons"><center>
        <button  class="btn btn-primary mt-4 btn-lg">Soumettre </button>
      </center>
      </div>

  

    </div>
  </section>
  </form>
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
          var lien="./rapport_edit/"
          var liena='./rapport_update/'
          $('#edituser').attr('action',liena+ids)
          $('#editModal').modal('show')
          $.ajax({
                url:lien+ids,
                method: "GET",
                success: function (response) {
                    console.log(response);
                /* $('#nom_etablissement').val(response.user.nom_etablissement);
                $('#matricule').val(response.user.matricule);
                $('#district_sanitaire').val(response.user.district_sanitaire);
                $('#region_sanitaire').val(response.user.region_sanitaire);
                $('#population_desservie').val(response.user.population_desservie); */
                }
          }); 
      }
      
  </script>

    @endsection
