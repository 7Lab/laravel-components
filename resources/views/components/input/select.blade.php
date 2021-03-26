@props([
    'placeholder' => null,
])

<div>
  <select {{ $attributes->merge(['class' => 'lab-form-control']) }}>
    @if ($placeholder)
        <option value="" hidden>{{ $placeholder }}</option>
    @endif
    {{ $slot }}
  </select>
</div>