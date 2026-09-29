@extends('layouts.app')

@section('content')
    @php
        $isDark = request()->query('mode') === 'dark';
        $cardClass = $isDark ? 'bg-gray-800 border-gray-700 text-gray-100' : 'bg-white border-gray-100 text-gray-800';
        $labelClass = $isDark ? 'text-gray-400' : 'text-gray-500';
        $borderClass = $isDark ? 'border-gray-700' : 'border-gray-100';
    @endphp

    <div class="{{ $cardClass }} rounded-xl shadow-sm border transition-colors duration-300 overflow-hidden">
        
        <div class="p-6 border-b {{ $borderClass }}">
            <h2 class="text-xl font-bold">Detail Profil Mahasiswa</h2>
        </div>

        <div class="p-8 flex flex-col md:flex-row items-center md:items-start gap-12">
            
            <div class="flex-shrink-0">
                <div class="w-32 h-32 bg-blue-600 rounded-full flex items-center justify-center text-white shadow-md">
                    <svg class="w-16 h-16" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3zM5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82z"/>
                    </svg>
                </div>
            </div>

          <div class="flex-grow w-full">
                <div class="grid grid-cols-1 md:grid-cols-[150px_1fr] gap-y-4 gap-x-6 text-sm md:text-base">
                    
                    <div class="{{ $labelClass }}">NRP:</div>
                    <div class="font-medium flex items-center gap-3">
                        <span class="text-blue-600 font-bold">{{ $nrp }}</span>
                    </div>

                    <div class="{{ $labelClass }}">Nama Mahasiswa:</div>
                    <div class="font-medium">{{ $nama }}</div>

                    <div class="{{ $labelClass }}">Tanggal Lahir:</div>
                    <div class="font-medium">{{ $tanggalLahir }}</div>

                    <div class="{{ $labelClass }}">Tempat Lahir:</div>
                    <div class="font-medium">{{ $tempatLahir }}</div>

                    <div class="{{ $labelClass }}">Departemen:</div>
                    <div class="font-medium">{{ $departemen }}</div>

                    <div class="{{ $labelClass }}">Fakultas:</div>
                    <div class="font-medium">{{ $fakultas }}</div>

                    <div class="{{ $labelClass }}">Email Kampus:</div>
                    <div class="font-medium text-pink-600">{{ $email }}</div>

                </div>
            </div>
        </div>
    </div>
@endsection