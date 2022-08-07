<!doctype html>
<html lang="en" class="js">

<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/svg+xml" href="{{ asset(env('FAV_ICON_URL')) }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  {!! SEOMeta::generate() !!}
  {!! env('FONT') !!}
  @include('components.layouts.partials.back-to-top')<!-- Back to Top -->
</head>

<!-- Theme config -->
<body data-theme="@guest(){{config('app.default_theme')}}@else{{auth()->user()->theme()}}@endguest">

<!-- Header -->
  @include(env('HEADER'))

<!-- Random Image -->
<div class="margin-bottom-sm">
  @include('components.layouts.partials.hero-random-image')
</div>

<!-- Content -->
<div class="container max-width-adaptive-lg margin-top-sm">
  @yield('content')
</div>

<!-- Footer -->
<div class="padding-top-sm">
  @include(env('FOOTER'))
</div>

<!-- Tracker -->
<div class="padding-top-sm">
  @include(env('TRACKER'))
</div>

<!-- Scripts -->
<script src="{{ asset('assets/js/scripts.js') }}"></script>
  @stack('custom-scripts')
</body>
</html>
