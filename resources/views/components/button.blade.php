@props(['action' => '#'])
<a
    type="button"
    class="rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white
    shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2
    focus-visible:outline-offset-2 focus-visible:outline-indigo-600 cursor-pointer"
    href="{{ $action }}"
>
    {{ $slot }}
</a>
