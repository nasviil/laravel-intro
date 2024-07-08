<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Index</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
  <h1 class="font-bold text-3xl">Applications</h1>
  <a href="{{ url('imitate/spotify') }}">
    <button>Spotify</button>
  </a>
  <a href="{{ url('imitate/discord') }}">
    <button>Discord</button>
  </a>

</body>

</html>