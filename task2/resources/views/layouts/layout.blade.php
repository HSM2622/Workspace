<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TheWeighter</title>
</head>
<body>
  <div id="header">
    @section('header')
      @include('header')
    @show
  </div>
  <div id="container">
    @yield('content')
  </div>
  <div id="footer">
    @section('footer')
      @include('footer')
    @show
  </div>
</body>
</html>