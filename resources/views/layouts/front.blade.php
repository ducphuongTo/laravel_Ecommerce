<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">

          <!-- CSRF Token -->
          <meta name="csrf-token" content="{{ csrf_token() }}">

          <title>
                    @yield('title')
          </title>


          <!-- Scripts -->
          <script src="{{ asset('js/app.js') }}" defer></script>
          <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
          <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
          <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
          <!-- Styles -->
          <link id="pagestyle" href="../admin/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
          <link href="{{asset('frontend/css/BS5.css')}}" rel="stylesheet">
          <link href="{{asset('frontend/css/custom.css')}}" rel="stylesheet">
          <link href="{{asset('frontend/css/owl.carousel.min.css')}}" rel="stylesheet">
          <link href="{{asset('frontend/css/owl.theme.default.min.css')}}" rel="stylesheet">

          <style>
                    a {
                              text-decoration: none;
                    }
          </style>
</head>

<body>
          <div class="wrapper">


                    @include('layouts.inc.frontnavbar')
                    <div class="content">
                              @yield('content')
                    </div>


          </div>


          <!--Script-->
          <script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}" defer></script>
          <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" defer></script>
          <script src="{{ asset('frontend/js/owl.carousel.min.js') }}" defer></script>
          <script src="{{ asset('frontend/js/custom.js') }}" defer></script>

          <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
          @if(session('status'))
          <script>
                    swal("{{session('status')}}");
          </script>


          @endif


          @yield('scripts')

</body>

</html>