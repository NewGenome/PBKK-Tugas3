<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Profil Akademik ITS' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

@php
    $currentMode = request()->query('mode', 'light');
    $isDarkMode = $currentMode === 'dark';
    
    $toggleMode = $isDarkMode ? 'light' : 'dark';
    
    $bodyClass = $isDarkMode ? 'bg-gray-900 text-gray-100' : 'bg-gray-50 text-gray-800';
    $footerClass = $isDarkMode ? 'bg-gray-900 border-gray-800 text-gray-400' : 'bg-white border-gray-200 text-gray-500';
@endphp

<body class="{{ $bodyClass }} font-sans antialiased flex flex-col min-h-screen transition-colors duration-300">

    <nav class="bg-its-green text-white shadow-md">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0 font-bold text-xl tracking-wide">
                    Academy Profile
                </div>
                
                <div class="hidden md:flex items-center space-x-6 text-sm font-medium">
                    <a href="{{ route('home', ['mode' => $currentMode]) }}" class="flex items-center gap-2 hover:text-gray-200 transition">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                        Home
                    </a>
                    <a href="{{ route('profil', ['mode' => $currentMode]) }}" class="flex items-center gap-2 hover:text-gray-200 transition">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                        Profil Mahasiswa
                    </a>
                    <a href="{{ route('ide-agent', ['mode' => $currentMode]) }}" class="flex items-center gap-2 hover:text-gray-200 transition">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2a2 2 0 0 1 2 2c0 .74-.4 1.39-1 1.73V7h1a7 7 0 0 1 7 7h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v1a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-1H2a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h1a7 7 0 0 1 7-7h1V5.73c-.6-.34-1-.99-1-1.73a2 2 0 0 1 2-2M7.5 13a2.5 2.5 0 0 0 0 5 2.5 2.5 0 0 0 0-5m9 0a2.5 2.5 0 0 0 0 5 2.5 2.5 0 0 0 0-5Z"/></svg>
                        Agentic AI
                    </a>
                    
                    <a href="{{ request()->url() }}?mode={{ $toggleMode }}" class="flex items-center gap-2 bg-its-dark px-3 py-1.5 rounded-md hover:bg-opacity-80 transition border border-green-600">
                        @if($isDarkMode)
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                            Light Mode
                        @else
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                            Dark Mode
                        @endif
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-grow max-w-6xl mx-auto px-4 py-8 w-full">
        @yield('content')
    </main>

    <footer class="{{ $footerClass }} border-t py-6 mt-12 transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4 text-center text-sm">
            &copy; {{ date('Y') }} Institut Teknologi Sepuluh Nopember (ITS). Tugas 4 Multi-View.
        </div>
    </footer>

</body>
</html>