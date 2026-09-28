@props(['title', 'value'])

@php
    $isDark = request()->query('mode') === 'dark';
    $cardClass = $isDark ? 'bg-gray-800 border-gray-700 text-gray-100' : 'bg-white border-gray-100 text-gray-800';
@endphp

<div class="{{ $cardClass }} p-6 rounded-lg shadow-sm border transition-colors duration-300">
    <p class="text-sm {{ $isDark ? 'text-gray-400' : 'text-gray-500' }} mb-1">{{ $title }}</p>
    <p class="text-lg font-semibold">{{ $value }}</p>
</div>