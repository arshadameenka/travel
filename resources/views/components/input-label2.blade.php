@props(['value'])

<label {{ $attributes->merge(['for' => 'email']) }}>
    {{ $value ?? $slot }}
</label>

  