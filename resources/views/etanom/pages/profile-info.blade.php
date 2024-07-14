@extends('etanom.layouts.profile')

@section('profile-content')
<div class="grid grid-cols-2 px-8">
  <div class="flex flex-col text-xl gap-16 pt-12">
    <div>
      <h1 class="text-neutral-500">First Name</h1>
      <h2>Roel</h2>
    </div>
    <div>
      <h1 class="text-neutral-500">Birthdate</h1>
      <h2>December 69, 4200</h2>
    </div>
    <div>
      <h1 class="text-neutral-500">Phone Number</h1>
      <h2>096666666</h2>
    </div>
  </div>
  <div class="flex flex-col text-xl gap-16 pt-12">
    <div>
      <h1 class="text-neutral-500">Last Name</h1>
      <h2>Gaylord</h2>
    </div>
    <div>
      <h1 class="text-neutral-500">Gender</h1>
      <h2>Gay</h2>
    </div>
    <div>
      <h1 class="text-neutral-500">Email Address</h1>
      <h2>ilovemen@gay.com</h2>
    </div>
  </div>
</div>
@endsection