<!doctype html>
<html lang="en">

   <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <meta property="og:url" content="https://www.thetouchstoneconference.com/" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="The 2025 Touchstone Conference" />
        <meta property="og:description" content="Great and Wonderful Days: Recovering the Christian Life in a Post-Christian Age" />
        <meta property="og:image" content="./assets/images/share/fb.jpg" />

        <!-- Favicon icon-->
        <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon/apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon/favicon-16x16.png" />
        <link rel="manifest" href="./assets/images/favicon/site.webmanifest" />
        <link rel="mask-icon" href="./assets/images/favicon/block-safari-pinned-tab.svg" color="#8b3dff" />
        <link rel="shortcut icon" href="./assets/images/favicon/favicon.ico" />
        <meta name="msapplication-TileColor" content="#8b3dff" />
        <meta name="msapplication-config" content="./assets/images/favicon/tile.xml" />

        <!-- Color modes -->
        <script src="./assets/js/vendors/color-modes.js"></script>

        <!-- Libs CSS -->
        <link href="./assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />
        <link href="./assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="./assets/libs/swiper/swiper-bundle.min.css" />

        <!-- Scroll Cue -->
        <link rel="stylesheet" href="./assets/libs/scrollcue/scrollCue.css" />

        <!-- Box icons -->
        <link rel="stylesheet" href="./assets/fonts/css/boxicons.min.css" />

        <!-- Theme CSS -->
        <link rel="stylesheet" href="./assets/css/theme.min.css">
        <link rel="stylesheet" href="./assets/css/custom.css">
        
        <!-- Analytics Code Goes Here-->
                <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-HD5TT77KQZ"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-HD5TT77KQZ');
        </script>

       <title>
            @isset($doctitle)
            {{$doctitle}} | The 2025 Touchstone Conference
            @else
            The 2025 Touchstone Conference
            @endisset
    </title>

    </head>

    <body>
    
        {{ $slot }}

        <!-- Libs JS -->
        <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="./assets/libs/simplebar/dist/simplebar.min.js"></script>
        <script src="./assets/libs/headhesive/dist/headhesive.min.js"></script>
        <script src="./assets/libs/headhesive/dist/headhesive.min.js"></script>

        <!-- Theme JS -->
        <script src="./assets/js/theme.min.js"></script>
        <script src="./assets/libs/scrollcue/scrollCue.min.js"></script>
        <script src="./assets/js/vendors/scrollcue.js"></script>
        
        <!-- Swiper JS -->
        <script src="./assets/libs/swiper/swiper-bundle.min.js"></script>
        <script src="./assets/js/vendors/swiper.js"></script>
        
   
    </body>
</html>
