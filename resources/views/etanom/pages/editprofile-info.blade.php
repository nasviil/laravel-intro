@extends('etanom.layouts.dashboard')
@section('content')
<section class="h-auto flex-grow flex flex-col py-8 pl-72 pr-8 mt-20 overflow-auto">
  <h1 class="text-3xl font-semibold text-normal pb-4 border-b mb-4">Settings</h1>
  <div class="flex">
    @include('etanom.includes.editprofile-sidebar')
    <section class="w-full">
      <ul class="accordion text-lg">
        <li class="shadow-xl">
          <input type="radio" name="accordion" id="first">
          <label for="first">
            <h1 class="w-full py-4 px-20 bg-white font-semibold text-xl tracking-wide rounded-t-lg">Personal Information</h1>
          </label>
          <div class="content bg-white rounded-b-lg px-12 pt-4 pb-8">
            <div class="flex justify-between items-end gap-6">
              <div class="w-full">
                <h1 class="font-semibold">FIRST NAME</h1>
                <input type="text" class="text-input border-neutral-200 px-4 py-2 text-lg w-full">
              </div>
              <img src="{{ asset('img/profile-pic.png') }}" alt="">
            </div>
            <h1 class="font-semibold mt-8 mb-4">LAST NAME</h1>
            <input type="text" class="text-input border-neutral-200 px-4 py-2 text-lg w-full">
            <h1 class="font-semibold mt-8 mb-4">GENDER</h1>
            <input type="text" class="text-input border-neutral-200 px-4 py-2 text-lg w-full">
            <h1 class="font-semibold mt-8 mb-4">BIRTH DATE</h1>
            <input type="text" class="text-input border-neutral-200 px-4 py-2 text-lg w-full">
            <div class="flex justify-between gap-12 mt-8">
              <button class="text-center w-full rounded-full bg-neutral-300 text-neutral-500 py-4 text-lg">
                Discard
              </button>
              <button class="text-center w-full rounded-full bg-accept hover:bg-accept_hover text-white py-4 text-lg">
                Save Changes
              </button>
            </div>
          </div>
        </li>
        <li class="shadow-xl">
          <input type="radio" name="accordion" id="second">
          <label for="second">
            <h1 class="w-full py-4 px-20 bg-white font-semibold text-xl tracking-wide rounded-t-lg">Address</h1>
          </label>
          <div class="content bg-white rounded-b-lg px-12">
            <h1 class="font-semibold mb-4">STREET NAME</h1>
            <input type="text" class="text-input border-neutral-200 px-4 py-2 text-lg w-full">
            <h1 class="font-semibold mt-8 mb-4">CITY/MUNICIPALITY</h1>
            <input type="text" class="text-input border-neutral-200 px-4 py-2 text-lg w-full">
            <h1 class="font-semibold mt-8 mb-4">ZIP CODE</h1>
            <input type="text" class="text-input border-neutral-200 px-4 py-2 text-lg w-full">
            <h1 class="font-semibold mt-8 mb-4">COUNTRY</h1>
            <input type="text" class="text-input border-neutral-200 px-4 py-2 text-lg w-full">
            <div class="flex justify-between gap-12 mt-8">
              <button class="text-center w-full rounded-full bg-neutral-300 text-neutral-500 py-4 text-lg">
                Discard
              </button>
              <button class="text-center w-full rounded-full bg-accept hover:bg-accept_hover text-white py-4 text-lg">
                Save Changes
              </button>
            </div>
          </div>
        </li>
        <li class="shadow-xl">
          <input type="radio" name="accordion" id="third">
          <label for="third">
            <h1 class="w-full py-4 px-20 bg-white font-semibold text-xl tracking-wide rounded-t-lg">Valid ID</h1>
          </label>
          <div class="content bg-white rounded-b-lg px-12">
            <h1 class="font-semibold mb-4">ID TYPE</h1>
            <input type="text" class="text-input border-neutral-200 px-4 py-2 text-lg w-full">
            <h1 class="font-semibold mt-8 mb-4">ID NUMBER</h1>
            <input type="text" class="text-input border-neutral-200 px-4 py-2 text-lg w-full">
            <div class="grid grid-cols-2 justify-items-center mt-8">
              <div>
                <img src="{{ asset('img/id.png') }}" alt="" class="w-auto h-72 border p-8">
                <p class="text-center text-lg font-semibold mt-4">FRONT</p>
              </div>
              <div>
                <img src="{{ asset('img/id.png') }}" alt="" class="w-auto h-72 border p-8">
                <p class="text-center text-lg font-semibold mt-4">BACK</p>
              </div>
            </div>
            <div class="flex justify-between gap-12 mt-8">
              <button class="text-center w-full rounded-full bg-neutral-300 text-neutral-500 py-4 text-lg">
                Discard
              </button>
              <button class="text-center w-full rounded-full bg-accept hover:bg-accept_hover text-white py-4 text-lg">
                Save Changes
              </button>
            </div>
          </div>
        </li>
      </ul>

    </section>
  </div>
</section>
@endsection