<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Celebrity;
use App\Http\Requests;

class CelebrityController extends Controller
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
        $celebs = Celebrity::paginate(5);
        return view('website.backend.celebrities.list', compact('celebs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Celebrity $celeb)
    {
        return view('website.backend.celebrities.create', compact('celeb'));
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
            'name'          =>  'required',
            'full_name'     =>  'required',
            'country'       =>  'required',
            'height'        =>  'required',
            'category'      =>  'required',
            'birth_date'    =>  'required',
            'death_date',
            'image'         =>  'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'link_facebook',
            'link_twitter',
            'link_instagram',
            'excerpt'       =>  'required',
            'biography'     =>  'required',
		]);

        $celeb = new Celebrity;
        // menyimpan data file yang diupload ke variabel $file
 
        $imageName = time().'.'.$request->image->extension(); 
 
      	// isi dengan nama folder tempat kemana file diupload
        $request->image->move(public_path('images/uploads'),$imageName);
 
		$celeb->name          =  $request->name;
		$celeb->full_name          =  $request->full_name;
        $celeb->image         =  $imageName;
        $celeb->country       =  $request->country;
        $celeb->height        =  $request->height;
        $celeb->category      =  $request->category;
        $celeb->birth_date    =  $request->birth_date;
        $celeb->death_date    =  $request->death_date;
        $celeb->link_facebook    =  $request->link_facebook;
        $celeb->link_twitter    =  $request->link_twitter;
        $celeb->link_instagram    =  $request->link_instagram;
        $celeb->excerpt       =  $request->excerpt;
        $celeb->biography     =  $request->biography;

        $celeb->save();

		return redirect('/admin/celebrities')->with('message','Data berhasil disimpan');

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
        $celeb = Celebrity::findOrFail($id);
        return view('website.backend.celebrities.edit', compact('celeb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // public function handleRequest($request){
    //     $data = $request->all();
    //     return $data;
    // }

    //$data = $this->handleRequest($request);
 
    public function update(Request $request, $id) 
    {
        $celeb = Celebrity::find($id);
        if ($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images/uploads'), $imageName);
        } else {
            $imageName = $celeb->image;
        }

		$celeb->name          =  $request->name;
		$celeb->full_name          =  $request->full_name;
        $celeb->image         =  $imageName;
        $celeb->country       =  $request->country;
        $celeb->height        =  $request->height;
        $celeb->category      =  $request->category;
        $celeb->birth_date    =  $request->birth_date;
        $celeb->death_date    =  $request->death_date;
        $celeb->link_facebook    =  $request->link_facebook;
        $celeb->link_twitter    =  $request->link_twitter;
        $celeb->link_instagram    =  $request->link_instagram;
        $celeb->excerpt       =  $request->excerpt;
        $celeb->biography     =  $request->biography;
        $celeb->updated_at = date('Y-m-d H:i:s');
        $celeb->save();
        return redirect('/admin/celebrities')->with('message','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Celebrity::findorFail($id)->delete();
        return redirect('/admin/celebrities')->with('message','Data berhasil dihapus');
    }
}
