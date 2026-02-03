<x-layout.portfolio>
    <x-slot name="title">Projects & Portfolio - John Developer</x-slot>

    <!-- Hero Section -->
    <section class="pt-32 pb-20 bg-gradient-to-br from-gray-950 via-gray-900 to-gray-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center space-y-4 mb-12">
                <h1 class="section-title text-5xl">
                    <span class="text-emerald-400">//</span> Projects & Portfolio
                </h1>
                <p class="section-subtitle max-w-2xl mx-auto">
                    <span class="text-emerald-400">&gt;</span> A showcase of my work, from enterprise applications 
                    to innovative side projects
                </p>
            </div>
        </div>
    </section>

    <!-- Filter Tabs -->
    <section class="py-8 bg-gray-900/30 border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap gap-3 justify-center">
                <button class="px-6 py-2 bg-emerald-500 text-gray-900 font-mono text-sm rounded-lg transition-all hover:bg-emerald-600">
                    All Projects
                </button>
                <button class="px-6 py-2 bg-gray-800 text-gray-300 font-mono text-sm rounded-lg transition-all hover:bg-gray-700 hover:text-emerald-400">
                    E-Commerce
                </button>
                <button class="px-6 py-2 bg-gray-800 text-gray-300 font-mono text-sm rounded-lg transition-all hover:bg-gray-700 hover:text-emerald-400">
                    Real-Time
                </button>
                <button class="px-6 py-2 bg-gray-800 text-gray-300 font-mono text-sm rounded-lg transition-all hover:bg-gray-700 hover:text-emerald-400">
                    API/Dashboard
                </button>
                <button class="px-6 py-2 bg-gray-800 text-gray-300 font-mono text-sm rounded-lg transition-all hover:bg-gray-700 hover:text-emerald-400">
                    SaaS
                </button>
            </div>
        </div>
    </section>

    <!-- Projects Grid -->
    <section class="py-20 bg-gray-900/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Project 1: E-Commerce Platform -->
                <div class="card group hover:scale-105 transition-transform duration-300">
                    <div class="aspect-video bg-gradient-to-br from-emerald-500/20 to-cyan-500/20 rounded-lg mb-4 flex items-center justify-center overflow-hidden relative">
                        <div class="absolute inset-0 bg-grid-pattern-small opacity-20"></div>
                        <svg class="w-20 h-20 text-emerald-400 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    
                    <h3 class="text-xl font-mono font-bold text-white mb-2">
                        E-Commerce Platform
                    </h3>
                    
                    <p class="text-gray-400 text-sm font-mono mb-4 leading-relaxed">
                        A full-featured online shopping platform with cart management, payment integration, 
                        order tracking, and admin dashboard. Built with Laravel and Vue.js.
                    </p>
                    
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-gray-800 text-emerald-400 text-xs font-mono rounded">Laravel</span>
                        <span class="px-3 py-1 bg-gray-800 text-emerald-400 text-xs font-mono rounded">Vue.js</span>
                        <span class="px-3 py-1 bg-gray-800 text-emerald-400 text-xs font-mono rounded">Stripe</span>
                        <span class="px-3 py-1 bg-gray-800 text-emerald-400 text-xs font-mono rounded">MySQL</span>
                    </div>
                    
                    <div class="pt-4 border-t border-gray-800 flex gap-3">
                        <a href="https://github.com/johndeveloper/ecommerce" target="_blank" class="flex items-center text-gray-400 hover:text-emerald-400 transition-colors text-sm font-mono">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                            </svg>
                            GitHub
                        </a>
                        <a href="https://ecommerce-demo.example.com" target="_blank" class="flex items-center text-gray-400 hover:text-emerald-400 transition-colors text-sm font-mono">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                            Live Demo
                        </a>
                    </div>
                </div>

                <!-- Project 2: Real-Time Chat System -->
                <div class="card group hover:scale-105 transition-transform duration-300">
                    <div class="aspect-video bg-gradient-to-br from-purple-500/20 to-pink-500/20 rounded-lg mb-4 flex items-center justify-center overflow-hidden relative">
                        <div class="absolute inset-0 bg-grid-pattern-small opacity-20"></div>
                        <svg class="w-20 h-20 text-purple-400 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                    </div>
                    
                    <h3 class="text-xl font-mono font-bold text-white mb-2">
                        Real-Time Chat System
                    </h3>
                    
                    <p class="text-gray-400 text-sm font-mono mb-4 leading-relaxed">
                        Modern chat application with instant messaging, typing indicators, online presence, 
                        file sharing, and group conversations. Powered by WebSockets.
                    </p>
                    
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-gray-800 text-purple-400 text-xs font-mono rounded">Laravel</span>
                        <span class="px-3 py-1 bg-gray-800 text-purple-400 text-xs font-mono rounded">Livewire</span>
                        <span class="px-3 py-1 bg-gray-800 text-purple-400 text-xs font-mono rounded">WebSockets</span>
                        <span class="px-3 py-1 bg-gray-800 text-purple-400 text-xs font-mono rounded">Redis</span>
                    </div>
                    
                    <div class="pt-4 border-t border-gray-800 flex gap-3">
                        <a href="https://github.com/johndeveloper/realtime-chat" target="_blank" class="flex items-center text-gray-400 hover:text-purple-400 transition-colors text-sm font-mono">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                            </svg>
                            GitHub
                        </a>
                        <a href="https://chat-demo.example.com" target="_blank" class="flex items-center text-gray-400 hover:text-purple-400 transition-colors text-sm font-mono">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                            Live Demo
                        </a>
                    </div>
                </div>

                <!-- Project 3: API Integration Dashboard -->
                <div class="card group hover:scale-105 transition-transform duration-300">
                    <div class="aspect-video bg-gradient-to-br from-blue-500/20 to-cyan-500/20 rounded-lg mb-4 flex items-center justify-center overflow-hidden relative">
                        <div class="absolute inset-0 bg-grid-pattern-small opacity-20"></div>
                        <svg class="w-20 h-20 text-blue-400 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </div>
                    
                    <h3 class="text-xl font-mono font-bold text-white mb-2">
                        API Integration Dashboard
                    </h3>
                    
                    <p class="text-gray-400 text-sm font-mono mb-4 leading-relaxed">
                        Analytics dashboard integrating multiple third-party APIs with real-time data 
                        visualization, custom reports, and automated insights generation.
                    </p>
                    
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-gray-800 text-blue-400 text-xs font-mono rounded">Laravel</span>
                        <span class="px-3 py-1 bg-gray-800 text-blue-400 text-xs font-mono rounded">REST API</span>
                        <span class="px-3 py-1 bg-gray-800 text-blue-400 text-xs font-mono rounded">Chart.js</span>
                        <span class="px-3 py-1 bg-gray-800 text-blue-400 text-xs font-mono rounded">MySQL</span>
                    </div>
                    
                    <div class="pt-4 border-t border-gray-800 flex gap-3">
                        <a href="https://github.com/johndeveloper/api-dashboard" target="_blank" class="flex items-center text-gray-400 hover:text-blue-400 transition-colors text-sm font-mono">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                            </svg>
                            GitHub
                        </a>
                        <a href="https://dashboard-demo.example.com" target="_blank" class="flex items-center text-gray-400 hover:text-blue-400 transition-colors text-sm font-mono">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                            Live Demo
                        </a>
                    </div>
                </div>

                <!-- Project 4: Task Management System -->
                <div class="card group hover:scale-105 transition-transform duration-300">
                    <div class="aspect-video bg-gradient-to-br from-orange-500/20 to-red-500/20 rounded-lg mb-4 flex items-center justify-center overflow-hidden relative">
                        <div class="absolute inset-0 bg-grid-pattern-small opacity-20"></div>
                        <svg class="w-20 h-20 text-orange-400 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                        </svg>
                    </div>
                    
                    <h3 class="text-xl font-mono font-bold text-white mb-2">
                        Task Management System
                    </h3>
                    
                    <p class="text-gray-400 text-sm font-mono mb-4 leading-relaxed">
                        Collaborative project management tool with kanban boards, sprint planning, 
                        time tracking, team collaboration, and performance analytics.
                    </p>
                    
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-gray-800 text-orange-400 text-xs font-mono rounded">Laravel</span>
                        <span class="px-3 py-1 bg-gray-800 text-orange-400 text-xs font-mono rounded">Livewire</span>
                        <span class="px-3 py-1 bg-gray-800 text-orange-400 text-xs font-mono rounded">Alpine.js</span>
                        <span class="px-3 py-1 bg-gray-800 text-orange-400 text-xs font-mono rounded">PostgreSQL</span>
                    </div>
                    
                    <div class="pt-4 border-t border-gray-800 flex gap-3">
                        <a href="https://github.com/johndeveloper/task-manager" target="_blank" class="flex items-center text-gray-400 hover:text-orange-400 transition-colors text-sm font-mono">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                            </svg>
                            GitHub
                        </a>
                        <a href="https://tasks-demo.example.com" target="_blank" class="flex items-center text-gray-400 hover:text-orange-400 transition-colors text-sm font-mono">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                            Live Demo
                        </a>
                    </div>
                </div>

                <!-- Project 5: SaaS Subscription Platform -->
                <div class="card group hover:scale-105 transition-transform duration-300">
                    <div class="aspect-video bg-gradient-to-br from-indigo-500/20 to-purple-500/20 rounded-lg mb-4 flex items-center justify-center overflow-hidden relative">
                        <div class="absolute inset-0 bg-grid-pattern-small opacity-20"></div>
                        <svg class="w-20 h-20 text-indigo-400 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                        </svg>
                    </div>
                    
                    <h3 class="text-xl font-mono font-bold text-white mb-2">
                        SaaS Subscription Platform
                    </h3>
                    
                    <p class="text-gray-400 text-sm font-mono mb-4 leading-relaxed">
                        Multi-tenant SaaS application with subscription management, billing automation, 
                        usage tracking, and customer portal. Fully scalable architecture.
                    </p>
                    
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-gray-800 text-indigo-400 text-xs font-mono rounded">Laravel</span>
                        <span class="px-3 py-1 bg-gray-800 text-indigo-400 text-xs font-mono rounded">Cashier</span>
                        <span class="px-3 py-1 bg-gray-800 text-indigo-400 text-xs font-mono rounded">Stripe</span>
                        <span class="px-3 py-1 bg-gray-800 text-indigo-400 text-xs font-mono rounded">Redis</span>
                    </div>
                    
                    <div class="pt-4 border-t border-gray-800 flex gap-3">
                        <a href="https://github.com/johndeveloper/saas-platform" target="_blank" class="flex items-center text-gray-400 hover:text-indigo-400 transition-colors text-sm font-mono">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                            </svg>
                            GitHub
                        </a>
                        <a href="https://saas-demo.example.com" target="_blank" class="flex items-center text-gray-400 hover:text-indigo-400 transition-colors text-sm font-mono">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                            Live Demo
                        </a>
                    </div>
                </div>

                <!-- Project 6: Content Management System -->
                <div class="card group hover:scale-105 transition-transform duration-300">
                    <div class="aspect-video bg-gradient-to-br from-yellow-500/20 to-orange-500/20 rounded-lg mb-4 flex items-center justify-center overflow-hidden relative">
                        <div class="absolute inset-0 bg-grid-pattern-small opacity-20"></div>
                        <svg class="w-20 h-20 text-yellow-400 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </div>
                    
                    <h3 class="text-xl font-mono font-bold text-white mb-2">
                        Content Management System
                    </h3>
                    
                    <p class="text-gray-400 text-sm font-mono mb-4 leading-relaxed">
                        Headless CMS with flexible content modeling, media management, multi-language 
                        support, API-first architecture, and role-based access control.
                    </p>
                    
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-gray-800 text-yellow-400 text-xs font-mono rounded">Laravel</span>
                        <span class="px-3 py-1 bg-gray-800 text-yellow-400 text-xs font-mono rounded">GraphQL</span>
                        <span class="px-3 py-1 bg-gray-800 text-yellow-400 text-xs font-mono rounded">Vue.js</span>
                        <span class="px-3 py-1 bg-gray-800 text-yellow-400 text-xs font-mono rounded">S3</span>
                    </div>
                    
                    <div class="pt-4 border-t border-gray-800 flex gap-3">
                        <a href="https://github.com/johndeveloper/headless-cms" target="_blank" class="flex items-center text-gray-400 hover:text-yellow-400 transition-colors text-sm font-mono">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                            </svg>
                            GitHub
                        </a>
                        <a href="https://cms-demo.example.com" target="_blank" class="flex items-center text-gray-400 hover:text-yellow-400 transition-colors text-sm font-mono">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                            Live Demo
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gray-900/50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="terminal-window">
                <div class="terminal-header">
                    <div class="terminal-dot bg-red-500"></div>
                    <div class="terminal-dot bg-yellow-500"></div>
                    <div class="terminal-dot bg-green-500"></div>
                    <span class="text-gray-400 text-xs ml-4 font-mono">~/portfolio/collaborate.sh</span>
                </div>
                <div class="terminal-body">
                    <p class="text-emerald-400 font-mono text-sm mb-2">$ ./start-collaboration.sh</p>
                    <p class="text-gray-400 font-mono text-sm mb-4">
                        <span class="text-emerald-400">&gt;</span> Ready to bring your ideas to life?<br />
                        <span class="text-emerald-400">&gt;</span> Let's collaborate on your next project.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-3 justify-center mt-6">
                        <a href="{{ route('contact') }}" class="btn-primary">
                            Start a Project
                        </a>
                        <a href="{{ route('skills') }}" class="btn-secondary">
                            View My Skills
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .bg-grid-pattern-small {
            background-image: 
                linear-gradient(to right, rgba(255, 255, 255, 0.1) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(255, 255, 255, 0.1) 1px, transparent 1px);
            background-size: 20px 20px;
        }
    </style>
</x-layout.portfolio>
