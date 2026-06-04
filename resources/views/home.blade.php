<x-layout title="Touchstone Conference 2026">

    

    {{-- Hero --}}
    <!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->
<div class="bg-white">
  
    <x-header />

  <div class="relative isolate px-6 pt-14 lg:px-8">
    <div aria-hidden="true" class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
      <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" class="relative left-[calc(50%-11rem)] aspect-1155/678 w-144.5 -translate-x-1/2 rotate-30 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-288.75"></div>
    </div>
    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
      <div class="hidden sm:mb-8 sm:flex sm:justify-center">
        <div class="relative rounded-full px-3 py-1 text-sm/6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
          Announcing our next round of funding. <a href="#" class="font-semibold text-indigo-600"><span aria-hidden="true" class="absolute inset-0"></span>Read more <span aria-hidden="true">&rarr;</span></a>
        </div>
      </div>
      <div class="text-center">
        <h1 class="text-5xl font-semibold tracking-tight text-balance text-gray-900 sm:text-7xl">Data to enrich your online business</h1>
        <p class="mt-8 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat.</p>
        <div class="mt-10 flex items-center justify-center gap-x-6">
          <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</a>
          <a href="#" class="text-sm/6 font-semibold text-gray-900">Learn more <span aria-hidden="true">→</span></a>
        </div>
      </div>
    </div>
    <div aria-hidden="true" class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]">
      <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" class="relative left-[calc(50%+3rem)] aspect-1155/678 w-144.5 -translate-x-1/2 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-288.75"></div>
    </div>
  </div>
</div>


    {{-- Conference Description --}}
    <section class="border-t py-20">
        <div class="mx-auto max-w-4xl px-6">
            <h2 class="mb-6 text-3xl font-bold">
                About the Conference
            </h2>

            <p class="leading-relaxed text-gray-700">
                Touchstone's annual conference brings together leading Christian thinkers,
                writers, pastors, and scholars for a weekend of lectures, discussion,
                worship, and fellowship.
            </p>
        </div>
    </section>

    {{-- Speakers --}}
    <section id="speakers" class="border-t py-20">
        <div class="mx-auto max-w-6xl px-6">
            <h2 class="mb-10 text-3xl font-bold">
                Speakers
            </h2>

            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

                <div class="rounded-lg border p-6">
                    <h3 class="text-xl font-semibold">
                        Bradley J. Birzer
                    </h3>
                    <p class="mt-2 text-gray-600">
                        Speaker biography placeholder.
                    </p>
                </div>

                <div class="rounded-lg border p-6">
                    <h3 class="text-xl font-semibold">
                        Patrick Deneen
                    </h3>
                    <p class="mt-2 text-gray-600">
                        Speaker biography placeholder.
                    </p>
                </div>

                <div class="rounded-lg border p-6">
                    <h3 class="text-xl font-semibold">
                        Carl Trueman
                    </h3>
                    <p class="mt-2 text-gray-600">
                        Speaker biography placeholder.
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- Venue --}}
    <section id="venue" class="border-t py-20">
        <div class="mx-auto max-w-4xl px-6">
            <h2 class="mb-6 text-3xl font-bold">
                Venue & Hotel
            </h2>

            <p class="leading-relaxed text-gray-700">
                DoubleTree by Hilton
                <br>
                Oak Brook, Illinois
            </p>
        </div>
    </section>

    {{-- Registration --}}
    <section id="register" class="border-t py-20">
        <div class="mx-auto max-w-4xl px-6 text-center">
            <h2 class="mb-6 text-3xl font-bold">
                Registration
            </h2>

            <p class="mb-8 text-gray-700">
                Registration is now open.
            </p>

            <a
                href="#"
                class="inline-flex rounded-lg bg-black px-6 py-3 text-white transition hover:opacity-90"
            >
                Register Today
            </a>
        </div>
    </section>

</x-layout>