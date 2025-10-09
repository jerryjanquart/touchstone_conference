<x-layout doctitle="{{ $title }}">
    <x-nav />
    <main>
        <x-livestream-welcome />

        <!--project idea-->
<section class="py-lg-8 py-5 bg-black">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-md-12">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-7">
                        <div class="text-center text-md-start mb-6 mb-md-0">
                            <h2 class="text-white-stable" style="font-family: 'Times New Roman', Times, serif; font-size: 2rem; font-weight: bold;">{{ $title }}</h2>
                            <p class="mb-0 text-white">{{ $speakers }}</p>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="text-center">
                            <iframe width="560" height="315" src="{{ $embedCode }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-logout /> 
</section>
<!--project idea-->
        
        
        
        <x-hero /> 
    </main>
    <x-footer />
</x-layout>

