@props([
    'method' => 'POST',
    'action' => '',
    'trigger' => '',
])

<form class="space-y-8 max-w-lg" method="{{ $method }}" action="{{ $action }}">
    @csrf
    <div class="space-y-8 divide-y sm:space-y-5">
        <div class="space-y-6 pt-8 sm:space-y-5 sm:pt-10">
            <div class="space-y-6 sm:space-y-5">
                {{ $slot }}
            </div>
        </div>
    </div>
    <div class="text-end">
        <button
            type="submit"
            class="rounded-md bg-green-600 py-2 px-3 text-sm font-semibold text-white
            shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2
            focus-visible:outline-offset-2 focus-visible:outline-green-600 cursor-pointer"
        >
            Create
        </button>
    </div>

</form>
