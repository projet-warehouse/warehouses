<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>NobleUI Responsive Bootstrap 4 Dashboard Template</title>
	<!-- core:css -->
	<link rel="stylesheet" href="{{asset('admin_assets/vendors/core/core.css')}}">
	<!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('admin_assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin_assets/vendors/select2/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin_assets/vendors/simplemde/simplemde.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin_assets/vendors/fullcalendar/main.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin_assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin_assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
	<!-- end plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="{{asset('admin_assets/fonts/feather-font/css/iconfont.css')}}">
	<link rel="stylesheet" href="{{asset('admin_assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
	<!-- endinject -->


  <div id="themeColor">
    {{-- <link rel='stylesheet' href='{{asset('admin_assets/css/demo_1/style.css')}}' id='themeColor'> --}}

  </div>

  <link rel="shortcut icon" href="{{asset('admin_assets/images/favicon.png')}}" />
</head>
<body>
	<div class="main-wrapper">

		<!-- partial:partials/_sidebar.html -->
		<nav class="sidebar">
      <div class="sidebar-header">

        <a href="#" class="sidebar-brand">
        <a href="" class="sidebar-brand">
          Noble<span>UI</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">

          <li class="nav-item nav-category">Main</li>
          {{-- <li class="nav-item nav-category">Main</li> --}}
          <li class="nav-item">
            <a href="/dashboard" class="nav-link">
              <i class="link-icon" data-feather="book"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">web apps</li>

          {{-- <li class="nav-item nav-category">web apps</li> --}

          <li class="nav-item">
            <a href="/newcontroller" class="nav-link">
              <i class="link-icon" data-feather="users"></i>
              <span class="link-title">Ajouter Utilisateur</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="/editcontroller" class="nav-link">
              <i class="link-icon" data-feather="edit"></i>
              <span class="link-title">Editer Utilisateur</span>
            </a>
          </li>

          <li class="nav-item">

            <a href="/newcontroller" class="nav-link">
              <i class="link-icon" data-feather="users"></i>
              <span class="link-title">Ajouter Utilisateur</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="/editcontroller" class="nav-link">
              <i class="link-icon" data-feather="edit"></i>
              <span class="link-title">Editer Utilisateur</span>
            </a>
          </li>

          <li class="nav-item">

            <a href="/addcategory" class="nav-link">
              <i class="link-icon" data-feather="gift"></i>
              <span class="link-title">Ajouter une catégorie</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="/addproduct" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Ajouter un produit</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="/order" class="nav-link">
              <i class="link-icon" data-feather="shopping-bag"></i>
              <span class="link-title">Commandes</span>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title">Email</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="emails">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="pages/email/inbox.html" class="nav-link">Inbox</a>
                </li>
                <li class="nav-item">
                  <a href="pages/email/read.html" class="nav-link">Read</a>
                </li>
                <li class="nav-item">
                  <a href="pages/email/compose.html" class="nav-link">Compose</a>
                  <a href="/inbox" class="nav-link">Inbox</a>
                </li>
                <li class="nav-item">
                  <a href="/read" class="nav-link">Read</a>
                </li>
                <li class="nav-item">
                  <a href="/compose" class="nav-link">Compose</a>
                </li>
              </ul>
            </div>

          </li>
           <li class="nav-item">
            <a href="pages/apps/calendar.html" class="nav-link">


          </li> --}}
           {{-- <li class="nav-item">

          </li> --}}
           {{-- <li class="nav-item">
            <a href="/calendar" class="nav-link">

              <i class="link-icon" data-feather="calendar"></i>
              <span class="link-title">Calendar</span>
            </a>
          </li> --}}

          <li class="nav-item">
          {{-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#forms" role="button" aria-expanded="false" aria-controls="forms">
              <i class="link-icon" data-feather="inbox"></i>
              <span class="link-title">Forms</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="forms">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="pages/forms/basic-elements.html" class="nav-link">Basic Elements</a>
                </li>
                <li class="nav-item">
                  <a href="pages/forms/advanced-elements.html" class="nav-link">Advanced Elements</a>
                </li>
                <li class="nav-item">
                  <a href="pages/forms/editors.html" class="nav-link">Editors</a>
                </li>
                <li class="nav-item">
                  <a href="pages/forms/wizard.html" class="nav-link">Wizard</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
              <a href="pages/tables/data-table.html" class="nav-link">

          </li> --}}
          {{-- <li class="nav-item">
              <a href="/table" class="nav-link">
                <i class="link-icon" data-feather="layout"></i>
                <span class="link-title">Table</span>
              </a>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav sub-menu">
                {{-- <li class="nav-item">
                  <a href="pages/tables/basic-table.html" class="nav-link">Basic Tables</a>
                </li> --}}
                <li class="nav-item">
                  <a href="pages/tables/data-table.html" class="nav-link">Data Table</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item nav-category">Pages</li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#general-pages" role="button" aria-expanded="false" aria-controls="general-pages">
              <i class="link-icon" data-feather="book"></i>
              <span class="link-title">Invoice</span>
          </li>

          </li>
          </li> --}}
          {{-- <li class="nav-item nav-category">Pages</li> --}}
          {{-- <li class="nav-item">
            <a href="/invoice" class="nav-link">
              <i class="link-icon" data-feather="book"></i>
              <span class="link-title">Invoice</span>
            </a>
        </li> --}}

          {{-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#authPages" role="button" aria-expanded="false" aria-controls="authPages">
              <i class="link-icon" data-feather="unlock"></i>
              <span class="link-title">Authentication</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="authPages">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="pages/auth/login.html" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                  <a href="pages/auth/register.html" class="nav-link">Register</a>
                  <a href="/admin_login" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                  <a href="/admin_register" class="nav-link">Register</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#errorPages" role="button" aria-expanded="false" aria-controls="errorPages">
              <i class="link-icon" data-feather="cloud-off"></i>
              <span class="link-title">Error</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
    </nav>


          </li> --}}
          </li> --}}
    </nav>
  </div>

      @yield('content')

		</div>
	</div>
	<!-- core:js -->
	<script src="{{asset('admin_assets/vendors/core/core.js')}}"></script>
	<!-- endinject -->
  <!-- plugin js for this page -->
  <script src="{{asset('admin_assets/vendors/chartjs/Chart.min.js')}}"></script>
  <script src="{{asset('admin_assets/vendors/jquery.flot/jquery.flot.js')}}"></script>
  <script src="{{asset('admin_assets/vendors/jquery.flot/jquery.flot.resize.js')}}"></script>
  <script src="{{asset('admin_assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('admin_assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('admin_assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
  <script src="{{asset('admin_assets/vendors/select2/select2.min.js')}}"></script>
  <script src="{{asset('admin_assets/vendors/simplemde/simplemde.min.js')}}"></script>
  <script src="{{asset('admin_assets/vendors/moment/moment.min.js')}}"></script>
  <script src="{{asset('admin_assets/vendors/fullcalendar/main.min.js')}}"></script>
  {{-- <script src="{{asset('admin_assets/vendors/jquery-ui/jquery-ui.min.js')}}"></script> --}}
  <script src="{{asset('admin_assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <script src="{{asset('admin_assets/vendors/datatables.net/jquery.dataTables.js')}}"></script>
	<!-- end plugin js for this page -->
	<!-- inject:js -->
	<script src="{{asset('admin_assets/vendors/feather-icons/feather.min.js')}}"></script>
	<script src="{{asset('admin_assets/js/template.js')}}"></script>
	<!-- endinject -->
  <!-- custom js for this page -->
  <script src="{{asset('admin_assets/js/datepicker.js')}}"></script>
  <script src="{{asset('admin_assets/js/email.js')}}"></script>
  <script src="{{asset('admin_assets/js/fullcalendar.js')}}"></script>
  <script src="{{asset('admin_assets/js/data-table.js')}}"></script>
  <script src="{{asset('admin_assets/js/dashboard.js')}}"></script>
	<!-- end custom js for this page -->
</body>
</html>
