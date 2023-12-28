<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('admintemplate')}}/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{asset('admintemplate')}}/assets/img/favicon.png">
    <title>RM-ESP</title>
    <!-- Favicon icon -->
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<link href="{{asset('admintemplate')}}/assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="{{asset('admintemplate')}}/assets/css/nucleo-svg.css" rel="stylesheet" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
<link id="pagestyle" href="{{asset('admintemplate')}}/assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />
<script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  </head>
  <body class="index-page bg-gray-200">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    
  @include('layouts.header')
  {{-- @include('layouts.sidebar') --}}
  <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
  @yield('content')
  @include('layouts.footer')
  <!-- ============================================================== -->
  <!-- End footer -->
  <!-- ============================================================== -->
</div>
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
    <script src="{{asset('admintemplate')}}/assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="{{asset('admintemplate')}}/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="{{asset('admintemplate')}}/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{asset('admintemplate')}}/assets/js/plugins/countup.min.js"></script>
    <script src="{{asset('admintemplate')}}/assets/js/plugins/choices.min.js"></script>
    <script src="{{asset('admintemplate')}}/assets/js/plugins/prism.min.js"></script>
    <script src="{{asset('admintemplate')}}/assets/js/plugins/highlight.min.js"></script>
    <script src="{{asset('admintemplate')}}/assets/js/plugins/rellax.min.js"></script>
    <script src="{{asset('admintemplate')}}/assets/js/plugins/tilt.min.js"></script><script src="./assets/js/plugins/choices.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
    <script src="{{asset('admintemplate')}}/assets/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>
    
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap4.min.js"></script>
    <script >
      var table = $('#datatable').DataTable({
     "language": {
                "sEmptyTable":     "Aucune donnée disponible dans le tableau",
                "sInfo":           "Affichage de l'élément _START_ à _END_ sur _TOTAL_ éléments",
                "sInfoEmpty":      "Affichage de l'élément 0 à 0 sur 0 élément",
                "sInfoFiltered":   "(filtré à partir de _MAX_ éléments au total)",
                "sInfoPostFix":    "",
                "sInfoThousands":  ",",
                "sLengthMenu":     "Afficher  _MENU_   éléments",
                "sLoadingRecords": "Chargement...",
                "sProcessing":     "Traitement...",
                "sSearch":         "Rechercher :",
                "sZeroRecords":    "Aucun élément correspondant trouvé",
                "oPaginate": {
                    "sFirst":    "Premier",
                    "sLast":     "Dernier",
                    "sNext":     "Suivant",
                    "sPrevious": "Précédent"
                },
                "oAria": {
                    "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
                    "sSortDescending": ": activer pour trier la colonne par ordre décroissant"
                },
                "select": {
                    "rows": {
                        "_": "%d lignes sélectionnées",
                        "0": "Aucune ligne sélectionnée",
                        "1": "1 ligne sélectionnée"
                    }
                },
                
            }, 
    } );
  </script>
    <script type="text/javascript">
    
      if (document.getElementById('state1')) {
        const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
        if (!countUp.error) {
          countUp.start();
        } else {
          console.error(countUp.error);
        }
      }
      if (document.getElementById('state2')) {
        const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
        if (!countUp1.error) {
          countUp1.start();
        } else {
          console.error(countUp1.error);
        }
      }
      if (document.getElementById('state3')) {
        const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
        if (!countUp2.error) {
          countUp2.start();
        } else {
          console.error(countUp2.error);
        };
      }
    </script>
  </body>
</html>