<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        //$movies = Movie::where('vote', '<', 8)->get();
        //$movies = Movie::where('vote', '>', 8)->orderBy('date', 'desc')->get();

        /* $movie = Movie::where('vote', '>', 8)->first(); // Se uso ->first() avrò 1 solo recors perciò il  @foreach non ha senso e darà errore! */

        /* $movie = Movie::find(7); //::find() cercherà il solorecord con 'id' = 7. Non si può ciclare!
        dd($movie->title); */

        //$movies = Movie::where('vote', '>', 8)->orderBy('date', 'desc')->limit(2)->get(); //limita results a (2)

        /* $movies = Movie::where('vote', '>', 8)->orderBy('date', 'desc')->paginate(4); //limita results della pagina a (4). Altri 4 res saranno nella pg successiva. Usi {{$movies->links()}} per scartare le pagine
 */
        //$movies = Movie::where(YEAR('date'), '>', 1980)->get();   !!Scorretta!!

        //dd($movies);
        return view('home', compact('movies'));
    }
}
//return view('home', ['movies' => Movie::all()]);