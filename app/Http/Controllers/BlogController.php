<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $post = Blog::all();
        return view('blog.lista')->with(['post'=>$post]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('blog.agregar');        
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
        $blog= new Blog();
        $blog->titulo=$request->titulo;
        $blog->urlimagen=$request->urlimagen;
        $blog->descripcion=$request->descripcion;
        $blog->save();
        return redirect('/blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Blog::find($id);
        return view('blog.editar')->with(['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        // dd($request);
        $blog = Blog::find($request->id);
        $blog->titulo=$request->titulo;
        $blog->urlimagen=$request->urlimagen;
        $blog->descripcion=$request->descripcion;
        $blog->save();
        return redirect('/blog');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }

    public function post(){
        return Blog::orderBy('created_at', 'desc')->take(3)->get();
    }
    public function morepost($id){
        return Blog::where('id','<',$id)->orderBy('created_at', 'desc')->take(4)->get();        
    }
}
