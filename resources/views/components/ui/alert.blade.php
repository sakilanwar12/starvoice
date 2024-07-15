@props(['type'])

@php
    $alertClasses = [
        'success' => 'bg-green-50 text-green-900',
        'danger' => 'bg-red-50 text-red-500',
        'warning' => 'bg-yellow-50 text-yellow-700',
        'info' => 'bg-blue-50 text-blue-700',
    ];
    $alertClass = $alertClasses[$type] ?? $alertClasses['info'];
@endphp

<div {{ $attributes->merge(['class' => "mt-1 text-sm font-medium rounded inline-block p-1 $alertClass"]) }}
    role="alert">
    {{ $slot }}
</div>
