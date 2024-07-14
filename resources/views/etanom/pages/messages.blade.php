@extends('etanom.layouts.dashboard')

@section('content')
<section class="h-[calc(100vh-80px)] flex-grow flex flex-col py-8 pl-72 pr-8 mt-20">
  <h1 class="text-3xl font-semibold text-[#4DA444] pb-4 border-b">Messages</h1>
  <div class="flex h-full gap-6">
    <section class="h-full w-[45%] bg-white overflow-auto mt-4 rounded-xl pt-10 px-6" style="scrollbar-gutter: stable">
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
            <p class="text-neutral-500 text-lg overflow-hidden text-ellipsis w-auto">para makapangwarta ko</p>
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
    </section>
    <section class="h-full w-full bg-white overflow-auto mt-4 rounded-xl flex flex-col px-6 py-6">
      <div class="flex border-b justify-start w-full items-center sticky top-0 bg-white pb-4">
        <img src="{{ asset('img/user1.png') }}" alt="" class="h-16 w-auto">
        <div class="ml-6">
          <p class="text-xl font-semibold">Roel Bayola</p>
          <p class="text-lg text-normal">Online</p>
        </div>
        <div class="justify-self-end ml-auto flex gap-6 items-center mr-4">
          <img src="{{ asset('img/phone-chat.png') }}" alt="" class="h-7 w-auto">
          <img src="{{ asset('img/options-chat.png') }}" alt="" class="h-7 w-auto">
        </div>
      </div>
      <div class="w-full mt-4 overflow-auto" style="scrollbar-gutter: stable">
        <div class="flex justify-center">
          <p class="bg-neutral-200 px-4 py-2 rounded-3xl">Today</p>
        </div>
        <div class="flex mb-4">
          <img src="{{ asset('img/user1.png') }}" alt="" class="h-14 w-auto">
          <div class="ml-4">
            <h3 class="text-lg font-semibold mb-2">Roel Bayola</h3>
            <p class="bg-light px-4 py-2 rounded-xl text-lg rounded-tl-none mb-1">pila inyo marijuana plant boss?</p>
            <p class="text-neutral-600">12:30pm</p>
          </div>
        </div>
        <div class="flex justify-end">
          <div class="mr-4 flex flex-col items-end">
            <h3 class="text-lg font-semibold mb-2">Malikey Maulana</h3>
            <p class="bg-normal px-4 py-2 rounded-xl text-lg rounded-tr-none mb-1 text-white">Illegal man na inyo girequest boss.</p>
            <p class="text-neutral-600">12:33pm</p>
          </div>
          <img src="{{ asset('img/farmer.png') }}" alt="" class="h-14 w-auto">
        </div>
        <div class="flex mb-4">
          <img src="{{ asset('img/user1.png') }}" alt="" class="h-14 w-auto">
          <div class="ml-4">
            <h3 class="text-lg font-semibold mb-2">Roel Bayola</h3>
            <div class="bg-light px-4 py-2 rounded-xl text-lg rounded-tl-none mb-1 inline-block">sige na bai</div>
            <div class="bg-light px-4 py-2 rounded-xl text-lg rounded-tl-none mb-1">para makapangwarta ko</div>
            <p class="text-neutral-600">12:38pm</p>
          </div>
        </div>
      </div>
      <div class="flex mt-auto justify-self-end gap-4 items-center">
        <button class="p-2 rounded-full border w-14 h-14">
          <i class="fa-regular fa-image text-2xl text-darker"></i>
        </button>
        <button class="p-2 rounded-full border w-14 h-14">
          <i class="fa-solid fa-paperclip text-2xl text-darker"></i>
        </button>
        <input type="text" class="bg-neutral-200 rounded-full h-14 w-full border-0 px-6 text-lg">
        <button class="bg-dark_active rounded-full text-white px-6 flex gap-4 items-center text-lg h-14">
          <i class="fa-solid fa-paper-plane text-2xl text-white"></i>
          Send</button>
      </div>
    </section>
  </div>
</section>
@endsection

</html>