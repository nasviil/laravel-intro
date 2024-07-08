<!-- resources/views/layouts/app.blade.php -->

<html>
  <head>
    <title>App Name - @yield('title')</title>
  </head>
  <body>
    @include('includes.header')
    <div class="container">
      @yield('content')
    </div>
  </body>
</html>