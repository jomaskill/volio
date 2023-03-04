@props(['link'])

<a
    href="{{ route($link) }}" class="{{ (Route::currentRouteName() === $link) ? 'bg-gray-100' : '' }}
    text-gray-900 group flex items-center rounded-md px-2 py-2 text-sm font-medium gap-2">
    {{ $slot }}
</a>
