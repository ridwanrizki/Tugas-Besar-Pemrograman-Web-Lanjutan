<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Review;
use App\Models\Movie;
use App\Models\Favorite;
use App\Models\Cast;
use App\Models\Celebrity;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('role:admin');
    }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with(['roles' => function($q){
            $q->where('name', 'user');
        }])->paginate(5);
        return view('website.backend.users.list', compact('users'));
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
        $user = User::findOrFail($id);
        return(view('website.backend.users.detail', compact('user')));
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

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findorFail($id)->delete();
        return redirect('/admin/users')->with('message','Data berhasil dihapus');
    }

    public function reviews($id)
    {
        $reviews = Review::where('reviews.user_id', $id)->paginate(5);
        $user = User::findOrFail($id);
        return(view('website.backend.users.reviews', compact('reviews','user')));
    }

    public function favorites($id)
    {

        $favorites = Favorite::where('favorites.user_id', $id)->paginate(5);
        $user = User::findOrFail($id);
        $reviews = Review::all();
        

            $casts = Cast::selectRaw("casts.movie_id as movie_id, celebrities.name as celeb, 
                                      celebrities.id as celeb_id, celebrities.category as category")
                        ->leftJoin("celebrities","celebrities.id","=","casts.celebrity_id")
                        ->get();

        return(view('website.backend.users.favorites', compact('favorites','user','casts')));

    }
}
