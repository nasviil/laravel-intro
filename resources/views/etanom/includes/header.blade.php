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

<body class="font-poppins">
  <header class="flex h-20 shadow-lg items-center justify-between px-4 mb-4 fixed left-0 right-0 top-0 bg-white z-50">
    <a href="{{ url('/etanom/home/orders') }}">
      <img class="h-10 w-auto" src="{{ asset('img/eTanom_logo.png') }}" alt="logo">
    </a>
    <div class="flex items-center overflow-auto">
      <button onclick="toggleDropdown()" class="text-dark_active text-xl font-medium flex justify-end items-center w-44 py-2 px-2 gap-2">
        <i class="fa-solid fa-bell text-2xl text-[#234A1F]"></i>
        <p>Notifications</p>
      </button>
    </div>
  </header>

  <div id="notification-dropdown" class="fixed top-16 right-6 font-poppins shadow-xl bg-white z-50 border-2 rounded-md border-neutral-300 transition-opacity duration-300 w-[30%] hidden opacity-0">
    <div onclick="event.stopImmediatePropagation()" class="m-0 flex flex-col justify-center items-center bg-white pt-8 px-8 rounded-2xl w-full max-h-96 overflow-auto">
      <div class="flex w-full justify-between text-xl text-dark_active">
        <h1 class="font-medium">Notifications</h1>
        <i class="fa-solid fa-ellipsis text-2xl"></i>
      </div>
      <div class="flex gap-4 justify-start w-full items-center mt-4">
        <button class="text-lg rounded-full py-2 px-8 text-light bg-normal text-center">All</button>
        <button class="text-lg rounded-full py-2 px-8 bg-light text-normal text-center">Unread</button>
        <a href="" class="text-darker font-medium text-lg ml-auto">Mark all as read</a>
      </div>
      <div class="flex flex-col w-full my-8">
        <div class="flex justify-between w-full items-center text-lg">
          <p class="font-medium">Earnings</p>
          <a href="" class="text-normal text-lg">See all</a>
        </div>
      </div>
      <div class="flex flex-col w-full mt-8">
        <div class="flex justify-between w-full items-center text-lg">
          <p class="font-medium">Orders</p>
          <a href="" class="text-normal text-lg">See all</a>
        </div>
      </div>
    </div>
  </div>

  <script>
    function toggleDropdown() {
      const dropdown = document.getElementById('notification-dropdown');
      dropdown.classList.toggle('hidden');
      dropdown.classList.toggle('opacity-0');
      dropdown.classList.toggle('opacity-100');

      if (!dropdown.classList.contains('hidden')) {
        document.addEventListener('click', hideDropdownOnClickOutside);
      }
    }

    function hideDropdownOnClickOutside(event) {
      const dropdown = document.getElementById('notification-dropdown');
      const button = event.target.closest('button[onclick="toggleDropdown()"]');

      if (!dropdown.contains(event.target) && !button) {
        dropdown.classList.add('hidden');
        dropdown.classList.add('opacity-0');
        dropdown.classList.remove('opacity-100');
        document.removeEventListener('click', hideDropdownOnClickOutside);
      }
    }
  </script>
</body>

</html>