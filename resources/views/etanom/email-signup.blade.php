<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ $app_name }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
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
          <h1 class="font-montserrat font-bold text-6xl">Create an account</h1>
          <h2 class="font-montserrat text-2xl mt-2 mb-16">Plant the Seeds of a Greener Future</h2>
        </div>
        <div class="flex flex-col justify-self-start">
          <div class="font-poppins font-semibold my-2 text-xl">EMAIL ADDRESS</div>
          <input class="w-full mb-6 rounded-md font-poppins text-xl h-16" placeholder="Enter your email address" type="text">
          <div class="font-poppins font-semibold my-2 text-xl">PASSWORD</div>
          <input class="w-full rounded-md font-poppins text-xl mb-1 h-16" placeholder="***********" type="text">
        </div>
        <a href="{{ url('etanom/signup/details') }}">
          <button class="w-full bg-[#33B249] text-2xl font-montserrat h-14 font-semibold text-white rounded-lg mt-8 hover:bg-[#33b248c2]">Continue</button>
        </a>
        <div class="flex items-center mt-8">
          <div class="border-t border-gray-400 flex-grow"></div>
          <div class="px-3 text-gray-400 text-lg font-montserrat">OR</div>
          <div class="border-t border-gray-400 flex-grow"></div>
        </div>
        <button class="w-full h-14 font-montserrat font-bold border border-gray-300 rounded-lg mt-8 text-xl hover:bg-gray-300 flex items-center justify-center gap-4"><img src="{{ asset('img/Facebook.png') }}" alt="">Continue with Facebook</button>
        <button class="w-full h-14 font-montserrat font-bold border border-gray-300 rounded-lg mt-8 text-xl hover:bg-gray-300 flex items-center justify-center gap-4"><img src="{{ asset('img/Google.png') }}" alt="">Continue with Google</button>
        <a href="{{ url('etanom/signup') }}">
          <button class="w-full h-14 font-montserrat font-bold border border-gray-300 rounded-lg mt-8 text-xl hover:bg-gray-300 flex items-center justify-center gap-4"><img src="{{ asset('img/phone.png') }}" alt="">Continue with Phone</button>
        </a>
      </div>
      <div class="border-2 border-neutral-200 h-12 w-full px-40 py-8 flex items-center">
        <div class="align-middle text-lg font-montserrat">Already have an account?</div>
        <a href="{{ url('etanom/login2') }}" class="text-black font-montserrat md:underline ml-2 font-bold text-lg">Login.</a>
      </div>
    </div>
  </div>

</body>

</html>