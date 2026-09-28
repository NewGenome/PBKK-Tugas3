<nav class="sticky top-0 z-50 bg-gray-800/50 backdrop-blur-sm after:pointer-events-none after:absolute after:inset-x-0 after:bottom-0 after:h-px after:bg-white/10">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <button 
          type="button" 
          id="mobile-menu-button"
          class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:-outline-offset-1 focus:outline-indigo-500"
          aria-controls="mobile-menu"
          aria-expanded="false"
        >
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Open main menu</span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6" id="hamburger-icon">
            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 hidden" id="close-icon">
            <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
      </div>
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex shrink-0 items-center">
          <img src="https://images.seeklogo.com/logo-png/44/2/laravel-vapor-logo-png_seeklogo-445533.png" alt="Your Company" class="h-8 w-auto" />
        </div>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <a href="{{ route('home') }}" 
               {{ $activePage === 'home' ? 'aria-current="page"' : '' }}
               class="rounded-md px-3 py-2 text-sm font-medium {{ $activePage === 'home' ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
               Home
            </a>
            
            <a href="{{ route('about') }}" 
               {{ $activePage === 'about' ? 'aria-current="page"' : '' }}
               class="rounded-md px-3 py-2 text-sm font-medium {{ $activePage === 'about' ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
               About
            </a>
            
            <a href="{{ route('project-idea') }}" 
               {{ $activePage === 'project-idea' ? 'aria-current="page"' : '' }}
               class="rounded-md px-3 py-2 text-sm font-medium {{ $activePage === 'project-idea' ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
               Project Idea
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div id="mobile-menu" class="hidden sm:hidden">
    <div class="space-y-1 px-2 pt-2 pb-3">
      <a href="{{ route('home') }}" 
         {{ $activePage === 'home' ? 'aria-current="page"' : '' }}
         class="block rounded-md px-3 py-2 text-base font-medium {{ $activePage === 'home' ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
         Home
      </a>
      <a href="{{ route('about') }}" 
         {{ $activePage === 'about' ? 'aria-current="page"' : '' }}
         class="block rounded-md px-3 py-2 text-base font-medium {{ $activePage === 'about' ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
         About
      </a>
      <a href="{{ route('project-idea') }}" 
         {{ $activePage === 'project-idea' ? 'aria-current="page"' : '' }}
         class="block rounded-md px-3 py-2 text-base font-medium {{ $activePage === 'project-idea' ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
         Project Idea
      </a>
    </div>
  </div>
</nav>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const hamburgerIcon = document.getElementById('hamburger-icon');
    const closeIcon = document.getElementById('close-icon');

    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function() {
            const isOpen = mobileMenu.classList.toggle('hidden');
            const expanded = !isOpen;
            
            mobileMenuButton.setAttribute('aria-expanded', expanded);
            hamburgerIcon.classList.toggle('hidden', expanded);
            closeIcon.classList.toggle('hidden', !expanded);
        });
    }
});
</script>
