<x-splade-modal
  position="top"
  max-width="xl"
  close-explicitly
  :close-button="false"
  class="p-4 rounded-md shadow dark:bg-gray-800 sm:p-5">

  <div class="flex items-center justify-between pb-4 mb-4 border-b rounded-t sm:mb-5 dark:border-gray-600">

    <h3 class="text-2xl font-semibold text-gray-900 dark:text-white">
      {{ $contact->id ? 'Edit' : 'Add' }} contact
    </h3>

    <button
      type="button"
      @click="modal.close"
      class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-md text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      <span class="sr-only">Close modal</span>
    </button>

  </div>

  <x-splade-form
    :default="$contact"
    class="grid grid-cols-2 gap-6"
    action="{{ $contact->id ? route('contacts.update', $contact) : route('contacts.store') }}"
    :method="$contact->id ? 'patch' : 'post'" >

    <div>

      <x-input-label
        for="first_name"
        class="mb-1">
        {{ __('First Name') }}
      </x-input-label>

      <x-input.text
        id="first_name"
        placeholder="Enter contact's first"
        v-model="form.first_name"
        autofocus />

      <InputError
        :error="form.errors.first_name"
        class="mt-1" />

    </div>

    <div>

      <x-input-label
        for="last_name"
        class="mb-1">
        {{ __('Last Name') }}
      </x-input-label>

      <x-input.text
        id="last_name"
        placeholder="Enter your last name"
        v-model="form.last_name" />

      <InputError
        :error="form.errors.last_name"
        class="mt-1" />

    </div>

    <div>

      <x-input-label
        for="job_title"
        class="mb-1">
        {{ __('Job Post') }}
      </x-input-label>

      <x-input.text
        id="job_title"
        placeholder="Enter contact's job position"
        v-model="form.job_title"
        autofocus />

      <InputError
        :error="form.errors.job_title"
        class="mt-1" />

    </div>

    <div>

      <x-input-label
        for="email"
        class="mb-1">
        {{ __('Email') }}
      </x-input-label>

      <x-input.text
        id="email"
        placeholder="Enter contact's email address"
        v-model="form.email"
        autofocus />

      <InputError
        :error="form.errors.email"
        class="mt-1" />

    </div>

    {{-- <x-splade-input
      name="first_name"
      label="First name"
      placeholder="Enter contact's first name"
      class="col-span-2 sm:col-span-1" /> --}}

    {{-- <x-splade-input
      name="last_name"
      label="Last name"
      placeholder="Enter contact's last name"
      class="col-span-2 sm:col-span-1" /> --}}

    {{-- <x-splade-input
      name="job_title"
      label="Works as a"
      placeholder="Enter contact's job position"
      class="col-span-2 sm:col-span-1" /> --}}

    {{-- <x-splade-input
      name="email"
      label="Email address"
      placeholder="Enter contact's email address"
      class="col-span-2 sm:col-span-1" /> --}}

    {{-- <x-splade-select
      name="company_id"
      :options="$companies"
      placeholder="Pick a company"
      label="Company"
      class="col-span-2" />

    <section class="col-span-2">
      <span v-html="form.contact"></span>
      <PhoneInput v-model="form.contact.phones" :errors="form.errors" />
    </section>

    <x-splade-wysiwyg
      name="bio"
      label="Notes"
      class="col-span-2"
      placeholder="Brief notes about the contact"
      jodit="{
        showXPathInStatusbar: false,
        buttons: ['bold', 'italic', 'print'],
        readonly: false,
        toolbarAdaptive: false,
      }" /> --}}

    <section
      class="flex items-center justify-end col-span-2 gap-2">

      <button
        class="px-3 font-semibold transition border-2 rounded-md text-lime-100 dark:text-gray-800 border-lime-500 bg-lime-500 hover:bg-lime-700 hover:border-lime-700"
        :class="form.processing ? 'py-2.5' : 'py-1.5'"
        type="submit">

        <span v-if="!form.processing">

          {{ $contact->id ? 'Update' : 'Save' }}

        </span>

        <x-spinner-loader class="la-sm" v-if="form.processing" />

      </button>

      <button
        type="button"
        class="font-semibold rounded-md px-3 py-1.5 border-2 border-lime-500 hover:border-lime-700 dark:text-lime-100"
        @click="modal.close">
        Cancel
      </button>
    </section>

  </x-splade-form>

</x-splade-modal>
