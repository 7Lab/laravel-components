@props([
'type',
'message',
])

<div>
    <div class="alert alert-{{ $type }}" role="alert">
        {{ $message }}
    </div>
</div>
