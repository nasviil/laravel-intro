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
            <h1 class="w-full py-4 px-20 bg-white font-semibold text-xl tracking-wide rounded-t-lg">GCASH PAYMENT</h1>
          </label>
          <div class="content bg-white rounded-b-lg px-12 pt-4 pb-8">
            <h1 class="font-semibold mt-8 mb-4">FIRST NAME</h1>
            <input type="text" class="text-input border-neutral-200 px-4 py-2 text-lg w-full">
            <h1 class="font-semibold mt-8 mb-4">LAST NAME</h1>
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
        <li class="shadow-xl">
          <input type="radio" name="accordion" id="second">
          <label for="second">
            <h1 class="w-full py-4 px-20 bg-white font-semibold text-xl tracking-wide rounded-t-lg">MAYA PAYMENT</h1>
          </label>
          <div class="content bg-white rounded-b-lg px-12 pt-4 pb-8">
            <h1 class="font-semibold mt-8 mb-4">FIRST NAME</h1>
            <input type="text" class="text-input border-neutral-200 px-4 py-2 text-lg w-full">
            <h1 class="font-semibold mt-8 mb-4">LAST NAME</h1>
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
        <li class="shadow-xl">
          <input type="radio" name="accordion" id="third">
          <label for="third">
            <h1 class="w-full py-4 px-20 bg-white font-semibold text-xl tracking-wide rounded-t-lg">CREDIT/DEBIT CARD</h1>
          </label>
          <div class="content bg-white rounded-b-lg px-12 pt-4 pb-8">
            <h1 class="font-semibold mt-8 mb-4">CARD NUMBER</h1>
            <input type="text" class="text-input border-neutral-200 px-4 py-2 text-lg w-full">
            <h1 class="font-semibold mt-8 mb-4">NAME ON CARD</h1>
            <input type="text" class="text-input border-neutral-200 px-4 py-2 text-lg w-full">
            <div class="flex justify-between gap-12 w-full">
              <div class="w-[65%]">
                <h1 class="font-semibold mt-8 mb-4">EXPIRY DATE</h1>
                <input type="text" class="text-input border-neutral-200 px-4 py-2 text-lg w-full">
              </div>
              <div class="w-[45%]">
                <h1 class="font-semibold mt-8 mb-4">CVV</h1>
                <input type="text" class="text-input border-neutral-200 px-4 py-2 text-lg w-full">
              </div>
            </div>
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
        <li class="shadow-xl">
          <input type="radio" name="accordion" id="fourth">
          <label for="fourth">
            <h1 class="w-full py-4 px-20 bg-white font-semibold text-xl tracking-wide rounded-t-lg">BANK ACCOUNT</h1>
          </label>
          <div class="content bg-white rounded-b-lg px-12 pt-4 pb-8">
            <h1 class="font-semibold mt-8 mb-4">BANK ACCOUNT</h1>
            <input type="text" class="text-input border-neutral-200 px-4 py-2 text-lg w-full">
            <h1 class="font-semibold mt-8 mb-4">FULL NAME IN YOUR BANK ACCOUNT</h1>
            <input type="text" class="text-input border-neutral-200 px-4 py-2 text-lg w-full">
            <h1 class="font-semibold mt-8 mb-4">ACCOUNT NUMBER</h1>
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
    </section>
  </div>
</section>
@endsection