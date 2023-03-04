@props(['headers' => []])
<div>
    <table class="min-w-full divide-y divide-gray-300">
        <thead>
        <tr>
            @foreach($headers as $header)
                <th scope="col" class="py-3.5 px-3 text-left text-sm font-semibold text-gray-900">{{ $header }}</th>
            @endforeach
        </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            {{ $slot }}
        </tbody>
    </table>
</div>
