<section class="mb-xl-9 my-5 bg-black">
    
    <div class="container">
        
            
        <div class="row py-3 g-5">
            <x-session-card 
                url="/thursday" 
                people="Douglas Farrow, Hans Boersma" 
                date="September 25" 
                imgUrl="./assets/images/gallery/hans.jpg">
                    Thursday Evening Session
            </x-session-card>

            <x-session-card 
                url="/friday-morning" 
                people="Paul Kingsnorth, Jonathan Pageau, Richard Rohlin" 
                date="September 26" 
                imgUrl="./assets/images/gallery/kingsnorth.jpg">
                    Friday Morning Session
            </x-session-card>            
        </div>

        <div class="row py-3 g-5">
            <x-session-card 
                url="/friday-afternoon" 
                people="R. V. Young, Panel Discussion w/ Kingsnorth, Pageau, Boersma, & C. R. Wiley" 
                date="September 26" 
                imgUrl="./assets/images/gallery/young.jpg">
                    Friday Afternoon Session
            </x-session-card>

            <x-session-card 
                url="/friday-evening" 
                people="Matthew B. Crawford" 
                date="September 26" 
                imgUrl="./assets/images/gallery/crawford.jpg">
                    Friday Evening Session
            </x-session-card>            
        </div>

        
        <div class="row py-3">
            <x-session-card 
                url="/saturday-morning" 
                people="Rod Dreher, Panel Discussion w/ Matthew B. Crawford, Rod Dreher, Richard Rohlin, and C. R. Wiley" 
                date="September 27" 
                imgUrl="./assets/images/gallery/dreher.jpg">
                    Saturday Morning Session
            </x-session-card>            
        </div>
        

        <div style="text-align: center;">
            <form action="/logout" method="POST">
            @csrf
                <button class="btn btn-dark btn mb-3 mt-6" href="/logout">Logout</button> 
            </form>
        </div>
    </div>
    
</section>
