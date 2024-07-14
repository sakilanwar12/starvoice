<button type={{ $type }}
    {{ $attributes->merge(['class' => 'bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded']) }}>
    {{ $slot }}
</button>
