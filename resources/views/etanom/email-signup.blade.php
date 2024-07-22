@extends('etanom.layouts.welcome')
@section('content')
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
    <button class="w-full bg-accept hover:bg-accept_hover text-2xl font-montserrat h-14 font-semibold text-white rounded-lg mt-8">Continue</button>
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
@endsection