<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Session;
use Spatie\Activitylog\Models\Activity;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $category = Category::orderBy('created_at', 'desc')->get();
        return view('admin.category.index', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $category = Category::all();
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->nama = $request->nama;
        $category->slug = str_slug($request->nama, '-');
        $category->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan category <b>$category->nama</b>!"
        ]);
        return redirect()->route('category.index');
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
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
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
        $category = Category::findOrFail($request->id);
        $category->nama = $request->nama;
        $category->slug = str_slug($request->nama, '-');
        $category->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil mengubah kategori menjadi category <b>$category->nama</b>!"
        ]);
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menghapus data"
        ]);
        return redirect()->route('category.index');
    }
}
