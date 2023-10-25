<x-splade-link
  {{ $attributes->except('class') }}
  class="group inline-flex items-center rounded-md bg-lime-700 px-4 py-1.5 font-semibold text-white transition hover:bg-lime-500">

  {{ $slot }}

  <svg
    class="mt-0.5 ml-2 -mr-1 stroke-white stroke-2"
    viewBox="0 0 10 10"
    aria-hidden="true"
    fill="none"
    height="10"
    width="10">

    <path class="transition opacity-0 group-hover:opacity-100" d="M0 5h7"></path>

    <path class="transition group-hover:translate-x-[3px]" d="M1 1l4 4-4 4"></path>

  </svg>

</x-splade-link>
