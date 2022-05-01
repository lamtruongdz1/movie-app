<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getMoviePagination =  Http::get('https://ophim1.com/danh-sach/phim-moi-cap-nhat')->json()['pagination'];
        $pageNumber = $getMoviePagination['totalPages'];
        for ($i=0; $i < 10 ; $i++) {
            $getMovie = Http::get('https://ophim1.com/danh-sach/phim-moi-cap-nhat?page='.$i)->json()['items'];
        }
        // dd($getMovie);


        return view('movies.index', compact('getMovie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $movieDetails = Http::get('https://ophim1.com/phim/' . $slug)->json()['movie'];
        $movieEpisodes = Http::get('https://ophim1.com/phim/' . $slug)->json()['episodes'];
        $slot = $movieEpisodes[0]['server_data'];
        // dd($movieDetails);

        return view('movies.show', compact('movieDetails', 'movieEpisodes', 'slot'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
