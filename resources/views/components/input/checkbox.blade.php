@props([
'label'
])

<div>
    @if ($label)
        <label for={{$attributes['id']}}>
            <input type="checkbox" {{ $attributes->merge(['class' => '']) }} />
            {{ $label }}
        </label>
    @else
        <input type="checkbox" {{ $attributes->merge(['class' => '']) }} />
    @endif
</div>
