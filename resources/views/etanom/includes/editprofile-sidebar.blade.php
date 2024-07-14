<section class="py-4 flex flex-col gap-12 text-xl font-semibold min-w-80">
  <a href="{{ url('/etanom/profile/edit/info') }}" class="{{ Request::is('etanom/profile/edit/info*') ? 'text-normal underline decoration-4 underline-offset-8' : '' }}">Edit Profile</a>
  <a href="{{ url('/etanom/profile/edit/manage') }}" class="{{ Request::is('etanom/profile/edit/manage*') ? 'text-normal underline decoration-4 underline-offset-8' : '' }}">Manage Account</a>
  <a href="{{ url('/etanom/profile/edit/billing') }}" class="{{ Request::is('etanom/profile/edit/billing*') ? 'text-normal underline decoration-4 underline-offset-8' : '' }}">Billing and Payments</a>
</section>