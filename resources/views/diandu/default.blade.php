<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', '电镀溶液智慧检测系统')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  </head>
  <body>
    @include('diandu._header')

  <div class="col-md-12" id="bg">
    <div class="container" >
      <div class="offset-md-1 col-md-10">
        @yield('content')
      </div>
    </div>
  </div>

    <script src="{{ mix('js/app.js') }}"></script>
  </body>
</html>
