<x-layout title="Watch">
    
    <x-nav />
    <x-hero-compact />

    <p class="text-center mb-2 text-2xl text-touchstone-red">Livestream</p>

    <p>Welcome to {{ $currentSession['title'] }} of the 2026 <em>Touchstone</em> Conference, City on a Hill? Christians in America at 250. <strong>Program update: </strong>Carl R. Trueman is unable to join us for this year’s conference due to illness. We’re sorry to miss him and wish him a speedy recovery. Thank you for your understanding.</p>

    <div class='text-center'>
        <p class="mt-4 font-bold">{{ $currentSession['title'] }} — {{ $currentSession['description'] }}</p>
    </div>

    <!--THE VIDEO FRAME-->
    <div class="mt-6 mb-12 w-full overflow-hidden rounded-lg">
        <iframe
            src="https://www.youtube.com/embed/{{ $currentSession['video_id'] }}"
            title="Touchstone 2026 Conference — {{ $currentSession['title'] }}"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
            style="display: block; width: 100%; aspect-ratio: 16 / 9;"
        ></iframe>
    </div>

    <p class="text-center mb-6 text-2xl text-touchstone-red">{{ $currentSession['title'] }} Speakers</p>

    <!--THE SPEAKER CARD-->
    @foreach ($speakers as $speaker)
        <div class="overflow-hidden bg-white mb-12">
            <div class="grid gap-2 md:grid-cols-2">
                <!-- Photo -->
                <div class="hidden md:block">
                    <img
                        src="{{ $speaker['image'] }}"
                        alt="{{ $speaker['name'] }}"
                        class="h-full w-full object-cover"
                    >
                </div>
                <!-- Content -->
                <div class="p-8">
                    <p class="mt-2 italic text-stone-600">
                        {{ $speaker['title'] }}
                    </p>
                    <h3 class="mt-2 text-3xl tracking-tight text-[#332d29]">
                        {{ $speaker['name'] }}
                    </h3>
                    <p class="mt-2 text-md leading-6 text-stone-700">
                        {!! $speaker['bio'] !!}
                    </p>
                </div>
            </div>
        </div>
    @endforeach
        
<!--THE LOGOUT-->        
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <div class="text-center">
    <button
        type="submit"
        class="mb-10 mt-4 rounded-md bg-touchstone-red px-6 py-3 text-sm font-semibold text-white transition hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-touchstone-red focus:ring-offset-2"
    >
        Log out
    </button>
    </div>
</form>
    
</x-layout>