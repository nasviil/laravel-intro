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
  <section class="h-[calc(100vh-80px)] flex-grow flex flex-col py-8 pl-72 pr-8 mt-20 overflow-auto">
    <h1 class="text-3xl font-semibold text-[#4DA444] pb-4 border-b mb-4">Profile</h1>
    <div class="h-full bg-white rounded-3xl w-full">
      <div class=" flex items-end px-48 py-4 bg-gradient-to-t from-[#2E6229] via-[#183315] to-[#183939] rounded-t-3xl h-44 relative w-full mb-6">
        <img src="{{ asset('img/profile-pic.png') }}" alt="" class="w-auto h-44 absolute -bottom-24">
        <div class="ml-48">
          <p class="text-3xl font-semibold text-white">Gaylord Roel wally bold Bayola
            <i class="fa-solid fa-circle-check ml-2 text-2xl"></i>
          </p>
          <p class="text-xl text-neutral-300 mt-2">Planter ID: 0042069</p>
        </div>
        <div class="self-end ml-auto flex gap-6">
          <button class="bg-white text-darker px-4 py-2 text-xl rounded-xl font-semibold"><i class="fa-regular fa-pen-to-square mr-2"></i>Edit Profile</button>
          <button class="bg-white text-darker px-4 py-2 text-xl rounded-xl font-semibold"><i class="fa-solid fa-gear mr-2"></i>Settings</button>
        </div>
      </div>
      <div class="flex h-24 items-center mb-10 ml-auto">
        <div class="mx-auto flex">
          <div class="border-r flex pr-4 h-full items-center">
            <img src="{{ asset('img/planted.png') }}" alt="" class="mr-4 w-auto h-14">
            <div>
              <h2 class="text-2xl text-normal font-semibold ">TREES PLANTED</h2>
              <h1 class="text-2xl text-normal font-bold">420</h1>
            </div>
          </div>
          <div class="pr-4 flex h-full items-center">
            <img src="{{ asset('img/planting.png') }}" alt="" class="mx-4 w-auto h-14">
            <div>
              <h2 class="text-2xl text-normal font-semibold ">TREES PLANTED</h2>
              <h1 class="text-2xl text-normal font-bold">69</h1>
            </div>
          </div>
          <div class="border-l flex pl-4 h-full items-center">
            <img src="{{ asset('img/growing.png') }}" alt="" class="mr-4 w-auto h-14">
            <div>
              <h2 class="text-2xl text-normal font-semibold ">TREES GROWING</h2>
              <h1 class="text-2xl text-normal font-bold">420</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full px-52 bg-white">
        <div class="flex w-full border-b-2 border-normal">
          <a href="{{ url('/etanom/profile/info') }}" class="text-lg font-semibold w-64 {{ Request::is('etanom/profile/info*') ? 'border-b-4 border-normal w-64 text-center' : 'text-center' }}">Personal Information</a>
          <a href="{{ url('/etanom/profile/address') }}" class="text-lg font-semibold w-64 {{ Request::is('etanom/profile/address*') ? 'border-b-4 border-normal w-64 text-center' : 'text-center' }}">Address</a>
          <a href="{{ url('/etanom/profile/id') }}" class="text-lg font-semibold w-64 {{ Request::is('etanom/profile/id*') ? 'border-b-4 border-normal w-64 text-center' : 'text-center' }}">Valid ID</a>
        </div>
        @yield('profile-content')
      </div>
    </div>
  </section>
  @endsection

</html>