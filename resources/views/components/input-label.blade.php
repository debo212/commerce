@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-lg font-semibold text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>
