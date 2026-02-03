<nav class="bg-gray-900/95 backdrop-blur-sm border-b border-gray-800 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo/Brand -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center space-x-2 group">
                    <span class="text-emerald-400 font-mono text-xl font-bold">&lt;</span>
                    <span class="text-white font-mono font-semibold text-lg group-hover:text-emerald-400 transition-colors">JohnDev</span>
                    <span class="text-emerald-400 font-mono text-xl font-bold">/&gt;</span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-1">
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                    <span class="text-emerald-400 font-mono">//</span> Home
                </a>
                <a href="{{ route('skills') }}" class="nav-link {{ request()->routeIs('skills') ? 'active' : '' }}">
                    <span class="text-emerald-400 font-mono">//</span> Skills
                </a>
                <a href="{{ route('projects') }}" class="nav-link {{ request()->routeIs('projects') ? 'active' : '' }}">
                    <span class="text-emerald-400 font-mono">//</span> Projects
                </a>
                <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">
                    <span class="text-emerald-400 font-mono">//</span> Contact
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button type="button" 
                    class="text-gray-400 hover:text-white focus:outline-none focus:text-white"
                    onclick="document.getElementById('mobile-menu').classList.toggle('hidden')"
                >
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-gray-900 border-t border-gray-800">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="{{ route('home') }}" class="mobile-nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                <span class="text-emerald-400 font-mono">//</span> Home
            </a>
            <a href="{{ route('skills') }}" class="mobile-nav-link {{ request()->routeIs('skills') ? 'active' : '' }}">
                <span class="text-emerald-400 font-mono">//</span> Skills
            </a>
            <a href="{{ route('projects') }}" class="mobile-nav-link {{ request()->routeIs('projects') ? 'active' : '' }}">
                <span class="text-emerald-400 font-mono">//</span> Projects
            </a>
            <a href="{{ route('contact') }}" class="mobile-nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">
                <span class="text-emerald-400 font-mono">//</span> Contact
            </a>
        </div>
    </div>
</nav>
