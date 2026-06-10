<section class="pt-4 pb-16 scroll-mt-36" id="venue" data-aos="fade-up">
    <div class="mx-auto max-w-6xl">

        <div class="grid gap-8 lg:grid-cols-2 lg:items-center">

            <!-- Image -->
            <div>
                <img
                    src="{{ Vite::asset('resources/images/venue.jpg') }}"
                    alt="DoubleTree by Hilton Oak Brook"
                    class="w-full object-cover"
                >
            </div>

            <!-- Content -->
            <div>
                <h2 class="text-3xl tracking-tight text-touchstone-red">
                    Hotel & Venue
                </h2>

                <p class="mt-4 text-md text-black leading-6">
                    The 2026 <em>Touchstone </em>Conference will be held at the
                    DoubleTree by Hilton in Oak Brook, Illinois, just west of
                    Chicago and conveniently located near major highways,
                    restaurants, and shopping.
                </p>

                <p class="mt-4 text-black leading-6">
                    Conference attendees may reserve rooms at a special
                    discounted rate through our conference block.
                </p>

                <div class="mt-8 flex flex-wrap gap-4">
                    <a
                        href="https://www.hilton.com/en/attend-my-event/touchstoneconferenceroomblock/"
                        class="inline-flex items-center rounded-md bg-touchstone-red px-2 py-1 text-white hover:bg-[#651818] text-sm transition-all duration-300"
                    >
                        Book Your Room Online
                    </a>

                    <a
                        href="https://www.oakbrookcenter.com/en/directory/"
                        class="inline-flex items-center rounded-md border border-gray-300 px-2 py-1 transition-all duration-300 hover:bg-gray-100 text-sm"
                    >
                        View Oakbrook Center Website
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>

<x-divider />