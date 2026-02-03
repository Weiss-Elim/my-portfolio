<div>
    @if($successMessage)
        <div class="mb-6 p-4 bg-emerald-500/10 border border-emerald-500/50 rounded-lg">
            <div class="flex items-start">
                <svg class="w-5 h-5 text-emerald-400 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <p class="text-emerald-400 font-mono text-sm">{{ $successMessage }}</p>
            </div>
        </div>
    @endif

    <form wire:submit="submit" class="space-y-6">
        <!-- Name Field -->
        <div>
            <label for="name" class="block text-sm font-mono font-semibold text-gray-300 mb-2">
                <span class="text-emerald-400">//</span> Name
            </label>
            <input 
                type="text" 
                id="name" 
                wire:model="name"
                class="w-full bg-gray-900 border border-gray-800 rounded-lg px-4 py-3 text-white font-mono focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition-colors"
                placeholder="John Doe"
            >
            @error('name') 
                <p class="mt-2 text-red-400 text-sm font-mono">
                    <span class="text-red-400">!</span> {{ $message }}
                </p>
            @enderror
        </div>

        <!-- Email Field -->
        <div>
            <label for="email" class="block text-sm font-mono font-semibold text-gray-300 mb-2">
                <span class="text-emerald-400">//</span> Email
            </label>
            <input 
                type="email" 
                id="email" 
                wire:model="email"
                class="w-full bg-gray-900 border border-gray-800 rounded-lg px-4 py-3 text-white font-mono focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition-colors"
                placeholder="john@example.com"
            >
            @error('email') 
                <p class="mt-2 text-red-400 text-sm font-mono">
                    <span class="text-red-400">!</span> {{ $message }}
                </p>
            @enderror
        </div>

        <!-- Subject Field -->
        <div>
            <label for="subject" class="block text-sm font-mono font-semibold text-gray-300 mb-2">
                <span class="text-emerald-400">//</span> Subject <span class="text-gray-500">(optional)</span>
            </label>
            <input 
                type="text" 
                id="subject" 
                wire:model="subject"
                class="w-full bg-gray-900 border border-gray-800 rounded-lg px-4 py-3 text-white font-mono focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition-colors"
                placeholder="Project Inquiry"
            >
            @error('subject') 
                <p class="mt-2 text-red-400 text-sm font-mono">
                    <span class="text-red-400">!</span> {{ $message }}
                </p>
            @enderror
        </div>

        <!-- Message Field -->
        <div>
            <label for="message" class="block text-sm font-mono font-semibold text-gray-300 mb-2">
                <span class="text-emerald-400">//</span> Message
            </label>
            <textarea 
                id="message" 
                wire:model="message"
                rows="6"
                class="w-full bg-gray-900 border border-gray-800 rounded-lg px-4 py-3 text-white font-mono focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition-colors resize-none"
                placeholder="Tell me about your project..."
            ></textarea>
            @error('message') 
                <p class="mt-2 text-red-400 text-sm font-mono">
                    <span class="text-red-400">!</span> {{ $message }}
                </p>
            @enderror
        </div>

        <!-- Submit Button -->
        <div>
            <button 
                type="submit" 
                class="btn-primary w-full sm:w-auto inline-flex items-center justify-center"
                wire:loading.attr="disabled"
            >
                <span wire:loading.remove>
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Send Message
                </span>
                <span wire:loading>
                    <svg class="animate-spin w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Sending...
                </span>
            </button>
        </div>
    </form>
</div>
