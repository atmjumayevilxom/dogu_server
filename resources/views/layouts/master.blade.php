<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.meta')
        @yield('meta')
    </head>
    <body class="stretched">
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
    </body>

</html>
