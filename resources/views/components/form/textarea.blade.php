<textarea name="{{ $name }}" placeholder="{{ $placeholder }}"
    {{ $attributes->merge(['class' => 'w-full border-gray-300 rounded-md shadow-sm']) }}>
    {{ $slot }}
</textarea>
