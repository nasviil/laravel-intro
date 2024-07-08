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

  <header class="flex h-20 shadow-lg items-center justify-between px-4 mb-4 fixed left-0 right-0 top-0 bg-white z-50">
    <img class="h-10 w-auto" src="{{ asset('img/eTanom_logo.png') }}" alt="logo">
    <div class="flex items-center">
      <i class="fa-solid fa-bell text-2xl text-[#234A1F]"></i>
      <p class="text-xl ml-3 text-[#234A1F]">Notifications</p>
    </div>
  </header>