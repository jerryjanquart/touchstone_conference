
<!--Call to action start-->
<section class="py-5 bg-black bg-pattern" style="padding-left: 0px;margin-top: 0px; margin: 0px; padding: 0px; background: linear-gradient(45deg, #f2df5c, hsl(31, 53%, 57%)) !important;">
    <div class="container">
        <div
            class="row rounded-3 py-lg-7 pt-5 pb-2 g-0">
            <div class="col-md-8 offset-md-2">
                <div class="text-center position-relative z-1 px-5"
                    >
                    <div class="mb-1">
                        
                        

                        <center>                 
                            <h2 class="text-black mb-3 mt-10" style="font-family: 'Times New Roman', Times, serif; font-size: 2rem; font-weight: bold;">The 2025 <em>Touchstone</em> Conference<br /> LIVESTREAM</h2>
                        </center>

                        <p class="mb-4 text-black">
                            <span style="font-size: larger"><strong>
                                @session('success')
                                <p class="mb-0 text-black"> {{ $value }} </p>
                                @endsession
                            </strong>
                        </p>

                        <p class="text-black mb-3"><strong>Thank you for registering for the livestream! </strong>Videos will be updated at the appropriate times. The Saturday morning talks begin at 9:00 a.m.</p>

                        <p class="text-black mb-6">You can view all of the talks <a href="https://www.youtube.com/playlist?list=PL0Ctn8Z_Aah8iTQMHofL7ZW0WA9B60eBU">here.</a></p>

                        <!-- Begin iframe code here -->
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/e1Y6zBRj9O0?si=lVEp7_AUcnS8I43c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <!-- End iframe code here -->

                        <form action="/logout" method="POST">
                            @csrf
                            <button class="btn btn-dark btn mb-3 mt-6" href="/logout">Logout</button> 
                        </form>

                        
                        

                    </div>
            </div>
        </div>
    </div>
</section>
<!--Call to action end-->