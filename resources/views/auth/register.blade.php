<x-guest-layout>
  <x-auth-card>
    <x-splade-form action="{{ route('register') }}" class="space-y-4">

      <x-input-label
        for="first_name">
        {{ __('First Name') }}
      </x-input-label>

      <x-input.text
        id="first_name"
        placeholder="Enter your full name"
        v-model="form.first_name"
        autofocus />

      <x-input-error
        :messages="$errors->get('form.first_name')" />

      {{-- <span
        v-text="form.errors.first_name"
        class="mt-1 text-sm text-red-600" /> --}}

      {{-- <x-splade-input id="name" type="text" name="name" :label="__('Name')" /> --}}
      <x-splade-input id="email" type="email" name="email" :label="__('Email')" />
      <x-splade-input id="password" type="password" name="password" :label="__('Password')" autocomplete="new-password" />
      <x-splade-input id="password_confirmation" type="password" name="password_confirmation" :label="__('Confirm Password')" />

      <div class="flex items-center justify-end">
        <Link class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('login') }}">
        {{ __('Already registered?') }}
        </Link>

        <x-splade-submit
          class="ml-4 bg-skin-fill text-skin-inverted"
          :label="__('Register')" />
      </div>
    </x-splade-form>
  </x-auth-card>
</x-guest-layout>
