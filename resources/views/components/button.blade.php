@props([
    'mood',
])

<div>
    <button class="btn btn-{{ $mood }}">{{ $slot }}</button>
</div>
