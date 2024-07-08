<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
  <header class="bg-white h-10 px-8 py-3">
    <div class="flex justify-between items-center">
      <img class="h-10 w-auto cursor-pointer" src="https://ibotika.com/img/ibotika-logo.png" alt="logo">
      <ul class="flex gap-9">
        <li><a href="">Products</a></li>
        <li><a href="">Customers</a></li>
        <li><a href="">Blog</a></li>
        <li><a href="">About</a></li>
      </ul>
    </div>
    </div>
  </header>
  <section class="px-8">
    <div class="grid grid-cols-2">
      <div class="py-24">
        <h1 class="font-bold text-7xl text-[#2190C9] 2xl:text-7xl
                    2xl:text-gray-800">Transform your Pharmacy with <br><span class="text-[#F73860]">Ibotika Plus</span></h1>
        <p class="mt-8">Simplify, track, and endhance, customer, satisfaction with our easy-to-use pharmacy management solution.</p>
      </div>
      <div class="mx-auto my-auto pt-16">
        <img class="h-96 rounded-3xl" src="https://marvel-b1-cdn.bc0a.com/f00000000155404/www.pinelandsrecovery.com/wp-content/uploads/2019/04/heroin-withdrawal-01-1024x683.jpeg" alt="">
      </div>
    </div>
  </section>
</body>

</html>