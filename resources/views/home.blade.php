<x-layout>

    <x-slot name="title">
        Welcome to Chirper!
    </x-slot>

            <div class="max-w-2xl mx-auto">
            <h1 class="text-3xl font-bold text-center mt-8">Latest Chirps</h1>
            
            <div class="space-y-4 mt-8">

                @forelse ($chirps as $chirp)
                    <x-chirp :chirp="$chirp" />
                @empty
                    <div class="hero py-12">
                        <div class="hero-content text-center">
                            <div>

                                <svg
                                    class="mx-auto h-12 w-12 opacity-30"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M8 12h.01M12 12h.01M16 12h.01M9 16h6"
                                    />
                                </svg>

                                <p class="mt-4 text-base-content/60">
                                    No chirps yet. Be the first to chirp!
                                </p>

                            </div>
                        </div>
                    </div>
                @endforelse

            </div>
        </div>
</x-layout>