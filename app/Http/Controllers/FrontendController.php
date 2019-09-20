<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Tag;
use App\Category;

class FrontendController extends Controller
{
    public function index()
    {
        $article = Article::with('category', 'tag', 'user')->take(1)->get();
        return view('frontend.index', compact('article'));
    }

    public function about(){
        return view('frontend.about');
    }

    public function services(){
        return view('frontend.services');
    }

    public function gallery(){
        return view('frontend.gallery');
    }

    public function allblog(Request $request)
    {
        $article = Article::with('category', 'tag', 'user')->get();
        $cari = $request->cari;
        if ($cari) {
            $article = Article::where('judul', 'LIKE', "%$cari%")->paginate(4);
        }
        return view('frontend.blog', compact('article'));
    }

    public function detailblog(Article $article){
        $category = Category::all();
        $tag = Tag::all();
        return view('frontend.single-blog', compact('article','category','tag'));
    }

    public function blogcat(Category $cat)
    {
        $tag = Tag::all();
        $article = $cat->article()->latest()->paginate(5);
        return view('frontend.blog', compact('article', 'cat', 'tag'));
    }
    public function blogtag(Tag $tag)
    {
        $category = Category::all();
        $article = $tag->article()->latest()->paginate(5);
        return view('frontend.blog', compact('article', 'category', 'tag'));
    }
}
