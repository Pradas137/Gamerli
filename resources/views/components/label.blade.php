@props(['value'])

<label {{ $attributes->merge(['class' => 'text-center block font-medium text-sm text-white']) }}>
    {{ $value ?? $slot }}
</label>
