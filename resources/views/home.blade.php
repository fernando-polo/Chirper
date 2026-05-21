<x-layout>

    <x-slot name="title">
        Welcome to Chirper! CAMILA
    </x-slot>

            <div class="max-w-2xl mx-auto">
            <h1 class="text-3xl font-bold text-center mt-8">Latest Chirps</h1>
            <div class="max-w-2xl mx-auto">
            <h1 class="text-3xl font-bold mt-8">Latest Chirps</h1>
                
                <div class="card bg-base-100 shadow mt-8">
                    <div class="card-body">
                        <form method="POST" action="/chirps">
                            @csrf
                            
                            <div class="form-control w-full">
                                <textarea 
                                    name="message" 
                                    placeholder="What's on your mind?" 
                                    class="textarea textarea-bordered w-full" 
                                    rows="4" 
                                    maxlength="255" 
                                    required></textarea>
                            
                                <label class="label">
                                    <span class="label-text-alt text-gray-500">Max 255 characters</span>
                                </label>
                            </div>
                            
                            <div class="mt-4 flex items-center justify-between">
                                <div class="text-sm text-gray-500">
                                    <span id="charCount">0</span>/255
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm">
                                    Chirp 🐦
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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