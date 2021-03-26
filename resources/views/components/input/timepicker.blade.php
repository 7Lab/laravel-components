@props(['options' => []])

@php
$options = array_merge(
    [
        'enableTime' => true,
        'noCalendar' => true,
        'dateFormat' => 'H:i',
        'time_24hr' => true,
        'allowInput' => true,
    ],
    $options,
);
@endphp
{{-- https://flatpickr.js.org/options/ --}}
<div wire:ignore>
    <input x-data="{value: @entangle($attributes->wire('model')), instance: undefined}" x-init="() => {
                $watch('value', value => instance.setDate(value, true));
                instance = flatpickr($refs.input, {{ json_encode((object) $options) }});
            }" x-ref="input" x-bind:value="value" type="text"
        {{ $attributes->merge(['class' => 'lab-form-control']) }} />
</div>
