<nav class="bg-white border-b border-gray-100">

  <!-- Primary Navigation Menu -->
  <div class="max-w-full px-4 mx-auto sm:max-w-3xl sm:px-6 lg:px-8">

    <div class="flex justify-between h-16">

      <div class="flex">

        <!-- Logo -->
        <div class="flex items-center shrink-0">

          <x-splade-link href="{{ route('dashboard') }}">

            <x-application-logo class="block w-auto h-10 text-gray-600 fill-current" />

          </x-splade-link>

        </div>

        <!-- Navigation Links -->
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

          <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">

            {{ __('Dashboard') }}

          </x-nav-link>

          <x-nav-link :href="route('companies.index')" :active="request()->routeIs('companies.*')">

            {{ __('Companies') }}

          </x-nav-link>

          <x-nav-link :href="route('contacts.index')" :active="request()->routeIs('contacts.*')">

            {{ __('Contacts') }}

          </x-nav-link>

        </div>

      </div>

      <!-- Settings Dropdown -->
      <div class="hidden sm:flex sm:items-center sm:ml-6">

        <x-dropdown placement="bottom-end">

          <x-slot name="trigger">

            <button
              class="flex items-center gap-1 text-sm font-medium text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300">

              <div class="flex flex-col leading-none text-left">

                <span class="font-semibold">{{ Auth::user()->full_name }}</span>

                <span class="text-xs font-thin text-gray-400 capitalize">{{ Auth::user()->email }}</span>

              </div>

              <div class="flex items-center justify-center w-12 h-12 p-2 rounded-full bg-lime-200">

                <x-tabler-user class="stroke-current w-7 h-7"  />

              </div>

            </button>

          </x-slot>

          <x-slot name="content">

            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">

              @csrf

              <x-dropdown-link as="a" :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">

                {{ __('Log Out') }}

              </x-dropdown-link>

            </form>

          </x-slot>

        </x-dropdown>

      </div>

      <!-- Hamburger -->
      <div class="flex items-center -mr-2 sm:hidden">

        <x-splade-link  href="#mobile-slideout" class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">

          <x-tabler-menu class="w-6 h-6" />

        </x-splade-link>
      </div>
    </div>
  </div>
</nav>

<x-splade-modal name="mobile-slideout" slideover max-width="sm">

  <!-- Mobile Slideout Responsive Navigation Menu -->
  <nav class="sm:hidden">

    <div class="pt-2 pb-3 space-y-1">

      <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">

        {{ __('Dashboard') }}

      </x-responsive-nav-link>

      <x-responsive-nav-link :href="route('companies.index')" :active="request()->routeIs('companies.*')">

        {{ __('Companies') }}

      </x-responsive-nav-link>

      <x-responsive-nav-link :href="route('contacts.index')" :active="request()->routeIs('contacts.*')">

        {{ __('Contacts') }}

      </x-responsive-nav-link>

    </div>

    <!-- Responsive Settings Options -->
    <div class="pt-4 pb-1 border-t border-gray-200">

      <div class="px-4">

        <div class="text-base font-medium text-gray-800">{{ Auth::user()->full_name }}</div>

        <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>

      </div>

      <div class="mt-3 space-y-1">

        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">

          @csrf

          <x-responsive-nav-link as="a" :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
            {{ __('Log Out') }}
          </x-responsive-nav-link>
        </form>

      </div>

    </div>

  </nav>

</x-splade-modal>
