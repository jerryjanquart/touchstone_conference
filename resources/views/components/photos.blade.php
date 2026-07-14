<section class="scroll-mt-30 pb-12" data-aos="fade-up" id="photos">
    <div class="max-w-6xl mx-auto">

        <h2 class="mb-8 text-center text-3xl text-touchstone-red">
            The Conference in Pictures
        </h2>

        <div class="grid lg:grid-cols-3 gap-8 items-start mb-10">

            <!-- Large image -->
            <div class="lg:col-span-2 overflow-hidden group">
                <img
                    src="{{ asset('assets/images/conference/homepage/gallery-3.jpg') }}"
                    alt=""
                    class="w-full aspect-[16/10] object-cover transition-transform duration-500 ease-out group-hover:scale-105"
                >
            </div>

            <!-- Smaller image -->
            <div class="h-full overflow-hidden group">
                <img
                    src="{{asset('assets/images/conference/homepage/gallery-4.jpg') }}"
                    alt=""
                    class="w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-105"
                >
            </div>

        </div>

        <div class="mt-6 flex flex-wrap justify-center gap-4 items-center">            
            <a
                href="/photos"
                class="w-40 inline-flex items-center justify-center rounded-md bg-touchstone-red px-3 py-2 text-white hover:bg-[#651818] text-sm transition-all duration-300 text-center"
            >
                View Full Gallery
            </a>
        </div>

    </div>
</section>

<x-divider />