<x-guest-layout>

  <x-auth-card>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" />

    <x-splade-form action="{{ route('login') }}" class="space-y-4">

      <!-- Email Address -->
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
          placeholder="Enter your password"
          v-model="form.password"
          autofocus />

        <InputError
          :error="form.errors.password"
          class="mt-1" />

      </div>

      <x-splade-checkbox
        id="remember_me"
        name="remember"
        class="dark:text-gray-200"
        :label="__('Remember me')" />

      <div class="flex items-center justify-between">

        @if (Route::has('password.request'))

          <x-splade-link
            class="text-sm text-gray-600 underline dark:hover:text-gray-400 dark:text-gray-200 hover:text-gray-900"
            href="{{ route('password.request') }}">

            {{ __('Forgot your password?') }}

          </x-splade-link>

        @endif

        <x-splade-submit
          class="ml-3 bg-lime-500 text-slate-800 border-lime-600"
          :label="__('Log in')" />

      </div>

    </x-splade-form>

  </x-auth-card>

</x-guest-layout>
