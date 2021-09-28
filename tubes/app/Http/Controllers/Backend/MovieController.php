<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Genre;
use App\Models\Photo;
use App\Models\Video;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('role:admin');
    }

    public function index()
    {
        $movies = Movie::paginate(5);
        return view('website.backend.movies.list', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Movie $movie)
    {
        $genres = Genre::all();
        return view('website.backend.movies.create', compact('movie','genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'          =>  'required',
            'country'        =>  'required',
            'run_time'       =>  'required',
            'genre'          =>  'required',
            'release_date'   =>  'required',
            'mmpa_ratings'   =>  'required',
            'image'          =>  'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'trailer'        =>  'required',
            'excerpt'        =>  'required',
            'body'           =>  'required',
		]);

        $movie = new Movie;
        // menyimpan data file yang diupload ke variabel $file
 
        $imageName = time().'.'.$request->image->extension(); 
 
      	// isi dengan nama folder tempat kemana file diupload
        $request->image->move(public_path('images/uploads'),$imageName);
 
		$movie->title         =  $request->title;
        $movie->image         =  $imageName;
        $movie->country       =  $request->country;
        $movie->run_time      =  $request->run_time;
        $movie->genre_id      =  $request->genre;
        $movie->release_date  =  $request->release_date;
        $movie->mmpa_ratings  =  $request->mmpa_ratings;
        $movie->trailer       =  $request->trailer;
        $movie->excerpt       =  $request->excerpt;
        $movie->body          =  $request->body;
        $movie->status        =  "published";

        $movie->save();

		return redirect('/admin/movies')->with('message','Data berhasil disimpan');
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
        $movie = Movie::findOrFail($id);
        $genres = Genre::all();
        return view('website.backend.movies.edit', compact('movie','genres'));
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
        $movie = Movie::find($id);
        if ($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images/uploads'), $imageName);
        } else {
            $imageName = $movie->image;
        }

		$movie->title         =  $request->title;
        $movie->image         =  $imageName;
        $movie->country       =  $request->country;
        $movie->run_time      =  $request->run_time;
        $movie->genre_id      =  $request->genre;
        $movie->release_date  =  $request->release_date;
        $movie->mmpa_ratings  =  $request->mmpa_ratings;
        $movie->trailer       =  $request->trailer;
        $movie->excerpt       =  $request->excerpt;
        $movie->body          =  $request->body;
        $movie->status        =  "published";
        $movie->updated_at = date('Y-m-d H:i:s');
        $movie->save();
        return redirect('/admin/movies')->with('message','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Movie::findorFail($id)->delete();
        return redirect('/admin/movies')->with('message','Data berhasil dihapus');
    }

    public function galleries($id)
    {
        $photos = Photo::where('movie_id',$id);
        //$videos = Video::where('movie_id',$id);
        return view('website.backend.movies.gallery', compact('photos'));
    }

    public function add_galleries(Request $request, $id){

    }
}
