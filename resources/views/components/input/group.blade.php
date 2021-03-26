@props([
'label' => '',
'for',
'error' => false,
'helpText' => false,
])

<div {{ $attributes->merge(['class' => 'lab-form-group' . ($error ? ' has-error' : '')]) }}>
    @if ($label)
        <label for="{{ $for }}">{{ $label }}</label>
    @endif
    {{ $slot }}

    @if ($error)
        <div class="lab-text-danger">{{ $error }}</div>
    @endif

    @if ($helpText)
        <p class="lab-text-muted">{{ $helpText }}</p>
    @endif
</div>
