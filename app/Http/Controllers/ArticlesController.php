<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use Carbon\Carbon;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\ViewErrorBag;
use Illuminate\Support\Facades\Auth;

Carbon::setLocale('fr');

class ArticlesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $user = Auth::user()->id;
        $articles = Article::latest('published_at')->published()->where('user_id',$user)->get();
        $page='Articles';

        return view('articles.index',compact('articles','page'));
    }


    /**
     * @param Article $article
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Article $article)
    {
        $page=$article->title;

        return view('articles.show', compact('article','page'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $page='New Article';
        return view('articles.create',compact('page'));
    }


    /**
     * @param ArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ArticleRequest $request)
    {
        Auth::user()->articles()->create($request->all());

        session()->flash('flash_message','Votre article a bien été enregistré');

        return redirect('articles');
    }


    /**
     * @param Article $article
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Article $article)
    {
        $page='Modifier';
        return view('articles.edit', compact('article','page'));
    }


    /**
     * @param Article $article
     * @param ArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Article $article, ArticleRequest $request)
    {
        $article->update( $request->all());

        return redirect('articles');
    }
}

