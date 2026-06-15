<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            {{ isset($title)
                ? "40th Anniversary Touchstone Conference 2026 | City on a Hill? | {$title}"
                : '40th Anniversary Touchstone Conference 2026 | City on a Hill?'
            }}
        </title>

        <meta
            name="description"
            content="Join us September 24–26, 2026, as Touchstone celebrates its 40th anniversary and explores the theme 'City on a Hill? Christians in America at 250.'"
        />

        <link rel="icon" type="image/x-icon" href="/favicon.ico">

        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">

        <meta name="robots" content="index, follow">

        <meta property="og:type" content="website">
        <meta property="og:url" content="https://thetouchstoneconference.com">
        <meta property="og:title" content="Touchstone Conference 2026">
        <meta property="og:description" content="Join us September 24–26, 2026, as Touchstone celebrates its 40th anniversary and explores the theme 'City on a Hill? Christians in America at 250.'">
        <meta property="og:image" content="https://thetouchstoneconference.com/assets/images/og-image-40th">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Touchstone Conference 2026">
        <meta name="twitter:description" content="Join us September 24–26, 2026, as Touchstone celebrates its 40th anniversary and explores the theme 'City on a Hill? Christians in America at 250.'">
        <meta name="twitter:image" content="https://thetouchstoneconference.com/assets/images/og-image-40th">

        <meta name="author" content="The Fellowship of St. James">
        <meta name="theme-color" content="#7A1F1F">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    </head>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HD5TT77KQZ"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-HD5TT77KQZ');
    </script>

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
                    <div class="mx-auto px-4 sm:px-8 lg:px-16 py-8">

                        {{ $slot }}

                        <footer class="pb-16 text-center">

                            <a href="/"><p class="text-2xl">
                                The 2026 <em>Touchstone</em> Conference
                            </p></a>

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