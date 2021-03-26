@props([
'label'
])

<div class="lab-radio">
    <input type="radio" {{ $attributes->merge(['class' => '']) }}>
    <label for={{$attributes['id']}}>
        {{$label}}
    </label>
</div>
