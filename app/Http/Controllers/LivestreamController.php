<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivestreamController extends Controller
{
    public function index() 
    {
        return view('livestream');
    }

    public function watch($id) 
    {
        //dd($id);
        if ($id == 'thursday') {
            $embedCode = 'https://www.youtube.com/embed/mty076NXpM4?si=BV0Zrfyq0z887rDi';
            $title = 'Thursday Evening';
            $speakers = 'Douglas Farrow, Hans Boersma. Please note the sound does not begin until about the 13 minute mark.';
        } elseif ($id == 'friday-morning') {
            $embedCode = 'https://www.youtube.com/embed/dihSurviXcA?si=xtU5VCM9JPLKWu0D';
            $title = 'Friday Morning';
            $speakers = 'Paul Kingsnorth, Jonathan Pageau, Richard Rohlin. Talks begin around the 8 minute mark.';
        } elseif ($id == 'friday-afternoon') {
            $embedCode = 'https://www.youtube.com/embed/T8ali12GcdE?si=Hem5Bqen13PnqveV';
            $title = 'Friday Afternoon';
            $speakers = 'R. V. Young, Panel Discussion w/ Kingsnorth, Pageau, Boersma, & C. R. Wiley. Talks begin around the 10 minute mark.';
        } elseif ($id == 'friday-evening') {
            $embedCode = 'https://www.youtube.com/embed/1OjQ5bz2Yvk?si=oj6dJyAkrQSmTfJr';
            $title = 'Friday Evening';
            $speakers = 'Matthew B. Crawford. Talk begins around the 7 minute mark.';
        } elseif ($id == 'saturday-morning') {
            $embedCode = 'https://www.youtube.com/embed/e1Y6zBRj9O0?si=m2sHnLzChPJH2Jwv';
            $title = 'Saturday Morning';
            $speakers = 'Rod Dreher, Panel Discussion w/ Matthew B. Crawford, Rod Dreher, Richard Rohlin, and C. R. Wiley. Talks begin at around the 2:30 mark.';
        } else {
            return abort(404);
        }



        return view('livestream-embed', ['embedCode' => $embedCode, 'title' => $title, 'speakers' => $speakers]);
    }

}
