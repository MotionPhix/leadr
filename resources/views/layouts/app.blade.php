<div class="min-h-screen bg-gray-100">

  @include('layouts.navigation')

  <!-- Page Heading -->
  @isset($header)

    <header class="sticky top-0 z-20 bg-white shadow">

      <div class="flex items-center max-w-full px-6 py-3 mx-auto sm:max-w-3xl sm:px-6 lg:px-8">

        {{ $header }}

      </div>

    </header>

  @endisset

  <!-- Page Content -->
  <main class="relative z-10 max-w-full px-6 mx-auto sm:max-w-3xl">
    {{ $slot }}
  </main>

  <x-footer />

</div>
