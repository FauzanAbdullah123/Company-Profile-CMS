<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use Session;
use Spatie\Activitylog\Models\Activity;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tag = Tag::orderBy('created_at', 'desc')->get();
        return view('admin.tag.index', compact('tag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $tag = Tag::all();
        return view('admin.tag.create');
    }

    public function store(Request $request)
    {

        $tag = new Tag();
        $tag->nama = $request->nama;
        $tag->slug = str_slug($request->nama, '-');
        $tag->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan tag bernama <b>$tag->nama</b>!"
        ]);
        return redirect()->route('tag.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Tag::findOrFail($id);
        return view('admin.tag.edit', compact('tag'));
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
         $request->validate([
            'nama' => 'required',
        ]);
        $tag = Tag::findOrFail($request->id);
        $tag->nama = $request->nama;
        $tag->slug = str_slug($request->nama, '-');
        $tag->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil mengubah tag menjadi <b>$tag->nama</b>!"
        ]);
        return redirect()->route('tag.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menghapus data"
        ]);
        return redirect()->route('tag.index');
        
    }
}
