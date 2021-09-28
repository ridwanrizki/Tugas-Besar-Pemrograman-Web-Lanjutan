<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Genre;
use App\Models\Blog;
use App\Models\Category;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class Posting2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('website.homev2');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        //return;
            
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //nama file bermasalah
    {
        $this->validate($request, [
            'category_id'   =>  'required',
            'title'         =>  'required',
            'slug'          =>  'required',
            'excerpt'       =>  'required',
            'body'          =>  'required',
            'image'         =>  'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'status'        =>  'required',
		]);

        // menyimpan data file yang diupload ke variabel $blogs
		$blogs = new blogs;
 
        $imageName = time().'.'.$request->image->extension(); 
 
      	// isi dengan nama folder tempat kemana file diupload
		$request->image->move(public_path('images/uploads'),$imageName);
 
		$blogs->category_id   =  $request->category_id;
        $blogs->title         =  $request->title;
        $blogs->slug          =  $request->slug;
        $blogs->excerpt       =  $request->excerpt;
        $blogs->body          =  $request->body;
        $blogs->image         =  $request->image;
        $blogs->status        =  $request->status;

        $blogs->save();
		return redirect('/')->with('message','Data berhasil disimpan');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //return ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('website.editblog',compact('blog'));
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
        $blogs = Blog::find($id);
        if ($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images/uploads'), $imageName);
        } else {
            $imageName = $blogs->image;
        }

		$blogs->category_id     = $request->category_id;
		$blogs->title           = $request->title;
        $blogs->slug            = $request->slug;
        $blogs->excerpt         = $request->excerpt;
        $blogs->body            = $request->body;
        $blogs->image           = $imageName;
        $blogs->status          = $request->status;

        $blogs->save();
        return redirect('/bloglist')->with('message','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::findOrFail($id)->delete();
        return redirect('/bloglist')->with('message', 'data berhasil dihapus');
    }

    public function msingle($id){
        $mvsingle = Movie::findOrFail($id);
        return  view ('website.moviesingle', compact('mvsingle'));
    }

    public function mlist(){
        $mvlist =Movie::paginate(5);
        return view ('website.movielist', compact('mvlist'));
    }

    public function mgrid(){
        $mvgrid =Movie::paginate(12);
        return view ('website.moviegrid',compact('mvgrid'));
    }

    public function genre1(){
        $gens1 = DB::table('movies')->where('genre_id','1')->get();
        
        return view ('website.genre1',compact('gens1'));
    }

    public function genre2(){
        $gens2 = DB::table('movies')->where('genre_id','2')->get();
        return view ('website.genre2',compact('gens2'));
    }

    public function genre3(){
        $gens3 = DB::table('movies')->where('genre_id','3')->get();
        return view ('website.genre3',compact('gens3'));
    }

    public function genre4(){
        $gens4 = DB::table('movies')->where('genre_id','4')->get();
        return view ('website.genre4',compact('gens4'));
    }
    
    public function createBlog(Blogs $blog){
        return view('website.buatblog', compact('blog'));
    }

    public function blist(){
        $list = DB::table('blogs')->paginate(5);
        return view('website.bloglist',compact('list'));
    }

    public function bdetail($id){
        $detail = Blog::findOrFail($id);
        return view ('website.blogdetail', compact('detail'));
    }

    public function cari(Request $request){
        //menangkap data pencarian
        $cari = $request->cari;

        //mengambil data dari tabel movies berdasarkan judul
        $movies = DB::table('movies')
            ->where('title','like',"%".$cari."%")
            ->paginate();

        //mengirim data movies ke view tampil
        return view('website.tampil',['movies'=>$movies]);
    }
}


