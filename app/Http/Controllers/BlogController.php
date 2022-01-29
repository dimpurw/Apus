<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Jobs\ResizeImage;
use App\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = \App\Blog::all()->sortByDesc('created_at');
        $recent = DB::table('blogs')->orderBy('created_at', 'desc')->paginate(3);
        return view('blog', ['blog' => $blog, 'recent' => $recent]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileUpload = new Blog;
        $fileUpload->title = $request->title;
        $fileUpload->description = $request->description;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $name = $file->getClientOriginalName();
            $fileName  = auth()->user()->username . '_' . time() . '_' . $name;
            $request->file('foto')->move('blog/', $fileName);
            $fileUpload->foto = 'blog/' . $fileName;
            $fileUpload->save();
        }

        ResizeImage::dispatch($fileUpload);

        return redirect('/blogs')->with('sukses', 'Data Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = \App\Blog::find($id);
        $recent = DB::table('blogs')->orderBy('created_at', 'desc')->paginate(3);
        return view('blog-detail', ['blog' => $blog , 'recent' => $recent]);
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
