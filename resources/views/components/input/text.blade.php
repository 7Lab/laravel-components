@props([
'trailingAddOn' => false,
'leadingAddOn' => false,
])
<div class={{ $trailingAddOn ? 'lab-input-group' : '' }}>
    @if ($leadingAddOn)
        <span class="lab-input-group-addon" style="border: 1px dashed red">{{ $leadingAddOn }}</span>
    @endif
    <input {{ $attributes->merge(['class' => 'form-control ']) }} />
    @if ($trailingAddOn)
        <span class="lab-input-group-addon" style="border: 1px dashed green">{{ $trailingAddOn }}</span>
    @endif
</div>