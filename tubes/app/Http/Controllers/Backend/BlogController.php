<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use App\Models\Blog;
use App\Models\Category;

class BlogController extends Controller
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
        $blogs = Blog::paginate(5);
        return view('website.backend.blogs.list', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Blog $blog)
    {
        $categories = Category::all();
        return view('website.backend.blogs.create', compact('blog','categories'));
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
            'category_id'   =>  'required',
            'title'         =>  'required',
            'excerpt'       =>  'required',
            'body'          =>  'required',
            'image'         =>  'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'status',
		]);

        // menyimpan data file yang diupload ke variabel $blogs
		$blogs = new Blog;
 
        $imageName = time().'.'.$request->image->extension(); 
 
      	// isi dengan nama folder tempat kemana file diupload
		$request->image->move(public_path('images/uploads'),$imageName);
 
		$blogs->category_id   =  $request->category_id;
        $blogs->title         =  $request->title;
            $blogs->excerpt       =  $request->excerpt;
            $blogs->body          =  $request->body;
            $blogs->image         =  $imageName;
            $blogs->status        =  "published";
    
            $blogs->save();
            return redirect('/admin/blogs')->with('message','Data berhasil disimpan');

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
        $blog = Blog::findOrFail($id);
        $categories = Category::all();
        return view('website.backend.blogs.edit', compact('blog','categories'));
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
 
		$blogs->category_id   =  $request->category_id;
        $blogs->title         =  $request->title;
        $blogs->excerpt       =  $request->excerpt;
        $blogs->body          =  $request->body;
        $blogs->image         =  $imageName;
        $blogs->status        =  "published";
        $blogs->updated_at = date('Y-m-d H:i:s');
    
        $blogs->save();
            return redirect('/admin/blogs')->with('message','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::findorFail($id)->delete();
        return redirect('/admin/blogs')->with('message','Data berhasil dihapus');
    }
}
