<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Tag;
use Session;
use App\User;
use File;
use Auth;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Article::all();
        return view('admin.article.index', compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $tag = Tag::all();
        return view('admin.article.create', compact('category', 'tag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $request->validate([
            'judul' => 'required|unique:articles',
            'konten' => 'required|min:50',
            'foto' => 'required|mimes:jpeg.jpg.png.gif|required|max:2048',
            'category_id' => 'required',
            'tag_id' => 'required'
        ]);
        $article = new Article;
        $article->judul = $request->judul;
        $article->slug = str_slug($request->judul);
        $article->konten = $request->konten;
        $article->user_id = Auth::user()->id;
        $article->category_id = $request->category;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path() . '/assets/img/article/';
            $filename = str_random(6) . '_' . $file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $article->foto = $filename;
        }
        $article->save();
        $article->tag()->attach($request->tag);
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan data article berjudul <b>$article->judul</b>!"
        ]);
        return view('admin.article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $article = Article::findOrFail($id);
        $category = Category::all();
        $tag = Tag::all();
        $selected = $article->tag->pluck('id')->toArray();
        return view('admin.article.edit', compact('article', 'selected', 'category', 'tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
           $request->validate([
            'judul' => 'required|unique:articles',
            'konten' => 'required|min:50',
            'foto' => 'required|mimes:jpeg.jpg.png.gif|required|max:2048',
            'category_id' => 'required',
            'tag_id' => 'required']);
        $article = Article::findOrFail($id);
        $article->judul = $request->judul;
        $article->slug = str_slug($request->judul);
        $article->konten = $request->konten;
        $article->user_id = Auth::user()->id;
        $article->category_id = $request->category;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() . '/assets/img/article';
            $filename = str_random(6) . '_'
                . $file->getClientOriginalName();
            $uploadSuccess = $file->move(
                $path,
                $filename
            );
            // hapus foto lama jika ada
            if ($article->foto) {
                $old_foto = $article->foto;
                $filepath = public_path() .
                    '/assets/img//' .
                    $article->foto;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    // file sudah dihapus/tidak ada
                }
            }
            $article->foto = $filename;
        }
        $article->save();
        $article->tag()->sync($request->tag);
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil edit <b>"
                . $article->judul . "</b>"
        ]);
        return redirect()->route('article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article = Article::findOrFail($id);
        if ($article->foto) {
            $old_foto = $article->foto;
            $filepath = public_path() . '/assets/img/article/' . $article->foto;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) { }
        }
        $article->tag()->detach($article->id);
        $article->delete();
        Session::flash("flash_notification", [
            "level" => "danger",
            "message" => "Berhasil menghapus data article berjudul <b>$article->judul</b>!"
        ]);
        return redirect()->route('article.index');
    }
}
