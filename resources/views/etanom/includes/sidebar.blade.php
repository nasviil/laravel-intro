<div class="h-[calc(100vh-20px)] w-64 bg-[#234a1f] rounded-tr-3xl pt-12 px-4 mt-24 fixed">
  <a href="{{ url('/etanom/home/orders') }}">
    <button class="w-full {{ Request::is('etanom/home*') ? 'bg-white text-[#234A1F]' : 'text-white bg-[#234A1F]' }} text-left h-14 text-xl pl-6 rounded-lg mb-4">
      <span class="flex {{ Request::is('etanom/home*') ? 'font-semibold' : 'font-normal' }}">
        <img src="{{ Request::is('etanom/home*') ? asset('img/Home-g.png') : asset('img/Home-w.png') }}" alt="home" class="mr-6">
        Home
      </span>
    </button>
  </a>
  <a href="{{ url('/etanom/inventory') }}">
    <button class="w-full {{ Request::is('etanom/inventory*') ? 'bg-white text-dark_active' : 'text-white bg-dark_active' }} text-left h-14 text-xl pl-6 rounded-lg mb-4">
      <span class="flex {{ Request::is('etanom/inventory*') ? 'font-semibold' : 'font-normal' }}">
        <img src="{{ Request::is('etanom/inventory*') ? asset('img/Trees-g.png') : asset('img/Trees-w.png') }}" alt="home" class="mr-6">
        Trees
      </span>
    </button>
  </a>
  <a href="{{ url('/etanom/messages') }}">
    <button class="w-full {{ Request::is('etanom/messages*') ? 'bg-white text-[#234A1F]' : 'text-white bg-[#234A1F]' }} text-left h-14 text-xl pl-6 rounded-lg mb-4">
      <span class="flex {{ Request::is('etanom/messages*') ? 'font-semibold' : 'font-normal' }}">
        <img src="{{ Request::is('etanom/messages*') ? asset('img/Messages-g.png') : asset('img/Messages-w.png') }}" alt="messages" class="mr-6">
        Messages
      </span>
    </button>
  </a>
  <a href="{{ url('/etanom/earnings') }}">
    <button class="w-full {{ Request::is('etanom/earnings*') ? 'bg-white text-[#234A1F]' : 'text-white bg-[#234A1F]' }} text-left h-14 text-xl pl-6 rounded-lg mb-4">
      <span class="flex {{ Request::is('etanom/earnings*') ? 'font-semibold' : 'font-normal' }}">
        <img src="{{ Request::is('etanom/earnings*') ? asset('img/Earnings-g.png') : asset('img/Earnings-w.png') }}" alt="earnings" class="mr-6">
        Earnings
      </span>
    </button>
  </a>
  <a href="{{ url('/etanom/profile/info') }}">
    <button class="w-full {{ Request::is('etanom/profile*') ? 'bg-white text-[#234A1F]' : 'text-white bg-[#234A1F]' }} text-left h-14 text-xl pl-6 rounded-lg mb-4">
      <span class="flex {{ Request::is('etanom/profile*') ? 'font-semibold' : 'font-normal' }}">
        <img src="{{ Request::is('etanom/profile*') ? asset('img/Profile-g.png') : asset('img/Profile-w.png') }}" alt="profile" class="mr-6">
        Profile
      </span>
    </button>
  </a>
</div>