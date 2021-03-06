<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('assets/img/nx.png') }}">
  <link rel="icon" type="image/png" href="{{ URL::asset('assets/img/nx.png') }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    NEXT MOVE
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ URL::asset('assets/css/now-ui-dashboard.css?v=1.5.0') }}" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="red">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="home" class="simple-text logo-mini">
        <img src="{{ URL::asset('assets/img/nx.png') }}" alt="next move logo" width="100" height="35">
        </a>
        <a href="home" class="simple-text logo-normal">
          NEXT MOVE
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="home">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li>
            <a href="superviseurs">
              <i class='fas fa-user-friends' style='font-size:20px'></i>
              <p>Utilisateurs</p>
            </a>
          </li>
          <li>
            <a href="chambres">
              <i class='fas fa-home' style='font-size:20px'></i>
              <p>Chambres</p>
            </a>
          </li>
          <li>
            <a href="capteurs">
              <i class='fas fa-microchip' style='font-size:20px'></i>
              <p>Capteurs</p>
            </a>
          </li>
          <li>
            <a href="notifications">
              <i class='fas fa-bell' style='font-size:20px'></i>
              <p>Notifications</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons ui-1_bell-53"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Notifications</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Notification 1</a>
                  <a class="dropdown-item" href="#">Notification 2</a>
                  <a class="dropdown-item" href="#">Notification 3</a>
                  <a class="dropdown-item" href="#">Notification 4</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons users_circle-08"></i>
                  <p>
                    <span class="d-none d-md-block">Hello, {{ Auth::user()->Firstname }}</span>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="user"><i class="now-ui-icons ui-2_settings-90"></i> Modifier le profile</a>
                  <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="now-ui-icons ui-1_lock-circle-open"></i>
                    {{ __('Déconnexion') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="panel-header panel-header-sm">
      </div>
<div class="content">
  <meta name="room_id" content="{{ $room_id }}">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-12">
                            <h5>Capteur de la chambre: {{$room_id}}
                                <button class="btn btn-info pull-right" data-toggle="modal" data-target="#addsensor"><span class="glyphicon glyphicon-plus"></span> Ajuter un nouvel Capteur +</button>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="card-body ">
                <table class="table table-striped" id="getallsensors">
                        <thead>
                            <tr>
                                <th >Capteur ID</th>
                                <th scope="col">Type</th>
                                <th scope="col">Chart</th>
                                <th scope="col">PDF</th>
                                <th scope="col">Max_Valeur</th>
                                <th scope="col">Ajouter_le</th>                           
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody v-for="sensor in sensors">
                            <tr>
                                <th scope="row">@{{sensor.sensor_id}}</th>
                                <td>@{{sensor.type}}</td>
                                <td><button class="btn btn-warning" @click="get_1j_values(sensor.sensor_id)" data-toggle="modal" data-target="#showchart"><i style="font-size:20px" class="fa">&#xf080;</i> </button></td>
                                <td>
                                  <div class="dropdown no-arrow">
                                  <button class="btn btn-danger" @click="passsid(sensor.sensor_id)" data-toggle="dropdown"id="dropdownMenuLink" data-target="#showpdf"><i style="font-size:20px" class="fa">&#xf1c1;</i> </button>
                                  <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(74px, 31px, 0px);">
                                    <a class="dropdown-item" @click="get_1j_pdf(sensor.sensor_id)"  >Aujourd'hui<</a>
                                    <a class="dropdown-item" @click="get_7j_pdf(sensor.sensor_id)"  >Semaine</a>
                                    <a class="dropdown-item" @click="get_30j_pdf(sensor.sensor_id)" >Mois</a>
                                </div>
                                  {{-- <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle btn btn-primary btn-sm" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Sélectionnez la Periode </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(74px, 31px, 0px);">
                                        <a class="dropdown-item" @click="get_1j_values()"  >Aujourd'hui<</a>
                                        <a class="dropdown-item" @click="get_7j_values()"  >Semaine</a>
                                        <a class="dropdown-item" @click="get_30j_values()" >Mois</a>
                                    </div>
                                  </div> --}}
                                </td>
                                <td>@{{sensor.max_value}}</td>
                                <td>@{{sensor.created_at}}</td>
                                <td>
                                <button class="btn btn-danger" @click="passsid(sensor.sensor_id)" data-toggle="modal" data-target="#deletesensor"><i class='fas fa-trash'></i> </button>
                                <button class="btn btn-success " @click="passsid(sensor.sensor_id)" data-toggle="modal" data-target="#editsensor"><i class='fas fa-wrench'></i></button>
                                
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ----------------------show chart modal------------------------- -->
<div class="modal fade" id="showchart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <!-- Change class .modal-sm to change the size of the modal -->
  <div class="modal-dialog modal-lg" role="document">


    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Capteur de ID: @{{sensor_id}}---->@{{title}}</h4>
        <div class="dropdown no-arrow">
          <a class="dropdown-toggle btn btn-primary btn-sm" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sélectionnez la Periode </a>
          <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(74px, 31px, 0px);">
              <a class="dropdown-item" @click="get_1j_values()"  >Aujourd'hui</a>
              <a class="dropdown-item" @click="get_7j_values()"  >Semaine</a>
              <a class="dropdown-item" @click="get_30j_values()" >Mois</a>
          </div>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  
       <canvas id="myChart" style="display: block; width: 499px; height:250px;" width="600" height="300" class="chartjs-render-monitor"></canvas>
        
      </div>
      
    </div>
  </div>
</div>
<!-- ----------------------edit sensor modal------------------------- -->
<div class="modal fade" id="editsensor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-warning" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header text-center">
                <h4 class="modal-title white-text w-100 font-weight-bold py-2">Editer capteur de ID: @{{sensor_id}}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">
                <div class="md-form ">

                    <label data-error="wrong" data-success="right" for="form3">Max_Valeur</label>
                    <input type="text" v-model="max_value" class="form-control validate">
                </div>

                <div class="form-group">
                  <label for="exampleFormControlSelect2" >Sélectionnez le Type</label>
                  <select class="form-control" id="exampleFormControlSelect2" v-model="type">
                    <option>Temperature</option>
                    <option>Humidité </option>
                    <option>Mouvement </option>
                  </select>
                </div>

                <!--Footer-->
                <div class="modal-footer justify-content-center">
                    <a class="btn btn-outline-warning waves-effect"  role="button"  @click="editsensor()" aria-pressed="true" data-dismiss="modal">Edite</a>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
</div>
</div>


<!--   ------------------------delete sensor moadal---------------------- -->
<div class="modal fade" id="deletesensor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-warning" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header text-center">
                <h4 class="modal-title white-text w-100 font-weight-bold py-2">Supprimer le Capteur: @{{sensor_id}}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">
                <p class="font-weight-bold text-center">Etes-vous sùr de vouloir supprimer ce Capteur ?</p>
            </div>

            <!--Footer-->
            <div class="modal-footer justify-content-center">
                <a class="btn btn-danger btn-lg active"  role="button"  @click="removesensor()" aria-pressed="true" data-dismiss="modal">Oui</a>
                <a class="btn btn-success btn-lg active" role="button" aria-pressed="true" data-dismiss="modal">Annuler</a>  
                
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
</div>
</div>


<!-- ----------------------add new sensor modal------------------------- -->
<div class="modal fade" id="addsensor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-warning" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header text-center">
                <h4 class="modal-title white-text w-100 font-weight-bold py-2">Ajouter un nouvel capteur</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">

                <div class="md-form ">
                    <label data-error="wrong" data-success="right" for="form2">Max Valeur</label>
                    <input type="float" v-model="max_value" class="form-control validate">
                </div>       

                <div class="form-group">
                  <label for="exampleFormControlSelect2" >Sélectionnez le Type</label>
                  <select class="form-control" id="exampleFormControlSelect2" v-model="type">
                    <option>Temperature</option>
                    <option>Humidité </option>
                    <option>Mouvement </option>
                  </select>
                </div>

                <!--Footer-->
                <div class="modal-footer justify-content-center">
                    <a class="btn btn-outline-warning waves-effect"  role="button"  @click="creatsensor()" aria-pressed="true" data-dismiss="modal">Ajouter</a>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
<footer class="footer">
  <div class=" container-fluid ">
    <nav>
      <ul>
        <li>
          <a href="https://www.creative-tim.com">
            Creative Tim
          </a>
        </li>
        <li>
          <a href="http://presentation.creative-tim.com">
            About Us
          </a>
        </li>
        <li>
          <a href="http://blog.creative-tim.com">
            Blog
          </a>
        </li>
      </ul>
    </nav>

  </div>
</footer>
</div>
</div>
<!--   Core JS Files   -->
<script src="{{ URL::asset('assets/js/core/jquery.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/core/popper.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/core/bootstrap.min.js') }}"></script>


<!-- Chart JS -->
<script src="https://unpkg.com/moment" ></script>
<script src="{{ URL::asset('assets/js/plugins/chartjs.min.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ URL::asset('assets/js/plugins/bootstrap-notify.js') }}"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ URL::asset('assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.1"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-zoom@0.7.7"></script>
<script src="https://cdn.jsdelivr.net/npm/hammerjs@2.0.8"></script>
<script src="https://unpkg.com/vue"></script>
<script src="https://unpkg.com/vuex"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="{{ URL::asset('assets/js/Sensors.js') }}"></script>

</body>

</html>