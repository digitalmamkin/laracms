<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <title>{{ config ('app.name', 'LaraCMS') }}</title>
</head>
<body data-theme="dark">
  @include('partials.header2')
    @yield('content')
  @include('partials.footer')
<script src="{{ asset('assets/js/scripts.js') }}"></script>

@yield('scripts')
</body>
</html>
