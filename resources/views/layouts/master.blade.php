<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts.head-tag')
    @yield('head-tag')
    
  </head>

  <body>
    @include('layouts.top-nav')
    @include('layouts.navbar')

    @yield('content')

    @include('layouts.footer')
    @include('layouts.script')
    @yield('script')
  </body>
</html>
