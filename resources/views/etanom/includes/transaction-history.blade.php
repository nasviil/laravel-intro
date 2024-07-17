<div class="bg-white row-span-2 w-[50%] h-full shadow-md rounded-xl">
  <div class="bg-gradient-to-t rounded-t-xl from-[#2E6229] via-[#183315] to-[#183939] p-6 text-center">
    <h1 class="text-2xl text-white font-semibold text-center">Transaction History</h1>
  </div>
  <div class="h-full w-full py-4 text-xl">
    <div class="flex items-center justify-between w-full px-8">
      <p class="mr-20 font-medium">As of July 02, 2024</p>
      <div class="flex items-center gap-6">
        <div class="rounded-md bg-white border flex items-center px-2">
          <input type="text" name="search" id="search" placeholder="Search transactions" class="border-0 text-xl focus:outline-none focus:ring-0 w-96">
          <img src="{{ asset('img/Search_Icon.png') }}" alt="" class="h-6 w-6">
        </div>
        <img src="{{ asset('img/Filter.png') }}" alt="" class="w-auto h-6">
      </div>
    </div>
    <h2 class="font-medium py-8 pl-8 text-xl">June 26, 2024</h2>
    <div class="bg-[#F6FAF6] px-8 py-4 text-xl gap-2 flex flex-col border-y border-neutral-300">
      <p>Time</p>
      <div class="flex justify-between">
        <p class="text-2xl font-semibold">Earnings</p>
        <div class="flex flex-col items-end font-medium gap-2">
          <p>+ ₱12,000</p>
          <p class="text-normal">Balance: ₱12,457</p>
        </div>
      </div>
      <p class="font-medium">Order: <span class="font-normal"></span></p>
      <p class="font-medium">Order: <span class="font-normal"></span></p>
      <p class="font-medium">Order: <span class="font-normal"></span></p>
    </div>
  </div>
</div>