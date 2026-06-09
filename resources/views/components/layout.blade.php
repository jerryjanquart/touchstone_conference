<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title ?? 'Touchstone Conference' }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    </head>


    <body>

        <div class="min-h-screen bg-[#332d29]">
            <div class="mx-auto flex max-w-screen-2xl justify-center">

                <!-- Left Column -->
                <!-- Left Column -->
                <aside class="hidden lg:block lg:w-48 xl:w-72 shrink-0">
                    <div class="sticky top-0 h-screen">
                        <img
                            src="{{ Vite::asset('resources/images/left.jpg') }}"
                            alt=""
                            class="h-full w-full object-cover object-top"
                        >
                    </div>
                </aside>

                <!-- Center Content -->
                <main class="flex-1 max-w-2xl bg-white">
                    <div class="mx-auto px-8 lg:px-16 py-8">

                        {{ $slot }}

                        <footer class="pb-16 text-center">

                            <p class="text-2xl">
                                The 2026 <em>Touchstone</em> Conference
                            </p>

                            <p class="mt-2 italic text-black">
                                City on a Hill? Christians in America at 250
                            </p>

                            <p class="mt-6 text-sm text-black">
                                Presented by <em>Touchstone: A Journal of Mere Christianity</em>
                            </p>

                            <p class="mt-2 text-sm text-stone-500">
                                © 2026 The Fellowship of St. James
                            </p>

                        </footer>

                    </div>
                </main>

                

                <!-- Right Column -->
                <!-- Right Column -->
                <aside class="hidden lg:block lg:w-48 xl:w-72 shrink-0">
                    <div class="sticky top-0 h-screen">
                        <img
                            src="{{ Vite::asset('resources/images/right3.jpg') }}"
                            alt=""
                            class="h-full w-full object-cover object-top"
                        >
                    </div>
                </aside>

            </div>
        </div>

        

    </body>
</html>