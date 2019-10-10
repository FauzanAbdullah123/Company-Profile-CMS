<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Tag;
use App\Category;
use App\Service;
use App\Catservice;
use App\OtherService;
use App\Gallery;
use App\About;
use App\Platforms;
use App\PositionAvailable;

class FrontendController extends Controller
{
    public function index(Request $request)
    {
        $article = Article::take(1)->get();
        return view('frontend.index', compact('article'));
    }

    public function about(Request $request){
        $about = About::all();
        return view('frontend.about', compact('about'));
    }

    public function service(Request $request){
        $service = Service::all();
        $otherservice = OtherService::all();
        return view('frontend.services', compact('service', 'otherservice'));
    }

    public function gallery(Request $request){
        $gallery = Gallery::paginate(12);
        return view('frontend.gallery', compact('gallery'));
    }

    public function career(Request $request){
        $positionavailable = PositionAvailable::all();
        $platforms = Platforms::all();
        return view('frontend.career', compact('positionavailable', 'platforms'));
    }

    public function allblog(Request $request)
    {
        $article = Article::with('category', 'tag', 'user')->paginate(5);
        $cari = $request->cari;
        if ($cari) {
            $article = Article::where('judul', 'LIKE', "%$cari%")->paginate(4);
            if ($article->count()==0){
                return view('errors.404cari');
            }
        }
        return view('frontend.blog', compact('article'));
    }

    public function detailcatservice(Catservice $catservice){
        $otherservice = OtherService::all();
        $service = $catservice->service()->latest()->paginate(200);
        return view('frontend.services', compact('service', 'catservice', 'otherservice'));
    }
    public function detailotherservice(OtherService $otherservice){
        return view('frontend.other-service', compact('otherservice'));
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
