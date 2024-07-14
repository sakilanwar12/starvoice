<label @if ($for) for="{{ $for }}" @endif
    {{ $attributes->merge(['class' => 'w-full block mb-1.5  font-medium text-sm text-gray-700']) }}>
    {{ $slot }}
</label>
