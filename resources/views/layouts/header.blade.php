
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <style>

*{

font-size: 13px;

}


        </style>

        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script>



<?

//$c_approved = App\Models\Upc::where('verify',1)->count() ;
//$error1 = DB::select("select * from apl_upc where verify like '1'  and (subcat_full = '' or subcat_full is NULL) ");
 
 

?>



    </head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>


    </ul>

    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link"  > 
        
        
        
        @include('layouts.message')
        
        </a>
      </li>


    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown-right">


{{--
          <div class=" nav-link user-panel   d-flex">
            <div class="image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>

          </div> --}}



@include('layouts.avarta-icon')









      </li>


    </ul>





  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link">
    <img src="{{asset('storage/MD_logo.png')}}" alt=" " class="brand-image   elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">UPC Upload</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">




        <div class="image">
          {{-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> --}}
          <img class=" h-20 w-20 rounded-full object-cover border-4 border-gray-100" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
        </div>

        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>


    </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

              <? $segment = Request::segment(1);?>

               <li class="nav-header">UPLOAD</li>


                {{-- add upc --}}

                <li class="nav-item has-treeview">
                  <a href="{{route('add_upc')}}" class="nav-link @if( $segment == 'add_upc') active @endif">
                      <i class="nav-icon fas fa-upload"></i>
                    <p>
                     Single Upload

                    </p>
                  </a>

                </li>

                {{-- add upc --}}

                <li class="nav-item has-treeview">
                  <a href="{{route('dashboard')}}" class="nav-link @if( $segment == 'file_upload') active @endif">
                      <i class="nav-icon fas fa-upload"></i>
                    <p>
                     File Upload

                    </p>
                  </a>

                </li>


  



          <li class="nav-header">TOOLS</li>

  
          
{{--  APL Checker(single) --}}

<li class="nav-item has-treeview">
  <a href="{{route('dashboard')}}" class="nav-link @if( $segment == 'search') active @endif">
      <i class="nav-icon fas fa-search"></i>
    <p>
      APL Checker(single)

    </p>
  </a>

</li>

{{--   APL Checker(multiple) --}}

<li class="nav-item has-treeview">
  <a href="{{route('dashboard')}}" class="nav-link @if( $segment == 'search') active @endif">
      <i class="nav-icon fas fa-search"></i>
    <p>
      APL Checker(multiple)

    </p>
  </a>

</li>




{{--  Category Search --}}

<li class="nav-item has-treeview">
  <a href="{{route('dashboard')}}" class="nav-link @if( $segment == 'category') active @endif">
      <i class="nav-icon fas fa-search"></i>
    <p>
       Category Search

    </p>
  </a>

</li>




{{-- Find Check Digit --}}

          <li class="nav-item has-treeview">
            <a href="{{route('dashboard')}}" class="nav-link @if( $segment == 'check_digit') active @endif">
                <i class="nav-icon fas fa-barcode"></i>
              <p>
                Find Check Digit

              </p>
            </a>

          </li>

 
{{-- My Uploads --}}

          <li class="nav-item has-treeview">
            <a href="{{route('dashboard')}}" class="nav-link @if( $segment == 'recent_edit') active @endif">
                <i class="nav-icon fas fa-briefcase"></i>
              <p>
                My Uploads

              </p>
            </a>

          </li>

{{-- How to Videos --}}

          <li class="nav-item has-treeview">
            <a href="{{route('dashboard')}}" class="nav-link @if( $segment == 'recent_edit') active @endif">
                <i class="nav-icon fas fa-play"></i>
              <p>
                How to Videos

              </p>
            </a>

          </li>


{{-- Manual --}}

          <li class="nav-item has-treeview">
            <a href="{{route('dashboard')}}" class="nav-link @if( $segment == 'recent_edit') active @endif">
                <i class="nav-icon fas fa-book"></i>
              <p>
                Manual

              </p>
            </a>

          </li>


{{-- Notice --}}

          <li class="nav-item has-treeview">
            <a href="{{route('dashboard')}}" class="nav-link @if( $segment == 'recent_edit') active @endif">
                <i class="nav-icon fas fa-bullhorn"></i>
              <p>
                Notice

              </p>
            </a>

          </li>

{{-- Solutran FTP --}}

          <li class="nav-item has-treeview">
            <a href="{{route('dashboard')}}" class="nav-link @if( $segment == 'recent_edit') active @endif">
                <i class="nav-icon fas fa-link"></i>
              <p>
                Solutran FTP

              </p>
            </a>

          </li>

          




          <li class="nav-item">
            <a href="#"  >
      <form method="POST" action="{{ route('logout') }}" class="nav-link">
<i class="nav-icon far fa-circle text-danger"></i>
                            <!-- Authentication -->

                                @csrf

                                <p  class="text-gray-200" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                    {{ __('Logout') }}
                            </p>


{{--
                                <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                    {{ __('Logout') }}
                                </x-jet-responsive-nav-link> --}}
                            </form>
                        </a>

            {{-- <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Important</p>
            </a> --}}


          </li>




















        </ul>


      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
