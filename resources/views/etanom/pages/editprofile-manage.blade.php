@extends('etanom.layouts.dashboard')
@section('content')
<section class="h-auto flex-grow flex flex-col py-8 pl-72 pr-8 mt-20 overflow-auto">
  <h1 class="text-3xl font-semibold text-[#4DA444] pb-4 border-b mb-4">Settings</h1>
  <div class="flex">
    @include('etanom.includes.editprofile-sidebar')
    <section class="w-full">
      <ul class="accordion text-lg">
        <li class="shadow-xl">
          <input type="radio" name="accordion" id="first">
          <label for="first">
            <h1 class="w-full py-4 px-20 bg-white font-semibold text-xl tracking-wide rounded-t-lg">Your Account</h1>
          </label>
          <div class="content bg-white rounded-b-lg px-12">
            <h1 class="font-semibold mb-4">EMAIL ADDRESS</h1>
            <input type="text" class="text-input border-neutral-200 px-4 py-2 text-lg w-full">
            <h1 class="font-semibold mt-8 mb-4">PASSWORD</h1>
            <input type="text" class="text-input border-neutral-200 px-4 py-2 text-lg w-full">
            <h1 class="font-semibold mt-8 mb-4">PHONE NUMBER</h1>
            <input type="text" class="text-input border-neutral-200 px-4 py-2 text-lg w-full">
            <div class="flex justify-between gap-12 mt-8">
              <button class="text-center w-full rounded-full bg-neutral-300 text-neutral-500 py-4 text-lg">
                Discard
              </button>
              <button class="text-center w-full rounded-full bg-[#33B249] text-white py-4 text-lg">
                Save Changes
              </button>
            </div>
          </div>
        </li>
      </ul>
      <h1 class="w-full py-6 px-20 bg-white font-semibold text-xl tracking-wide rounded-t-lg border-b border-neutral-300">Deactivation and Deletion</h1>
      <div class="bg-white h-auto rounded-b-lg px-20 py-6">
        <div class="flex justify-between mb-20">
          <div>
            <h1 class="text-lg font-semibold">Deactivate Account</h1>
            <p class="text-neutral-500">Temporary hide your profile</p>
          </div>
          <button class="text-xl rounded-full py-4 w-72 bg-neutral-300 font-semibold tracking-wide">Deactivate</button>
        </div>
        <div class="flex justify-between mb-20">
          <div>
            <h1 class="text-lg font-semibold">Delete Data and Account</h1>
            <p class="text-neutral-500">Permanently delete your data and everything associated with your account</p>
          </div>
          <button class="text-xl rounded-full py-4 w-72 bg-dark_active text-white font-semibold tracking-wide">Delete</button>
        </div>
      </div>
    </section>
  </div>
</section>
@endsection