<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show', 'allarticle');
    }
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $articles = Article::all();
    //     return view('article.index', compact('articles'));

    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');

    }

    

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    public function allarticle()
    {
        $articles = Article::where('is_accepted', true)->paginate(12);
        return view('article.allarticle', compact('articles'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
