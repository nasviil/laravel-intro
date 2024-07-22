@extends('etanom.layouts.welcome')
@section('content')
<div class="border-2 border-neutral-200 h-auto mb-6 w-full py-12 px-40">
  <div class="flex flex-col items-center ">
    <div class="flex w-full items-center">
      <a href="{{ url('etanom/signup/details') }}"><i class="fa-solid fa-arrow-left text-4xl"></i></a>
      <div class="flex-grow text-center font-montserrat font-bold text-5xl">Create an account</div>
    </div>
    <h2 class="font-montserrat text-xl mt-2 mb-16">Plant the Seeds of a Greener Future</h2>
  </div>
  <div class="flex flex-col justify-self-start">
    <div class="font-poppins font-semibold my-2 text-xl">VALID ID</div>
    <div class="w-full rounded-lg border-4 border-dashed border-neutral-300 flex flex-col justify-center items-center p-10 mb-8">
      <img src="{{ asset('img/id-front.png') }}" alt="id-front" class="mb-4">
      <div class="text-xl font-bold">Click to upload the front of your ID.</div>
      <div class="text-xl">or drag it here</div>
    </div>
    <div class="w-full rounded-lg border-4 border-dashed border-neutral-300 flex flex-col justify-center items-center p-10">
      <img src="{{ asset('img/id-back.png') }}" alt="id-front" class="mb-4">
      <div class="text-xl font-bold">Click to upload the back of your ID.</div>
      <div class="text-xl">or drag it here</div>
    </div>
  </div>
  <a href="{{ url('etanom/home/orders') }}">
    <button class="w-full bg-accept hover:bg-accept_hover text-2xl font-montserrat h-14 font-semibold text-white rounded-lg mt-8">Continue</button>
  </a>
</div>
@endsection