<x-guest-layout>

  <x-auth-card>

    <x-splade-form action="{{ route('register') }}" class="space-y-4">

      <div>

        <x-input-label
          for="first_name"
          class="mb-1">
          {{ __('First Name') }}
        </x-input-label>

        <x-input.text
          id="first_name"
          placeholder="Enter your first name"
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
          v-model="form.last_name"
          autofocus />

        <InputError
          :error="form.errors.last_name"
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
          placeholder="Enter your email address"
          v-model="form.email"
          type="email"
          autofocus />

        <InputError
          :error="form.errors.email"
          class="mt-1" />

      </div>

      <div>

        <x-input-label
          for="password"
          class="mb-1">
          {{ __('Password') }}
        </x-input-label>

        <x-input.text
          id="password"
          placeholder="Enter strongest password"
          v-model="form.password"
          type="password"
          autofocus />

        <InputError
          :error="form.errors.password"
          class="mt-1" />

      </div>

      <div>

        <x-input-label
          for="password_confirmation"
          class="mb-1">
          {{ __('Password') }}
        </x-input-label>

        <x-input.text
          id="password_confirmation"
          placeholder="Re-enter your password"
          v-model="form.password_confirmation"
          type="password" />

        <InputError
          :error="form.errors.password_confirmation"
          class="mt-1" />

      </div>

      {{-- <x-splade-input id="name" type="text" name="name" :label="__('Name')" /> --}}

      {{-- <x-splade-input id="email" type="email" name="email" :label="__('Email')" /> --}}

      {{-- <x-splade-input id="password" type="password" name="password" :label="__('Password')" autocomplete="new-password" /> --}}

      {{-- <x-splade-input
        id="password_confirmation"
        name="password_confirmation"
        :label="__('Confirm Password')"
        type="password" /> --}}

      <div class="flex items-center justify-end">

        <Link
          class="text-sm text-gray-600 underline hover:text-gray-900"
          href="{{ route('login') }}">

          {{ __('Already registered?') }}

        </Link>

        <x-splade-submit
          class="ml-4 bg-lime-600 text-slate-900 border-slate-500"
          :label="__('Register')" />

      </div>

    </x-splade-form>

  </x-auth-card>

</x-guest-layout>
