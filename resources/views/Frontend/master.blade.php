<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
 @include('Frontend.layouts.css_links')

</head>

<body>

    @include('Frontend.layouts.header')

    @yield('frontend-content')

    @include('Frontend.layouts.footer')

    @include('Frontend.layouts.js_links')

</body>
</html>
