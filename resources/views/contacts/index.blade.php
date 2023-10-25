<x-app-layout>

  <x-slot:header>

    <h2 class="text-xl font-semibold leading-tight text-gray-800">

    {{ __('Explore Contacts') }}

    </h2>

    <span class="flex-1"></span>

    <x-button
      href="{{ route('contacts.create') }}"
      modal>
      New
    </x-button>

  </x-slot>

  <section class="grid max-w-full grid-cols-2 gap-4 px-6 py-12 mx-auto space-y-6 sm:px-0">

    @forelse ($contacts as $contact)

      <x-company-card :contact="$contact" />

    @empty

      <article class="flex flex-col items-center col-span-2 gap-4 py-10 text-gray-500">

        <x-tabler-id
          stroke-width="1.5"
          class="w-20 h-20 p-4 bg-gray-200 rounded-full stroke-lime-500" />

        <h2
          class="text-xl font-medium sm:text-xl">
          You don't have any contacts yet!
        </h2>

        <x-splade-link
          href="{{ route('contacts.create') }}"
          class="inline-flex items-center gap-2 px-3 py-2 font-semibold text-white transition rounded-lg bg-lime-500 hover:bg-lime-700"
          modal>

          <x-tabler-plus
            stroke-width="3" />

          <span>
            Add Contact
          </span>

        </x-splade-link>

      </article>

    @endforelse

  </section>

</x-app-layout>
