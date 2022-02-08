<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Roboto+Slab&display=swap" rel="stylesheet">
  <title>Traders</title>
</head>
<body data-theme="@guest(){{config('app.default_theme')}}@else{{auth()->user()->theme ?? config('app.default_theme')}}@endguest">
  @include('partials.header')
  <div class="padding-top-sm">
    @include('admin.partials.alerts')
    @yield('content')
  </div>  @include('partials.footer')
<script src="{{ asset('assets/js/scripts.js') }}"></script>
</body>
</html>