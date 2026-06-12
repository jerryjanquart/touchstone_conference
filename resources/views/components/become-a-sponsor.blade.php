@props([
    'href' => '/',
])

<div class="mt-8 flex flex-wrap justify-center gap-4 items-center">            
    <a
        href="{{ $href }}"
        class="inline-flex items-center justify-center rounded-md bg-touchstone-red px-3 py-2 text-white hover:bg-[#651818] text-sm transition-all duration-300 text-center"
    >
        {{ $slot }}
    </a>
</div>