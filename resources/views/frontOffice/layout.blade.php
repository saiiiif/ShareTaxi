<!doctype html>
<html>
@yield('head')
<body>
@include('sweet::alert')
<div id="wrapper">
    @yield('header')
    @yield('content')
    @yield('footer')
</div>
@include('frontOffice.inc.scripts')
</body>
</html>