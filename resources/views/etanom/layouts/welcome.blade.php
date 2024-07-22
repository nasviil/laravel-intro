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
  <div class="2xl:grid 2xl:grid-cols-2 flex h-screen max-h-screen overflow-auto relative">
    <div class=" hidden 2xl:flex 2xl:flex-col w-full bg-gradient-to-t from-[#2E6229] via-[#183315] to-[#183939] items-center pt-14 sticky">
      <img class="w-64 h-auto" src="{{ asset ('img/eTanom_logo.png') }}" alt="logo">
      <h1 class="text-7xl text-white font-extrabold text-center font-montserrat mt-4">Plant a Tree with a <br> Local, Effortlessly</h1>
      <h2 class="font-montserrat text-white text-xl tracking-widest mt-6 mb-4 text-center">Quick and Easy Tree Planting with your Community Planter</h2>
      <img class="absolute bottom-0 h-[60%] w-auto mt-4" src="{{ asset ('img/hero-farmer.png') }}" alt="cta">
    </div>
    <div class="flex flex-col w-full px-6 py-6 justify-between">
      @yield('content')
    </div>
  </div>
  <div onclick="hideDialog()" id="dialog" class="fixed top-0 left-0 bg-black bg-opacity-40 w-screen h-screen justify-center items-center font-poppins hidden opacity-0">
    <div onclick="event.stopImmediatePropagation()" class="m-0 flex flex-col justify-center items-center bg-white p-12 rounded-2xl">
      <h1 class="text-2xl font-montserrat font-medium mb-8">Enter OTP</h1>
      <div class="otp__input flex">
        <input type="text" maxlength="1" class="styled-input">
        <input type="text" maxlength="1" class="styled-input">
        <input type="text" maxlength="1" class="styled-input">
        <input type="text" maxlength="1" class="styled-input">
        <input type="text" maxlength="1" class="styled-input">
        <input type="text" maxlength="1" class="styled-input">
      </div>
      <a href="{{ url('etanom/home/orders') }}" class="w-full">
        <button class="w-full bg-accept text-xl font-montserrat h-14 font-semibold text-white rounded-lg mt-8 hover:bg-accept_hover">Login</button>
      </a>
    </div>
  </div>
  <script>
    const inputs = document.querySelectorAll(".otp__input input");

    inputs.forEach((input, index) => {
      input.dataset.index = index;
      input.addEventListener("paste", handleOtp);
      input.addEventListener("keyup", handleOtp);
    });

    function handleOtp(e) {
      const input = e.target;
      let value = input.value;
      input.value = value ? value[0] : "";

      let fieldIndex = parseInt(input.dataset.index);
      if (value.length > 0 && fieldIndex < inputs.length - 1) {
        inputs[fieldIndex + 1].focus();
      }

      if (e.key === "Backspace" && fieldIndex > 0) {
        inputs[fieldIndex - 1].focus();
      }
    }

    function showDialog() {
      let dialog = document.getElementById("dialog");
      dialog.classList.remove("hidden");
      dialog.classList.add("opacity-100");
      dialog.classList.add("flex");
    };

    function hideDialog() {
      let dialog = document.getElementById("dialog");
      dialog.classList.remove("opacity-100");
      dialog.classList.add("opacity-0");
      dialog.classList.remove("flex");
      dialog.classList.add("hidden");;
    }

    document.addEventListener('DOMContentLoaded', () => {
      const inputs = document.querySelectorAll('.styled-input');

      inputs.forEach(input => {
        const checkValue = () => {
          if (input.value) {
            input.classList.add('has-value');
          } else {
            input.classList.remove('has-value');
          }
        };

        // Initial check in case the input already has a value
        checkValue();

        input.addEventListener('input', checkValue);
      });
    });
  </script>
</body>

</html>