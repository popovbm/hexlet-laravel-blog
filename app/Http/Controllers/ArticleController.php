<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use PhpParser\Node\Arg;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::paginate();

        return view('article.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('article.show', compact('article'));
    }

    public function create()
    {
        $article = new Article();
        return view('article.create', compact('article'));
    }

    public function store(StoreArticleRequest $request)
    {
        $data = $request->validated();

        $article = new Article();
        $article->fill($data);
        $article->save();

        return redirect()
            ->route('articles.index')->with('message', 'Article created successfully');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('article.edit', compact('article'));
    }

    public function update(UpdateArticleRequest $request, $id)
    {
        $article = Article::findOrFail($id);
        $data = $request->validated();

        $article->fill($data);
        $article->save();
        return redirect()
            ->route('articles.index')->with('message', 'Article updated successfully');
    }

    public function destroy($id)
    {
        dd(1);
        $article = Article::find($id);
        if ($article) {
            $article->delete();
        }
        return redirect()->route('articles.index');
    }
}
