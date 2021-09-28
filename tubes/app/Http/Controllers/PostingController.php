<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Celebrity;
use App\Models\Movie;
use App\Models\Blog;
use App\Models\Photo;
use App\Models\Video;
use App\Models\Cast;

class PostingController extends Controller
{
    protected $limit = 4;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        $blogs = Blog::paginate($this->limit);
        return view("website.home", compact('movies', 'blogs'));
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

    public function movie($id) {
        $movie = Movie::findOrFail($id);
        return view("website.moviesingle", compact('movie'));
    }

    public function celeblist() {
        $celeb = Celebrity::paginate(5);
        return view("website.celebritylist", compact('celeb'));     
    }

    public function celebsingle($id) {
        $casts = Cast::where("casts.celebrity_id", $id)->get();
        $single = Celebrity::findOrFail($id);
        return view("website.celebritysingle", compact('single', 'casts'));
    }

    public function search(Request $request)
    {
        $search = $request->search;

        $celeb = Celebrity::where('name', 'like', "%".$search."%")
            ->paginate();
        return view("website.searchceleb", ['celeb'=>$celeb]);       
    }

    public function bloglist(){
        $list =Blog::paginate(5);
        return view("website.bloglist", compact('list'));
    }

    public function blogdetail($id){
        $detail = Blog::findOrFail($id);
        return view("website.blogdetail", compact('detail'));
    }

    public function search_blog(Request $request)
    {
        $search_blog = $request->search_blog;

        $list = Blog::where('title', 'like', "%".$search_blog."%")
            ->paginate();
        return view ("website.searchblog", ['list'=>$list]);
    }
}
