{{-- resources/views/components/speaker-link.blade.php --}}

<button {{ $attributes->merge([
    'class' => 'group inline-flex flex-col items-center'
]) }}>
    <span class="text-xl">
        {{ $slot }}
    </span>

    <span class="mt-2 block h-px w-40 bg-stone-300"></span>
</button>