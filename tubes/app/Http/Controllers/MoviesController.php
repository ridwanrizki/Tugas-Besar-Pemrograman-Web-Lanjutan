<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Cast;
use App\Models\User;
use App\Models\Photo;
use App\Models\Video;
use App\Models\Celebrity;
use App\Models\Review;
use App\Models\Favorite;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('website/movies');
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
    public function show($id)
    {
        //
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

    public function msingle($id){
        $rel_movs = Cast::all();
        $movie = Movie::findOrFail($id);
        $reviews = Review::where('reviews.movie_id', $id);
        $users = User::all();
        $casts = Cast::selectRaw("casts.movie_id as movie_id, celebrities.name as celeb, casts.in_role as in_role,
                                    celebrities.id as celeb_id, celebrities.category as category,
                                    celebrities.image as image")
                        ->leftJoin("celebrities","celebrities.id","=","casts.celebrity_id")
                        ->get();
        return  view ('website.moviesingle', compact('movie','reviews','users','casts','rel_movs'));
    }

    public function newmovie(){
        return view('layout.newmovie');
    }

    public function mlist(){
        $mvlist = Movie::paginate(5);
        return view ('layout.movielist', compact('mvlist'));
    }

    public function mgrid(){
        $mvgrid = Movie::paginate(12);
        return view ('layout.moviegrid',compact('mvgrid'));
    }

    public function rating(){
        $ratelist = Review::where('movie_id',$id)->get();
        $rateCount = $ratelist->count();
    }


    public function store_review(Request $request, $id){
        $this->validate($request, [
            'review'          =>  'required',
            'rating'       =>  'required',
		]);

        $user = auth()->user();
        $search = Review::where('user_id',$user->id)->where('movie_id',$id);
        if (!$search){
            $review = new Review;
            $review->review = $request->review;
            $review->movie_id = $id;
            $review->user_id = $user->id; 
            $review->rating = $request->rating;
         }
        else{
            $review = Review::where('user_id',$user->id)->where('movie_id',$id);
            $review->review = $request->review;
            $review->movie_id = $id;
            $review->user_id = $user->id;
            $review->rating = $request->rating;
        }

        $movie = Movie::find($id);
        if(intval($movie->rating) == 0){
            $rates = intval($request->rating);
        } 
        else {
            $rates = (floatval($movie->rating) + floatval($request->phprating)) / 2;
        }

        $movie->rating = $rates;

        //$review->save();
        //$movie->save();
        return redirect()->back()->with('message','Berhasil Dikirim');

        
    }

    public function store_favorite($id){
        $user = auth()->user();
        $search = Favorite::where('user_id',$user->id)->where('movie_id',$id);
        if (!$search){
            $favorite = new Favorite;
            $favorite->movie_id = $id;
            $favorite->user_id = $user->id;
            //$favorite->save(); 
         }
         else{
             $favorite = Favorite::where('user_id',$user->id)->where('movie_id',$id);
             $favorite->movie_id = $id;
             $favorite->user_id = $user->id;
             //$favorite->save();
        }


        
        return redirect()->back()->with('message','Berhasil Disimpan');
    }

}
