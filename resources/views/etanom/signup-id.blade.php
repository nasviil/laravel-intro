<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ $app_name }}</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.2-web\css\all.min.css') }}">
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-poppins">
  <div class="grid grid-cols-2 h-screen max-h-screen overflow-auto relative">
    <div class="flex flex-col w-full bg-gradient-to-t from-[#2E6229] via-[#183315] to-[#183939] items-center pt-14 sticky">
      <img class="w-64 h-auto" src="{{ asset('img/eTanom_logo.png') }}" alt="logo">
      <h1 class="text-7xl text-white font-extrabold text-center font-montserrat mt-4">Plant a Tree with a <br>
        Local, Effortlessly</h1>
      <h2 class="font-montserrat text-white text-xl tracking-widest mt-6 mb-4 text-center">Quick and Easy Tree
        Planting with your Community Planter</h2>
      <img class="absolute bottom-0 h-[60%] w-auto mt-4" src="{{ asset('img/hero-farmer.png') }}" alt="cta">
    </div>
    <div class="flex flex-col w-full px-6 py-6 justify-between">
      <div class="border-2 border-neutral-200 h-auto mb-6 w-full py-12 px-40">
        <div class="flex flex-col items-center ">
          <div class="flex w-full items-center">
            <a href="{{ url('etanom/signup/details') }}"><i class="fa-solid fa-arrow-left text-4xl"></i></a>
            <div class="flex-grow text-center font-montserrat font-bold text-5xl">Create an account</div>
          </div>
          <h2 class="font-montserrat text-xl mt-2 mb-16">Plant the Seeds of a Greener Future</h2>
        </div>
        <div class="flex flex-col justify-self-start">
          <div class="font-poppins font-semibold my-2 text-xl">VALID ID</div>
          <div class="w-full rounded-lg border-4 border-dashed border-neutral-300 flex flex-col justify-center items-center p-10 mb-8">
            <img src="{{ asset('img/id-front.png') }}" alt="id-front" class="mb-4">
            <div class="text-xl font-bold">Click to upload the front of your ID.</div>
            <div class="text-xl">or drag it here</div>
          </div>
          <div class="w-full rounded-lg border-4 border-dashed border-neutral-300 flex flex-col justify-center items-center p-10">
            <img src="{{ asset('img/id-back.png') }}" alt="id-front" class="mb-4">
            <div class="text-xl font-bold">Click to upload the back of your ID.</div>
            <div class="text-xl">or drag it here</div>
          </div>
        </div>
        <a href="{{ url('etanom/home/orders') }}">
          <button class="w-full bg-[#33B249] text-2xl font-montserrat h-14 font-semibold text-white rounded-lg mt-8 hover:bg-[#33b248c2]">Continue</button>
        </a>
      </div>
    </div>
  </div>

</body>

</html>