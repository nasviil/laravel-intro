@extends('etanom.layouts.dashboard')
@section('content')
<section class="h-full flex-grow flex flex-col py-8 pl-72 pr-8 mt-20">
  <h1 class="text-3xl font-semibold text-[#4DA444] pb-4 border-b mb-4">Earnings</h1>
  <div class="flex gap-8">
    <div class="flex flex-col gap-8 w-[50%]">
      @include('etanom.includes.earnings-report')
      @include('etanom.includes.earnings-breakdown')
    </div>
    @include('etanom.includes.transaction-history')
  </div>
</section>
@endsection