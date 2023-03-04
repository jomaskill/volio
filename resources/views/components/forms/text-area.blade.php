@props([
    'name' => '',
    'label' => '',
])

<div>
    @if($label)
        <label for="{{ $name }}" class="block text-sm font-medium leading-6 text-gray-900">{{ $label }}</label>
    @endif
    <div class="mt-2">
        <textarea
            rows="4"
            name="{{ $name }}"
            id="{{ $name }}"
            class="block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset
            ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600
            sm:py-1.5 sm:text-sm sm:leading-6">
        </textarea>
    </div>
</div>
