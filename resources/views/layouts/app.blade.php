<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
</head>
<body>
    <div id="app">
        @include('inc.navbar')

        <main class="py-4">
          <div class="container">
            @include('inc.messages')
            @yield('content')
          </div>
        </main>
    </div>
    <script>
      CKEDITOR.replace( 'editor' );
  </script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://kit.fontawesome.com/38e68832a0.js" crossorigin="anonymous"></script>
</body>
</html>
