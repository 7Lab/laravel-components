@props([
'options' => [],
])

@php
$options = array_merge(
    [
        //'altInput' => true,
        //'altFormat' => 'F j, Y',
        'dateFormat' => 'Y-m-d',
        'allowInput' => true,
    ],
    $options,
);
@endphp
{{-- https://flatpickr.js.org/ --}}
<div wire:ignore class='input-group'>
    <input x-data="{value: @entangle($attributes->wire('model')), instance: undefined}" x-init="() => {
                $watch('value', value => instance.setDate(value, true));
                instance = flatpickr($refs.input, {{ json_encode((object) $options) }});
            }" x-ref="input" x-bind:value="value" type="text"
        {{ $attributes->merge(['class' => 'lab-form-control']) }} />
    {{-- <span class="input-group-addon"><span class="ti-calendar"></span></span> --}}
</div>
