{{-- resources/views/components/speaker-link.blade.php --}}

@props(['index'])

<button
    type="button"
    @click="setSpeaker({{ $index }})"
    {{ $attributes->merge([
        'class' => 'group inline-flex flex-col items-center transition-colors hover:text-[#8b1e1e]'
    ]) }}
>
    <span class="text-xl">
        {{ $slot }}
    </span>

    <span class="mt-2 block h-px w-40 bg-stone-300"></span>
</button>