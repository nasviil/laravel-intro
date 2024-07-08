<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ $app_name }}</title>
  <link rel="icon" href="{{ asset('favicon.ico') }}">

  <!-- Fonts -->
  <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.2-web\css\all.min.css') }}">
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-black text-white">
  <header class="grid grid-cols-2">
    <div class="flex pl-4 gap-2 py-4 items-center">
      <i class="fa-solid fa-ellipsis text-2xl"></i>
      <a href="{{ url('imitate/index') }}" class="my-auto">
        <i class="fa-solid fa-chevron-left align-middle text-2xl ml-3 text-neutral-800"></i>
      </a>
      <i class="fa-solid fa-chevron-right align-middle text-2xl mx-3 text-neutral-800"></i>
      <div class="flex bg-neutral-900 rounded-full items-center justify-center h-10 w-10">
        <i class="fa-solid fa-house text-xl"></i>
      </div>
      <div class="flex mx-1 items-center px-2 rounded-full bg-neutral-800 h-12 border-2 border-zinc-800 focus-within:border-white group">
        <i class="fa-solid fa-magnifying-glass text-zinc-400 ml-2 group-focus-within:text-white"></i>
        <input type="text" class="bg-neutral-800 border-0 h-8 w-80 placeholder-neutral-500 focus:border-transparent focus:ring-0" placeholder="What do you want to play?">
        <div class="flex items-center justify-center border-l border-zinc-400 h-5">
          <i class="fa-regular fa-folder-closed m-2"></i>
        </div>
      </div>
    </div>
    <div class="flex items-center justify-end pr-3 gap-6 py3">
      <button class="text-black bg-white px-4 py-2 rounded-full font-bold text-sm">Explore Premium</button>
      <i class="fa-regular fa-bell text-xl text-zinc-500"></i>
      <i class="fa-solid fa-users text-xl text-zinc-500"></i>
      <div class="h-10 w-10 bg-zinc-800 flex items-center justify-center rounded-full">
        <div class="h-7 w-7 bg-emerald-500 rounded-full flex items-center justify-center">
          <h1 class="text-black font-bold">N</h1>
        </div>
      </div>
    </div>
  </header>
  <section class="grid grid-cols-4 gap-x-2 px-2">
    <div class="w-full h-96 bg-neutral-900 rounded-lg"></div>
    <div class="w-full h-96 bg-neutral-900 col-span-2 rounded-lg flex flex-col">
      <div class="">Browse All</div>
      <div class="h-48 w-auto bg-red-500"></div>
      <div class="h-2 w-auto bg-blue-500"></div>
    </div>
    <div class="w-full h-96 bg-neutral-900 rounded-lg">

    </div>
  </section>
  <footer class="grid grid-cols-3 h-2">
    <div class="flex">
      <div>photo</div>
      <div class="">
        <div class="">alam mo ba girl</div>
        <div>Hev Abi</div>
      </div>
    </div>
    <div></div>
    <div></div>

  </footer>

</body>

</html>