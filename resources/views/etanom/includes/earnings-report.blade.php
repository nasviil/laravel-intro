<div class="bg-white w-full h-full shadow-md rounded-xl p-8">
  <div class="flex justify-between">
    <h1 class="text-2xl font-semibold text-dark_active">Earnings Report</h1>
    <div class="rounded-md bg-white border flex items-center px-2">
      <input type="text" name="search" id="search" placeholder="Filter by month" class="border-0 text-lg focus:outline-none focus:ring-0 w-64">
      <img src="{{ asset('img/Filter.png') }}" alt="" class="h-6 w-6">
    </div>
  </div>
  <div class="grid grid-cols-3 mt-4 text-lg">
    <div class="pr-6 pl-2">
      <div class="pb-4 mb-4 border-b border-neutral-300">
        <h1 class="text-4xl font-bold mb-4">₱60,230</h1>
        <div class="flex items-center gap-2">
          <img src="{{ asset('img/earning-sm.png') }}" alt="" class="w-auto h-8">
          <p class="">Recent Earnings</p>
        </div>
        <p class="text-neutral-500 tracking-tighter">for the month of June</p>
      </div>
      <div>
        <div class="p-4 rounded-lg border border-light_active mb-4">
          <div class="flex gap-4">
            <img src="{{ asset('img/wallet-sm.png') }}" alt="" class="w-auto h-6">
            <p class="text-xl">Total Earnings</p>
          </div>
          <p class="text-4xl font-semibold tracking-wider mt-2">₱17,347</p>
        </div>
        <div class="p-4 rounded-lg border border-light_active mb-4">
          <div class="flex gap-4">
            <img src="{{ asset('img/wallet-sm.png') }}" alt="" class="w-auto h-6">
            <p class="text-xl">Total Earnings</p>
          </div>
          <p class="text-4xl font-semibold tracking-wider mt-2">₱17,347</p>
        </div>
        <button class="text-xl rounded-lg py-2 w-32 bg-dark_active text-white">Delete</button>
      </div>
    </div>
    <div class="col-span-3"></div>
  </div>
</div>