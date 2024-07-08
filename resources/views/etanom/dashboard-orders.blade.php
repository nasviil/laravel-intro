@extends('etanom.layouts.dashboard')
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

  @section('content')
  <section class="h-full flex-grow flex flex-col py-4 pr-14 pl-80 mr-[24%]">
    <div class="text-[#4DA444] text-4xl font-bold mb-4">Hello Roel. <span class="opacity-50 font-normal ml-2">Welcome Back!</span></div>
    <div class="flex justify-between gap-6">
      <button class="w-[33%] h-28 border border-[#3E8336] bg-[#3E8336] text-white rounded-lg flex items-center px-6">
        <img src="{{ asset('img/Orders-active.png') }}" alt="orders" class="mr-4 fill-white">
        <div class="text-left">
          <p class="text-xl tracking-widest">ORDERS</p>
          <p class="text-3xl font-bold">2</p>
        </div>
      </button>
      <a href="{{ url('etanom/dashboard/planting') }}" class="w-[33%]">
        <button class="w-full bg-white h-28 border border-[#C8E3C5] text-[#C8E3C5] rounded-lg flex items-center px-6">
          <img src="{{ asset('img/Planting-inactive.png') }}" alt="orders" class="mr-4 fill-[#C8E3C5]">
          <div class="text-left">
            <p class="text-xl tracking-widest">PLANTING</p>
            <p class="text-3xl font-bold">2</p>
          </div>
        </button>
      </a>
      <a href="{{ url('etanom/dashboard/planted') }}" class="w-[33%]">
        <button class="w-full bg-white h-28 border border-[#C8E3C5] text-[#C8E3C5] rounded-lg flex items-center px-6">
          <img src="{{ asset('img/Planted-inactive.png') }}" alt="orders" class="mr-4 fill-[#C8E3C5]">
          <div class="text-left">
            <p class="text-xl tracking-widest">PLANTED</p>
            <p class="text-3xl font-bold">2</p>
          </div>
        </button>
      </a>
    </div>
    <div class="w-full h-14 rounded-md my-4 bg-white border-0 flex gap-4 items-center pl-6">
      <img src="{{ asset('img/Search_Icon.png') }}" alt="" class="h-6 w-6">
      <input type="text" name="search" id="search" placeholder="Search" class="border-0 w-full text-xl focus:outline-none focus:ring-0">
    </div>
    <div class="bg-white rounded-b-md">
      <div class="px-14 border-t-8 border-[#4DA444] p-2 flex justify-between">
        <div class="font-bold text-xl">78GH3FBNJ<span class="font-normal border-l border-neutral-200 px-2 ml-2">Roel S. Bayola</span></div>
        <div class="text-[#4DA444] text-xl">TO ACCEPT</div>
      </div>
      <div class="px-14 border-t border-neutral-300 flex justify-between py-4">
        <div class="flex">
          <img src="{{ asset('img/Tree.png') }}" alt="" class="mr-2">
          <div>
            <p class="text-2xl font-bold tracking-wide">White Laawan</p>
            <p class="text-neutral-500 text-xl">
              <i class="fa-solid fa-location-dot text-orange-500"></i>
              Naawan, Misamis Oriental
            </p>
            <p class="text-neutral-500 text-xl"> <i class="fa-solid fa-tree text-orange-500"></i> Hardwood</p>
            <p class="text-neutral-500 text-xl">x2</p>
          </div>
        </div>
        <p class="text-xl text-[#4DA444]">P159</p>
      </div>
      <div class="px-14 border-t border-neutral-300 flex justify-between py-6">
        <div>
          <button class="py-2 px-4 text-xl bg-[#234a1f] text-white mr-4">View more items</button> <span class="text-neutral-400 text-xl">7 items</span>
        </div>
        <div class="flex flex-col items-end">
          <p class="text-xl">Order Total: <span class="ml-4 font-bold text-2xl text-[#4DA444]">P1,632</span></p>
          <button class="bg-[#33B249] text-xl text-white px-8 py-3 mt-6 rounded-md hover:bg-[#33b248da]">ACCEPT</button>
        </div>
      </div>
    </div>
    </div>
  </section>
  @include('etanom.includes.profile-card')
  @endsection

</html>