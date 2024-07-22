@extends('etanom.layouts.dashboard')
@section('content')
<section class="h-[calc(100vh-80px)] flex-grow flex flex-col py-8 pl-72 pr-8 mt-20">
  <h1 class="text-3xl font-semibold text-normal pb-4 border-b mb-4">Profile</h1>
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
        <a href="{{ url('/etanom/profile/edit/info') }}">
          <button class="bg-white text-darker px-4 py-2 text-xl rounded-xl font-semibold"><i class="fa-solid fa-gear mr-2"></i>Settings</button>
        </a>
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