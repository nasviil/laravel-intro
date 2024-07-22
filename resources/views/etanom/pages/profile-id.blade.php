@extends('etanom.layouts.profile')

@section('profile-content')
<div class="grid grid-cols-2 py-12 px-8 justify-items-center text-xl">
  <div class="w-full">
    <div class="mr-auto mb-12">
      <h1 class="text-neutral-500">ID Type</h1>
      <h2>Gun License</h2>
    </div>
    <img src="{{ asset('img/id.png') }}" alt="" class="ml-auto mr-auto border p-4 w-auto h-72">
    <p class="text-center mt-4 font-semibold">FRONT</p>
  </div>
  <div class="w-full">
    <div class="mr-auto mb-12">
      <h1 class="text-neutral-500">ID Number</h1>
      <h2>69696969</h2>
    </div>
    <img src="{{ asset('img/id.png') }}" alt="" class="ml-auto mr-auto border p-4 w-auto h-72">
    <p class="text-center mt-4 font-semibold">BACK</p>
  </div>
</div>
@endsection