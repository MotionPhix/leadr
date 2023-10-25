@props([
'leadingAddOn' => false,
])

<div class="flex rounded-md shadow-sm">
  @if ($leadingAddOn)

    <span class="inline-flex items-center px-3 text-gray-500 border border-r-0 border-gray-300 rounded-l-md bg-gray-50 sm:text-sm">
      {{ $leadingAddOn }}
    </span>

  @endif

  {{-- <input
    {{ $attributes->merge(['class' => 'flex-1 border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5' . ($leadingAddOn ? ' rounded-none rounded-r-md' : ' rounded-md')]) }} />
   --}}

  <input
    {{ $attributes->merge(['class' => 'py-3 px-4 block w-full border-skin-mute transition duration-200 rounded-md text-sm focus:border-lime-500 focus:ring-lime-500 dark:bg-slate-900 dark:border-gray-700 dark:text-skin-inverted' . ($leadingAddOn ? ' rounded-none rounded-r-md' : ' rounded-md')]) }} />
</div>
