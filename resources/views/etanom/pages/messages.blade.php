@extends('etanom.layouts.dashboard')

@section('content')
<section class="h-[calc(100vh-80px)] flex-grow flex flex-col py-8 pl-72 pr-8 mt-20">
  <h1 class="text-3xl font-bold text-[#4DA444] pb-4 border-b">Messages</h1>
  <div class="flex h-full gap-6">
    <div class="h-full w-[45%] bg-white overflow-auto mt-4 rounded-xl pt-10 px-6" style="scrollbar-gutter: stable">
      <div class="flex mb-8 items-center justify-between">
        <div class="rounded-md bg-white border flex items-center px-2">
          <input type="text" name="search" id="search" placeholder="Search chat" class="border-0 text-lg focus:outline-none focus:ring-0 w-64">
          <img src="{{ asset('img/Search_Icon.png') }}" alt="" class="h-6 w-6">
        </div>
        <div class="flex gap-2">
          <img src="{{ asset('img/new-message.png') }}" alt="" class="h-6 w-6">
          <p class="">New Message</p>
        </div>
      </div>
      <div class="flex justify-between p-4 items-start rounded-md hover:bg-neutral-200 cursor-pointer">
        <div class="flex">
          <img src="{{ asset('img/user1.png') }}" alt="" class="w-auto h-16">
          <div class="ml-4">
            <p class="font-semibold text-xl">Roel Bayola</p>
            <p class="text-neutral-500 text-lg">bai</p>
          </div>
        </div>
        <p class="text-neutral-500 text-xl">25:61</p>
      </div>
      <div class="flex justify-between p-4 items-start rounded-md hover:bg-neutral-200 cursor-pointer">
        <div class="flex">
          <img src="{{ asset('img/user2.png') }}" alt="" class="w-auto h-16">
          <div class="ml-4">
            <p class="font-semibold text-xl">Zeus Morley Pineda</p>
            <p class="text-neutral-500 text-lg">bike ta c3</p>
          </div>
        </div>
        <p class="text-neutral-500 text-xl">25:61</p>
      </div>
      <div class="flex justify-between p-4 items-start rounded-md hover:bg-neutral-200 cursor-pointer">
        <div class="flex">
          <img src="{{ asset('img/user3.png') }}" alt="" class="w-auto h-16">
          <div class="ml-4">
            <p class="font-semibold text-xl">James Ocao</p>
            <p class="text-neutral-500 text-lg">I love kids</p>
          </div>
        </div>
        <p class="text-neutral-500 text-xl">25:61</p>
      </div>
    </div>
    <div class="h-full w-full bg-white overflow-auto mt-4 rounded-xl"></div>
  </div>
</section>
@endsection

</html>