<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use Carbon\Carbon;
//use Request;

class ArticlesController extends Controller
{
    public function index()
    {
        //return \Auth::user()->username;
        //return 'get all articles';
        //$articles = Article::all();
        //$articles = Article::latest('published_at')->get();
        //$articles = Article::latest('published_at')->where('published_at', '<=', Carbon::now())->get();
        $articles = Article::latest('published_at')->published()->get();
        //return $articles->toArray();
        //return $articles;
        return view('articles.index', compact('articles'));
        //return view('articles.index')->with('articles',$articles);
    }

    public function show($id)
    {
        //return $id;
        //$article = Article::find($id);
        //return $article;
        /*if (is_null($article)) {
            abort(404);
        }*/
        $article = Article::findOrFail($id);
        //dd($article->published_at);
        //dd($article->created_at);
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        // 'hello';
        return view('articles.create');
    }

    public function store(\App\Http\Requests\ArticleRequest $request)
    {
        //return 'hello';
        //$input = Request::all();
        //$input['published_at'] = Carbon::now();

//        $article = new Article;
//        $article->title = $input['title'];
//        $article->body = $input['body'];
//        return $article;

        //$article = new Article(['title' => $input['title'], 'body' => $input['body']]);
        //return $article;

        //Article::create($input);
        //Article::create(Request::all());
        //Article::create($request->all());
        $article = new Article($request->all());
        \Auth::user()->articles()->save($article);
        //return Article::all();
        return redirect('articles');

        //return $input;
    }

    /*public function store(\Illuminate\Http\Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:3',
            'body' => 'required',
            'published_at' => 'required|date'
        ]);

        Article::create($request->all());

        return redirect('articles');
    }*/

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit',compact('article'));
    }

    /*public  function update($id, \Illuminate\Http\Request $request)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('articles');
    }*/

    public  function update($id, \App\Http\Requests\ArticleRequest $request)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('articles');
    }
}
