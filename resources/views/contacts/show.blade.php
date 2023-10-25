<x-app-layout>

  <x-slot:header>

    <Link
      href="{{ route('contacts.index') }}"
      class="flex items-center text-lg font-semibold hover:text-lime-900">

      <x-tabler-arrow-left class="w-5 h-5" />

      <span>All Contacts</span>

    </Link>

    <span class="flex-1"></span>

    <Link
      class="flex items-center mr-1 font-semibold text-lime-600 hover:text-lime-800"
      href="{{ route('contacts.edit', $contact) }}"
      modal>

      <x-tabler-pencil class="w-5 h-5" />

      <span class="hidden px-2 sm:inline-flex">
        Update
      </span>

    </Link>

    <Link
      class="flex items-center font-semibold text-rose-600 hover:text-rose-800"
      href="{{ route('contacts.destroy', $contact) }}"
      confirm-text="Really delete this contact?"
      confirm="{{ 'Delete ' . $contact->full_name }}"
      confirm-button="Yes! Why not?"
      cancel-button="No! Wait a minute"
      method="delete">

      <x-tabler-trash class="w-5 h-5" />

      <span class="hidden px-2 sm:inline-flex">

        Delete

      </span>

    </Link>

  </x-slot>

  <section class="max-w-2xl px-6 mx-auto my-12 sm:px-0">

    {{-- <div class="pb-8 border-b">

      <h1 class="mb-4 text-4xl font-medium">
        {{ $contact->fullname }}
      </h1>

      <section class="flex items-start gap-4 my-8">

        <x-tabler-address-book class="w-16 h-16 p-1 rounded-lg bg-lime-300" />

        <div class="flex flex-col">

          <p class="flex flex-col items-start gap-4 font-medium sm:flex-row sm:items-center">

            <span class="text-xl">
              {{ $contact->job_title }}
            </span>

            <span class="hidden sm:inline-block h-2 w-2 rounded-full {{ $contact->status === 'active' ? 'bg-green-500' : 'bg-rose-500' }}" />

            <x-splade-link
              class="text-lg text-gray-400 hover:text-blue-500"
              href="{{ route('companies.show', $contact->company_id) }}">
              {{ $contact->company->name }}
            </x-splade-link>

          </p>

          @isset($contact->phones)
            <p class="mt-2 text-gray-600">
              @foreach ($contact->phones as $phone)
                <div class="flex items-center gap-2">

                  <x-dynamic-component
                    :component="$phone->type === 'home' ? 'tabler-phone' : ($phone->type === 'work' ? 'tabler-device-landline-phone' : 'tabler-device-mobile')" />

                  <span class="block">
                    {{ $phone->number }}
                  </span>

                </div>
              @endforeach
            </p>
          @endisset

          <div class="flex items-center gap-2 text-gray-500">

            <x-tabler-mail />

            <span>
              {{ $contact->email }}
            </span>

          </div>

        </div>

      </section>

      @isset($contact->bio)

        <h3 class="mt-10 mb-8 text-2xl font-thin">
          Notes
        </h3>

        <article class="font-medium text-gray-600">
          {!! $contact->bio !!}
        </article>

      @endisset

      @isset($contact->interactions)

        <h3 class="mt-10 mb-8 text-2xl font-thin">
          Interactions
        </h3>

        <article class="font-medium text-gray-600">

          <div class="flow-root max-w-3xl mx-auto mt-8 sm:mt-12 lg:mt-16">
            <div class="-my-4 divide-y divide-gray-200 dark:divide-gray-700">
              <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                <p class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">
                  08:00 - 09:00
                </p>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                  <a href="#" class="hover:underline">Opening remarks</a>
                </h3>
              </div>

              <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                <p class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">
                  09:00 - 10:00
                </p>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                  <a href="#" class="hover:underline">Bergside LLC: Controlling the video traffic flows</a>
                </h3>
              </div>

              <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                <p class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">
                  10:00 - 11:00
                </p>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                  <a href="#" class="hover:underline">Flowbite - An Open Framework for Forensic Watermarking</a>
                </h3>
              </div>

              <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                <p class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">
                  11:00 - 12:00
                </p>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                  <a href="#" class="hover:underline">Coffee Break</a>
                </h3>
              </div>

              <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                <p class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">
                  12:00 - 13:00
                </p>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                  <a href="#" class="hover:underline">Scaling your brand from €0 to multimillion euros</a>
                </h3>
              </div>

              <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                <p class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">
                  13:00 - 14:00
                </p>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                  <a href="#" class="hover:underline">Updates from the Open Source Multimedia community</a>
                </h3>
              </div>

              <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                <p class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">
                  14:00 - 15:00
                </p>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                  <a href="#" class="hover:underline">Exploring the balance between customer acquisition and retention</a>
                </h3>
              </div>

              <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                <p class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">
                  15:00 - 16:00
                </p>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                  <a href="#" class="hover:underline">Flowbite - An Open Framework for Forensic Watermarking</a>
                </h3>
              </div>

              <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                <p class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">
                  16:00 - 14:00
                </p>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                  <a href="#" class="hover:underline">Scaling your brand from €0 to multimillion euros</a>
                </h3>
              </div>

              <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                <p class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">
                  17:00 - 14:00
                </p>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                  <a href="#" class="hover:underline">Drinks & networking</a>
                </h3>
              </div>
            </div>
          </div>

        </article>

      @endisset

    </div> --}}

    <div class="pb-8 border-b">

      <h1 class="mb-4 text-4xl font-medium">
        {{ $contact->fullname }}
      </h1>

      <section class="flex items-start gap-4 my-8">

        <x-tabler-address-book class="w-16 h-16 p-1 rounded-lg bg-lime-300" />

        <div class="flex flex-col">

          <p class="flex flex-col items-start gap-4 font-medium sm:flex-row sm:items-center">

            <span class="text-xl">
              {{ $contact->job_title }}
            </span>

            @isset($contact->company)

              <span class="hidden sm:inline-block h-2 w-2 rounded-full {{ $contact->status === 'active' ? 'bg-green-500' : 'bg-rose-500' }}" />

              <a
                wire:navigate
                class="text-lg text-gray-400 hover:text-blue-500"
                href="{{ route('companies.show', $contact?->company_id) }}">
                {{ $contact?->company?->name }}
              </a>

            @endisset

          </p>

          @isset($contact->phones)
            <p class="mt-2 text-gray-600">
              @foreach ($contact->phones as $phone)
                <div class="flex items-center gap-2">

                  <x-dynamic-component
                    :component="$phone->type === 'home' ? 'tabler-phone' : ($phone->type === 'work' ? 'tabler-device-landline-phone' : 'tabler-device-mobile')" />

                  <span class="block">
                    {{ $phone->number }}
                  </span>

                </div>
              @endforeach
            </p>
          @endisset

          <div class="flex items-center gap-2 text-gray-500">

            <x-tabler-mail />

            <span>
              {{ $contact->email }}
            </span>

          </div>

        </div>

      </section>

      @isset($contact->bio)

        <h3 class="mt-10 mb-8 text-2xl font-thin">
          Notes
        </h3>

        <article class="font-medium text-gray-600">
          {!! $contact->bio !!}
        </article>

      @endisset

      <x-divider></x-divider>

      <section class="flex items-center justify-between mt-10 mb-4">

        <h3 class="text-2xl font-thin">
          Company
        </h3>

        <x-button.secondary
          @click="showModal = true; intent = 'create_company'">
          <span>Add</span> <x-tabler-plus class="w-4" />
        </x-button.secondary>

      </section>

      <x-divider></x-divider>

      @isset($contact->interactions)

        <h3 class="mt-10 mb-4 text-2xl font-thin">
          Interactions
        </h3>

        <article class="font-medium text-gray-600">

          <div class="flow-root max-w-3xl mx-auto mt-8 sm:mt-12 lg:mt-16">

            <div class="-my-4 divide-y divide-gray-200 dark:divide-gray-700">

              <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                <p class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">
                  08:00 - 09:00
                </p>

                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                  <a href="#" class="hover:underline">Opening remarks</a>
                </h3>
              </div>

            </div>

          </div>

        </article>

      @endisset

    </div>

  </section>
</x-app-layout>
