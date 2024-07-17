<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ $app_name }}</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.2-web\css\all.min.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet" />

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <section class="fixed right-0 h-full w-[25%] rounded-tl-3xl bg-white mt-24">
    <div class="pb-8 border-b border-neutral-200">
      <div class="flex pl-48 bg-gradient-to-t from-[#2E6229] via-[#183315] to-[#183939]  rounded-tl-3xl px-8 pt-16 relative">
        <img src="{{ asset('img/profile-pic.png') }}" alt="profile-picture" class="absolute left-6 -bottom-20">
        <div class="flex flex-col mb-4">
          <h1 class="text-white text-3xl font-semibold">Roel S. Bayola</h1>
          <h2 class="text-neutral-300 text-xl">Planter ID: 0042069</h2>
        </div>
      </div>
      <div class="flex justify-end w-full px-8 py-4">
        <a href="{{ url('/etanom/profile/info') }}">
          <button class="bg-[#234A1F] px-3 py-4 rounded-lg mr-6">
            <img src="{{ asset('img/View.png') }}" alt="" class="h-5 w-7">
          </button>
        </a>
        <a href="{{ url('/etanom/profile/edit/info') }}" class="">
          <button class="bg-[#234A1F] flex text-white items-center px-2 h-12 rounded-lg text-xl gap-3">
            <img src="{{ asset('img/Edit.png') }}" alt="" class="h-7 w-7">
            Edit Profile
          </button>
        </a>
      </div>
      <div>
        <div class="flex justify-between items-center px-4 mt-4">
          <div class="flex items-center">
            <img src="{{ asset('img/email-profile.png') }}" alt="" class="h-6 w-8 mr-2">
            <h2 class="text-xl">Email Address</h2>
          </div>
          <h1 class="font-semibold text-xl">roel@bayola.com</h1>
        </div>
        <div class="flex justify-between items-center px-4 mt-4">
          <div class="flex items-center">
            <img src="{{ asset('img/phone-profile.png') }}" alt="" class="h-8 w-8 mr-2">
            <h2 class="text-xl">Phone Number</h2>
          </div>
          <h1 class="font-semibold text-xl">0956723777</h1>
        </div>
      </div>
    </div>
    <div class="border-b border-neutral-200 px-4 py-8">
      <div class="flex w-full bg-[#EDF6EC] rounded-xl p-4 items-center justify-between">
        <div class="h-full flex flex-col items-center justify-center p-2 border-r border-neutral-200">
          <h1 class="text-4xl text-[#3E8336] font-semibold">643</h1>
          <h2 class="text-lg text-[#1B3918]">Trees Planted</h2>
        </div>
        <div class="h-full flex flex-col items-center justify-center p-2 border-r border-neutral-200">
          <h1 class="text-4xl text-[#3E8336] font-semibold">38</h1>
          <h2 class="text-lg text-[#1B3918]">Trees Planting</h2>
        </div>
        <div class="h-full flex flex-col items-center justify-center p-2">
          <h1 class="text-4xl text-[#3E8336] font-semibold">219</h1>
          <h2 class="text-lg text-[#1B3918]">Trees Growing</h2>
        </div>
      </div>
    </div>
    <div class="p-8">
      <h1 class="text-2xl text-[#234A1F] font-semibold mb-8">My Earnings</h1>
      <div class="flex justify-between mb-4">
        <div class="flex">
          <img src="{{ asset('img/earnings-profile-card.png') }}" alt="" class="w-7 h-6 mr-4">
          <h2 class="text-xl">Earnings</h2>
        </div>
        <h2 class="text-xl">P17,293</h2>
      </div>
      <div class="flex justify-between">
        <div class="flex">
          <img src="{{ asset('img/balance-profile-card.png') }}" alt="" class="w-7 h-6 mr-4">
          <h2 class="text-xl">Balance</h2>
        </div>
        <h2 class="text-xl text-[#4DA444] font-bold">P17,293</h2>
      </div>
      <div class="flex justify-between w-full py-6 gap-6">
        <button class="w-[50%] text-xl text-white bg-[#234A1F] px-2 py-3 rounded-md flex gap-4 items-center justify-center">
          <img src="{{ asset('img/Transactions.png') }}" alt="" class="w-6">Transactions</button>
        <button class="w-[50%] text-xl text-white bg-[#234A1F] px-4 py-4 rounded-md flex gap-4 items-center justify-center">
          <img src="{{ asset('img/withdraw.png') }}" alt="" class="w-8">Withdraw</button>
      </div>
    </div>
  </section>