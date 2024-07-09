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

  <div class="h-full w-64 bg-[#234a1f] rounded-tr-3xl pt-12 px-4 fixed">
    <a href="{{ url('/etanom/home/orders') }}">
      <button class="w-full bg-white text-[#234A1F] text-left h-14 text-xl pl-6 rounded-lg mb-4">
        <span class="flex"><img src="{{ asset('img/Home.png') }}" alt="home" class="mr-6">Home</span>
      </button>
    </a>
    <a href="{{ url('/etanom/messages') }}">
      <button class="w-full text-white bg-[#234A1F] text-left h-14 text-xl pl-6 rounded-lg mb-4">
        <span class="flex"><img src="{{ asset('img/Messages.png') }}" alt="messages" class="mr-6">Messages</span>
      </button>
    </a>
    <a href="{{ url('/etanom/earnings') }}">
      <button class="w-full text-white bg-[#234A1F] text-left h-14 text-xl pl-6 rounded-lg mb-4">
        <span class="flex"><img src="{{ asset('img/Earnings.png') }}" alt="earnings" class="mr-6">Earnings</span>
      </button>
    </a>
    <a href="{{ url('/etanom/profile') }}">
      <button class="w-full text-white bg-[#234A1F] text-left h-14 text-xl pl-6 rounded-lg mb-4">
        <span class="flex"><img src="{{ asset('img/Profile.png') }}" alt="profile" class="mr-6">Profile</span>
      </button>
    </a>
  </div>