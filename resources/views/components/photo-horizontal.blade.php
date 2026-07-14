@props(['number'])

<section class="my-8">

    <img
        src="{{ asset('assets/images/conference/conference-page/gallery-' . $number . '.jpg') }}"
        alt="Attendees browse the conference bookstore before the opening session."
        class="w-full h-auto"
    >

    <p class="mt-3 text-sm text-stone-600 leading-relaxed">
        {{ $slot }}
    </p>

</section>