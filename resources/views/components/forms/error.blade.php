@props([
    'name' => ''
])

@if($errors->has($name))
    @foreach($errors->get($name) as $error)
        <span class="text-sm text-red-600">{{ $error }}</span>
    @endforeach
@endif
