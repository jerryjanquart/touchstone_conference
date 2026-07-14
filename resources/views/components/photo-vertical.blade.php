@props(['number'])

<section class="my-8">

    <div class="w-3/4 mx-auto">

        <img
            src="{{ asset('assets/images/conference/conference-page/gallery-' . $number . '.jpg') }}"
            alt=""
            class="w-full h-auto"
        >

        <p class="mt-3 text-sm text-stone-600 leading-relaxed">
            {{ $slot }}
        </p>

    </div>

</section>