@extends('etanom.layouts.profile')

@section('profile-content')
<div class="grid grid-cols-2 px-8">
  <div class="flex flex-col text-xl gap-16 pt-12">
    <div>
      <h1 class="text-neutral-500">ID Type</h1>
      <h2>Driver's License</h2>
    </div>
    <div>
      <img src="{{ asset('img/id.png') }}" alt="" class="p-4 border w-auto h-72 ml-auto mr-auto">
      <h1 class="text-lg mt-8 font-bold text-center">FRONT</h1>
    </div>
  </div>
  <div class="flex flex-col text-xl gap-16 pt-12">
    <div>
      <h1 class="text-neutral-500">ID number</h1>
      <h2>123456789-005</h2>
    </div>
    <div>
      <img src="{{ asset('img/id.png') }}" alt="" class="p-4 border w-auto h-72 ml-auto mr-auto">
      <h1 class="text-lg mt-8 font-bold text-center">BACK</h1>
    </div>
  </div>
</div>
@endsection