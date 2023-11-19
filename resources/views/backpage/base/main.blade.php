<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
  <link rel="shortcut icon" href="./img/fav.png" type="image/x-icon">  
  <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">  
  <title>Backpage webgis</title>

  {{-- yield untuk script --}}
  @yield('script')
</head>
<body class="bg-gray-100">

    @include('backpage.base.sidebar')
    @include('backpage.base.navbar')

    <div>
        {{ $slot }}
    </div>


<!-- script -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="js/scripts.js"></script>
@yield('addon-script')
<!-- end script -->

</body>
</html>