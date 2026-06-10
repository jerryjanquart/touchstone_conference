<section id="featured-speakers" class="scroll-mt-36 mb-12" data-aos="fade-up">

<div class="text-center">
    <h3 class="mt-2 text-3xl text-touchstone-red">
        Featured Speakers
    </h3>

    <p class="text-lg leading-8 text-stone-700 mx-auto mb-8 mt-2">In celebration of <em>Touchstone</em>’s 40th anniversary, <br />we are pleased to welcome...</p>
</div>

    <div class="overflow-hidden bg-white">

        <div class="grid gap-2 md:grid-cols-2">

            <!-- Photo -->
            <div>
                <img
                    :src="speakers[active].image"
                    :alt="speakers[active].name"
                    class="h-full w-full object-cover"
                >
            </div>

            <!-- Content -->
            <div class="p-8">

                <p
                    class="mt-2 italic text-stone-600"
                    x-text="speakers[active].title"
                ></p>

                <h3
                    class="mt-2 text-3xl tracking-tight text-[#332d29]"
                    x-text="speakers[active].name"
                ></h3>

                <p
                    class="mt-2 text-md leading-6 text-stone-700"
                    x-html="speakers[active].bio"
                ></p>

                <div class="mt-8 flex justify-between">

                    <button
                        @click="active = active === 0 ? speakers.length - 1 : active - 1"
                        class="rounded border border-stone-300 px-4 py-2 hover:bg-stone-100"
                    >
                        ← 
                    </button>

                    <button
                        @click="active = active === speakers.length - 1 ? 0 : active + 1"
                        class="rounded border border-stone-300 px-4 py-2 hover:bg-stone-100"
                    >
                         →
                    </button>

                </div>

            </div>

        </div>

    </div>

    <div class="mt-8 text-center">
        <a
            href="#top"
            class="text-sm uppercase tracking-wider text-stone-500 hover:text-[#8b1e1e]"
        >
            Back to Top ↑
        </a>
    </div>


</section>

<x-divider />