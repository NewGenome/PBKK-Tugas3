@props(['type' => 'info', 'message'])

@php
    $colors = [
        'info' => 'bg-blue-50 text-blue-700 border-blue-200',
        'success' => 'bg-green-50 text-green-700 border-green-200',
        'warning' => 'bg-yellow-50 text-yellow-700 border-yellow-200',
    ];
@endphp

<div class="p-4 mb-4 text-sm rounded-lg border {{ $colors[$type] }}" role="alert">
    {{ $message }}
</div>