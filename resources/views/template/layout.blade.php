
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel 5.8 CRUD</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
  <!-- <link href="{{ asset('css/sweetalert.css') }}" rel="stylesheet"> -->
</head>
<body>
  <div class="container">
    @yield('content')
  </div>

</body>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
  <script src="{{ asset('js/jquery.min.js') }}" type="text/js"></script>
  <script src="{{ asset('js/sweetalert.min.js') }}" type="text/js"></script>
    @yield('script')
</html>