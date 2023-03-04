<x-mail::message>
# Hello {{ $name }}

{{ $content }}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
