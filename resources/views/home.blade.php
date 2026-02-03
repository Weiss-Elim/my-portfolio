<x-layout.portfolio>
    <x-slot name="title">John Developer - Full Stack Developer Portfolio</x-slot>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Animated background grid -->
        <div class="absolute inset-0 bg-gradient-to-br from-gray-950 via-gray-900 to-gray-950">
            <div class="absolute inset-0 bg-grid-pattern opacity-10"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center space-y-8">
                <!-- Terminal Window Style Intro -->
                <div class="terminal-window max-w-4xl mx-auto">
                    <div class="terminal-header">
                        <div class="terminal-dot bg-red-500"></div>
                        <div class="terminal-dot bg-yellow-500"></div>
                        <div class="terminal-dot bg-green-500"></div>
                        <span class="text-gray-400 text-xs ml-4 font-mono">~/portfolio/about.js</span>
                    </div>
                    <div class="terminal-body space-y-3 text-left">
                        <div class="text-gray-500 font-mono text-sm">
                            <span class="text-purple-400">const</span> 
                            <span class="text-blue-400"> developer</span> 
                            <span class="text-white"> = {</span>
                        </div>
                        <div class="ml-6 space-y-2 text-sm">
                            <div>
                                <span class="text-emerald-400">name:</span> 
                                <span class="text-orange-400">"John Developer"</span><span class="text-white">,</span>
                            </div>
                            <div>
                                <span class="text-emerald-400">title:</span> 
                                <span class="text-orange-400">"Full Stack Developer"</span><span class="text-white">,</span>
                            </div>
                            <div>
                                <span class="text-emerald-400">location:</span> 
                                <span class="text-orange-400">"Remote"</span><span class="text-white">,</span>
                            </div>
                            <div>
                                <span class="text-emerald-400">passion:</span> 
                                <span class="text-orange-400">"Building scalable web applications"</span><span class="text-white">,</span>
                            </div>
                            <div>
                                <span class="text-emerald-400">status:</span> 
                                <span class="text-orange-400">"Available for opportunities"</span>
                            </div>
                        </div>
                        <div class="text-white font-mono text-sm">};</div>
                        <div class="text-gray-500 font-mono text-sm mt-4">
                            <span class="text-blue-400">console</span><span class="text-white">.</span><span class="text-yellow-400">log</span><span class="text-white">(developer);</span>
                        </div>
                    </div>
                </div>

                <!-- Main Heading -->
                <div class="space-y-4">
                    <h1 class="text-5xl md:text-7xl font-bold font-mono">
                        <span class="text-white">Hi, I'm </span>
                        <span class="text-gradient glow-emerald">John Developer</span>
                    </h1>
                    <p class="text-xl md:text-2xl text-gray-400 font-mono max-w-2xl mx-auto">
                        <span class="text-emerald-400">&gt;</span> Full Stack Developer specializing in 
                        <span class="text-emerald-400">Laravel</span>, 
                        <span class="text-emerald-400">Livewire</span>, and 
                        <span class="text-emerald-400">Modern Web Technologies</span>
                    </p>
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center pt-8">
                    <a href="{{ route('projects') }}" class="btn-primary inline-flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                        View My Projects
                    </a>
                    <a href="{{ route('contact') }}" class="btn-secondary inline-flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        Get In Touch
                    </a>
                </div>

                <!-- Tech Stack Badges -->
                <div class="pt-12">
                    <p class="text-gray-500 font-mono text-sm mb-6">
                        <span class="text-emerald-400">//</span> Tech Stack
                    </p>
                    <div class="flex flex-wrap justify-center gap-3">
                        <span class="px-4 py-2 bg-gray-900 border border-gray-800 rounded-lg text-emerald-400 font-mono text-sm hover:border-emerald-500 transition-colors">PHP</span>
                        <span class="px-4 py-2 bg-gray-900 border border-gray-800 rounded-lg text-emerald-400 font-mono text-sm hover:border-emerald-500 transition-colors">Laravel</span>
                        <span class="px-4 py-2 bg-gray-900 border border-gray-800 rounded-lg text-emerald-400 font-mono text-sm hover:border-emerald-500 transition-colors">Livewire</span>
                        <span class="px-4 py-2 bg-gray-900 border border-gray-800 rounded-lg text-emerald-400 font-mono text-sm hover:border-emerald-500 transition-colors">Vue.js</span>
                        <span class="px-4 py-2 bg-gray-900 border border-gray-800 rounded-lg text-emerald-400 font-mono text-sm hover:border-emerald-500 transition-colors">Tailwind CSS</span>
                        <span class="px-4 py-2 bg-gray-900 border border-gray-800 rounded-lg text-emerald-400 font-mono text-sm hover:border-emerald-500 transition-colors">MySQL</span>
                        <span class="px-4 py-2 bg-gray-900 border border-gray-800 rounded-lg text-emerald-400 font-mono text-sm hover:border-emerald-500 transition-colors">Git</span>
                        <span class="px-4 py-2 bg-gray-900 border border-gray-800 rounded-lg text-emerald-400 font-mono text-sm hover:border-emerald-500 transition-colors">Docker</span>
                    </div>
                </div>

                <!-- Scroll Indicator -->
                <div class="pt-16 animate-bounce">
                    <svg class="w-6 h-6 mx-auto text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-20 bg-gray-900/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <h2 class="section-title">
                        <span class="text-emerald-400">//</span> About Me
                    </h2>
                    <div class="space-y-4 text-gray-300 font-mono text-sm leading-relaxed">
                        <p>
                            I'm a passionate full-stack developer with expertise in building modern, 
                            scalable web applications. With a strong foundation in backend technologies 
                            and a keen eye for frontend design, I create solutions that are both 
                            powerful and user-friendly.
                        </p>
                        <p>
                            My journey in web development started with a curiosity about how things work 
                            under the hood. This led me to dive deep into frameworks like Laravel, master 
                            real-time features with Livewire, and craft beautiful interfaces with modern CSS.
                        </p>
                        <p>
                            When I'm not coding, you'll find me exploring new technologies, contributing 
                            to open-source projects, or sharing knowledge with the developer community.
                        </p>
                    </div>
                </div>

                <div class="space-y-4">
                    <div class="card">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-emerald-500/10 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-white font-mono font-semibold mb-2">Problem Solver</h3>
                                <p class="text-gray-400 text-sm font-mono">
                                    I approach challenges with analytical thinking and creative solutions.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-emerald-500/10 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-white font-mono font-semibold mb-2">Fast Learner</h3>
                                <p class="text-gray-400 text-sm font-mono">
                                    Constantly evolving with the latest technologies and best practices.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-emerald-500/10 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-white font-mono font-semibold mb-2">Team Player</h3>
                                <p class="text-gray-400 text-sm font-mono">
                                    Collaborative mindset with excellent communication skills.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .bg-grid-pattern {
            background-image: 
                linear-gradient(to right, rgba(16, 185, 129, 0.1) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(16, 185, 129, 0.1) 1px, transparent 1px);
            background-size: 50px 50px;
        }
    </style>
</x-layout.portfolio>
