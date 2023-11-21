<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
  <link rel="shortcut icon" href="./img/fav.png" type="image/x-icon">  
  <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">  
  <title>Welcome To Cleopatra</title>
   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
    
     <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>
     <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css-leaflet/Leaflet.NavBar.css') }}">

     <style>
        #map { height: 700px; }
     </style>
  @stack('head-script')
</head>
<body class="bg-gray-100">

@include('backpage.base.navbar')

<div class="h-screen flex flex-row flex-wrap">
  {{-- sidebar --}}
  @include('backpage.base.sidebar')
  {{-- content --}}
    @yield('content')
</div>


<!-- script -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="js/scripts.js"></script>
<script src="{{ asset('js/main.js') }}"></script>
{{-- <script src="{{ asset('js/sidebar.js') }}"></script> --}}
{{-- <script src="{{ asset('assets/js-leaflet/Leaflet.NavBar.js') }}"></script> --}}
<!-- end script -->
@stack('body-script')
</body>
</html>