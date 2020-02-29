
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Tienda - @yield('title')</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{asset('css/style.css')}}">
      <link rel="stylesheet" href="{{asset('css/admin.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{asset('images/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="c{{asset('ss/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href='https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

      <script src="https://kit.fontawesome.com/e441110e2e.js" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

      <script type="text/javascript">
        $(document).ready(function () {
                $('[data-toggle="tooltip"]').tooltip()
              })
      </script>

   </head>
   <div class="loader_bg">
      <div class="loader"><img src="{{asset('images/loading.gif')}}" alt="#" /></div>
   </div>
   <!-- end loader -->
   <!-- header -->
   <header>
      <!-- header inner -->
      <div class="header">
         <div class="container-fluid">
            <div class="row">
               <div class="logos">
                 <a href="index.html"><img src="{{asset('images/logo.png')}}" alt="#" /></a>
               </div>
               <div class="col-xl-9 col-lg-9 col-md-8 col-sm-3">
                  <nav class="navigation navbar navbar-expand-md navbar-dark ">
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarsExample04">
                        <ul class="navbar-nav mr-auto">
                           <li class="nav-item active">
                              <a href="{{ url('/admin') }}" class="nav-link"><i class="fas fa-home"></i> Admin</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link"  href="{{ url('/admin/products') }}"><i class="fas fa-box-open"></i> Productos</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="{{ url('/admin') }}"><i class="fas fa-users-cog"></i> Usuarios</a>
                           </li>
                           <li class="nav-item" >
                             <a class="nav-link" href="{{url('/logout')}}">
                               {{Auth::user()->nombre}} {{Auth::user()->apellido}} </a>
                           </li>
                           <li class="nav-item d_none" >
                              <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                           </li>
                           <li class="nav-item">
                             <a class="nav-link" href="{{url('/logout')}}" data-toggle="tooltip"  data-placement="down" title="Salir">
                                <i class="fas fa-sign-out-alt"></i></a>
                           </li>
                        </ul>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      
      <section class="admin_main">
         
   </section>
      <div class="container">
         <div class="col2">
            <nav class="navbar-tablero navbar-expand-lg shadow">
               <div class="collapse navbar-collapse">{{--hace que se olculte al aumentar el zoom--}}
                  <ul class="navbar-nav">
                     <li class="nav-item">
                     <a href="{{url('/admin')}}" class="nav-link"><i class="fas fa-home"></i> Administrar</a>
                     </li>
                  </ul>
               </div>
            </nav>
            <div class="pagina">
               
               <div class="container-fluid">
                  <nav aria-label="breadcrumb shadow">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                           <a href="{{ url('/admin')}}" data-toggle="tooltip"  data-placement="down" title="Salir"><i class="fas fa-users-cog"></i> Administrar</a>
                        </li>
                        @section('breadcrumb')
                        @show
                     </ol>
                  </nav>
               </div>
               {{-- poner alertas --}}
               @section('content')
               @show
            </div>
         </div>
      </div>
      <!-- end banner -->
      
      <!--  footer -->
      {{-- <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <img class="logo1" src="images/logo1.png" alt="#"/>
                     <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <h3>About Us</h3>
                     <ul class="about_us">
                        <li>dolor sit amet, consectetur<br> magna aliqua. Ut enim ad <br>minim veniam, <br> quisdotempor incididunt r</li>
                     </ul>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <h3>Contact Us</h3>
                     <ul class="conta">
                        <li>dolor sit amet,<br> consectetur <br>magna aliqua.<br> quisdotempor <br>incididunt ut e </li>
                     </ul>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <form class="bottom_form">
                        <h3>Newsletter</h3>
                        <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                        <button class="sub_btn">subscribe</button>
                     </form>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2019 All Rights Reserved. Design by<a href="https://html.design/"> Free Html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer> --}}
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{asset('js/jquery.min.js')}}"></script>
      <script src="{{asset('js/popper.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>
      <!-- sidebar -->
      <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{asset('js/custom.js')}}"></script>
   </body>
</html>

