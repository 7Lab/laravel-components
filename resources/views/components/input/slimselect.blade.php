{{--http://slimselectjs.com/--}}
<div wire:ignore>
    <select x-data="{value: @entangle($attributes->wire('model')), instance: undefined}" x-init="() => {
      {{-- $watch('value', value => instance.set(value)); --}}
                instance = new SlimSelect({ select: $refs.select});
                instance.onChange = (info) => { @this.set('{{ $attributes['wire:model'] }}', info.flatMap(a => a.value))};                
            }" x-ref="select" x-bind:value="value" {{ $attributes->merge(['class' => 'lab-form-control']) }}>
        {{ $slot }}
    </select>
</div>
