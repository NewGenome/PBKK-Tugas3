@extends('layouts.app')

@section('content')
    @php
        $isDark = request()->query('mode') === 'dark';
        $cardClass = $isDark ? 'bg-gray-800 border-gray-700 text-gray-100' : 'bg-white border-gray-100 text-gray-800';
    @endphp

    <div class="{{ $cardClass }} rounded-xl shadow-sm border p-8 transition-colors duration-300">
        <h2 class="text-2xl font-bold mb-4">Form Pengumpulan Ide (Agentic AI)</h2>
        
        @if(session('success'))
            <x-status-banner type="success" :message="session('success')" />
        @else
            <x-status-banner type="info" message="Silakan isi form di bawah ini untuk mengajukan ide riset Anda." />
        @endif

        <!-- Form action mengirimkan parameter mode agar tidak reset saat submit -->
        <form action="{{ route('ide-agent.store', ['mode' => request()->query('mode')]) }}" method="POST" class="mt-6 space-y-4 max-w-lg">
            @csrf
            
            <div>
                <label class="block text-sm font-medium mb-1">Judul Ide</label>
                <input type="text" name="judul" value="{{ old('judul') }}" class="w-full rounded-md border-gray-300 shadow-sm focus:border-its-green focus:ring focus:ring-its-green focus:ring-opacity-50 p-2 border bg-transparent" placeholder="Contoh: Optimasi LLM untuk ITS">
                @error('judul')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div>
                <label class="block text-sm font-medium mb-1">Deskripsi Singkat</label>
                <textarea name="deskripsi" rows="4" class="w-full rounded-md border-gray-300 shadow-sm focus:border-its-green focus:ring focus:ring-its-green focus:ring-opacity-50 p-2 border bg-transparent" placeholder="Jelaskan ide Anda...">{{ old('deskripsi') }}</textarea>
                @error('deskripsi')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <button type="submit" class="bg-its-green text-white px-6 py-2 rounded-md hover:bg-its-dark transition font-medium">
                Kirim Ide
            </button>
        </form>
    </div>
@endsection