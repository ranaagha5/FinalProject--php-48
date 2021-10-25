<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fashion</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{asset('Dashboard/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('Dashboard/datatables-bs4/css/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{asset('Dashboard/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('Dashboard/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('Dashboard/css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
            <a  href="{{URL::to('/logout')}}"  class="btn btn-danger"  >
                log out
              </a>
      </li>
    </ul>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#"  class="brand-link">
      <img src="{{asset('Dashboard/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('Dashboard/img/user.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::User()->name}}</a>
        </div>

      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Products
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{URL::to('/panel/add/product')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('/panel/products')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Products</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a  href="{{URL::to('/panel/add/user')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('/panel/users')}}"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Users</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Categories
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a  href="{{URL::to('/panel/add/category')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('/panel/categories')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Categories</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>

    </div>

  </aside>

  <div class="content-wrapper">
    @yield('dashboard-content')

  </div>
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 .</strong>
  </footer>

  <aside class="control-sidebar control-sidebar-dark">
  </aside>

</div>

<script src="{{asset('Dashboard/jquery/jquery.min.js')}}"></script>
<script src="{{asset('Dashboard/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('Dashboard/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('Dashboard/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('Dashboard/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('Dashboard/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('Dashboard/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('Dashboard/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('Dashboard/js/adminlte.min.js')}}"></script>
</body>
</html>
