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
                            <h2 class="text-black mb-3 mt-10" style="font-family: 'Times New Roman', Times, serif; font-size: 2rem; font-weight: bold;">LIVESTREAM OPTIONS</h2>

                            <a style="text-decoration: none;" href="https://interland3.donorperfect.net/weblink/WebLink.aspx?name=E350987&id=100" class="btn btn-primary text-black">Register for Livestream!</a>

                        </center>

                        

                        @if (session()->has('error'))
                            <p class="lead text-black mb-4 mt-3"><strong> {{ session('error') }} </strong></p>
                        @endif

                        <p class="mb-4 text-black mt-4">
                            <span style="font-size: larger"><strong>Or enter your login credentials below.</strong>                            
                        </p>
                        
                        <div class="row">

                            <div class="col-sm-2"></div>
                            <div class="col-sm-8 mb-3">
                            
                                <form method="POST" action="/login">
                                    @csrf
                                    
                                    <!--username-->
                                    <label class="form-label text-black" for="name">User Name</label>
                                    <input 
                                        name="name"
                                        id="name"
                                        aria-describedby="name"
                                        type="text"  
                                        class="form-control mb-3"
                                        >
                                    
                                    <!--password-->
                                    <label class="form-label text-black" for="password">Password</label>
                                    <input 
                                        name="password"
                                        id="password"
                                        aria-describedby="password"
                                        type="text"  
                                        class="form-control mb-3"
                                        >
                                    
                                        <center>
                                            <button 
                                                type="submit" 
                                                class="btn btn-dark mt-3 mb-4"
                                            >
                                                Log In
                                            </button>
                                        </center>

                                </form>

                            </div>

                            <div class="col-sm-2"></div>
                        <!--password-->


                    </div>

                    </div>
            </div>
        </div>
    </div>
</section>
<!--Call to action end-->