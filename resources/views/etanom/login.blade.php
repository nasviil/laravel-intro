@extends('etanom.layouts.welcome')
@section('content')
<div class="border-2 border-neutral-200 h-auto mb-6 w-full py-12">
  <div class="mx-auto max-w-[550px]">
    <div class="flex flex-col items-center ">
      <h1 class="font-montserrat font-bold text-6xl text-center">Welcome Back!</h1>
      <h2 class="font-montserrat text-2xl mt-2 mb-16">Login to your account</h2>
    </div>
    <div class="flex flex-col justify-self-start">
      <div class="font-poppins font-semibold my-2 text-xl">COUNTRY CODE</div>
      <input class="styled-input text-input w-full text-xl font-poppins mb-6" placeholder="Philippines (+63)" type="text" required>
      <div class="font-poppins font-semibold my-2 text-xl">PHONE NUMBER</div>
      <input class="styled-input text-input w-full text-xl font-poppins" placeholder="Enter Phone Number" type="text" required>
      <p class="text-base text-gray-500">We’ll text you a One-Time Password (OTP) to confirm your number.</p>
      <div class="flex justify-between items-center mt-8">
        <div class="flex items-center gap-2">
          <input type="checkbox" class="rounded-md h-6 w-6 hover:cursor-pointer">
          <p class="font-poppins text-xl">Remember me?</p>
        </div>
        <p class="font-poppins text-xl">Forgot Password?</p>
      </div>
    </div>
    <button onclick="showDialog()" class="w-full bg-accept text-2xl font-montserrat h-14 font-semibold text-white rounded-lg mt-8 hover:bg-accept_hover">Continue</button>
    <div class="flex items-center mt-8">
      <div class="border-t border-gray-400 flex-grow"></div>
      <div class="px-3 text-gray-400 text-lg font-montserrat">OR</div>
      <div class="border-t border-gray-400 flex-grow"></div>
    </div>
    <button class="w-full h-14 font-montserrat font-bold border border-gray-300 rounded-lg mt-8 text-xl hover:bg-gray-300 flex items-center justify-center gap-4"><img src="{{ asset('img/Facebook.png') }}" alt="">Continue with Facebook</button>
    <button class="w-full h-14 font-montserrat font-bold border border-gray-300 rounded-lg mt-8 text-xl hover:bg-gray-300 flex items-center justify-center gap-4"><img src="{{ asset('img/Google.png') }}" alt="">Continue with Google</button>
    <a href="{{ url('etanom/login2') }}">
      <button class="w-full h-14 font-montserrat font-bold border border-gray-300 rounded-lg mt-8 text-xl hover:bg-gray-300 flex items-center justify-center gap-4"><img src="{{ asset('img/Email.png') }}" alt="">Continue with Email</button>
    </a>
  </div>
</div>
<div class="border-2 border-neutral-200 h-12 w-full py-8 flex items-center">
  <div class="mx-auto min-w-[550px] border">
    <div class="text-lg font-montserrat">Don't have an account? <a href="{{ url('etanom/signup') }}" class="text-black font-montserrat md:underline ml-2 font-bold text-lg">Sign up.</a></div>
  </div>
</div>
@endsection