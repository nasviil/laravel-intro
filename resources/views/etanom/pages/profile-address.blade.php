@extends('etanom.layouts.profile')

@section('profile-content')
<div class="grid grid-cols-2 px-8">
  <div class="flex flex-col text-xl gap-16 pt-12">
    <div>
      <h1 class="text-neutral-500">Street</h1>
      <h2>123 Pleground St.</h2>
    </div>
    <div>
      <h1 class="text-neutral-500">City/Municipality</h1>
      <h2>Los Santos</h2>
    </div>
  </div>
  <div class="flex flex-col text-xl gap-16 pt-12">
    <div>
      <h1 class="text-neutral-500">ZIP Code</h1>
      <h2>42069</h2>
    </div>
    <div>
      <h1 class="text-neutral-500">Country</h1>
      <h2>USA</h2>
    </div>
  </div>
</div>
@endsection