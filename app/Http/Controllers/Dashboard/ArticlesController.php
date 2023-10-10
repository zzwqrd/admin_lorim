<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Asssss\StoreArticlesRequest;
use App\Models\Article;
use App\Models\Tag;
use Exception;
use Illuminate\Support\Facades\DB;

class ArticlesController extends Controller
{
    public function index()
    {
        $data = Article::get();
        return view('dashboard.articles.index', compact('data'));
    }

    public function create()
    {
        $tags = Tag::orderBy('id', 'desc')->get();
        return view('dashboard.articles.create', compact('tags'));
    }

    public function store(StoreArticlesRequest $request)
    {
        // $article = Article::create($request->all());
        // $article->tag()->sync((array)$request->input('tag'));
        // return redirect()->route('dashboard.articles.index');

        try {

            $article = Article::create($request->all());
            $article->tag()->sync((array) $request->input('tag'));

            return back()->with('success', trans('response.added'));

        } catch (Exception $e) {

            log_error();

            DB::rollBack();

            return back()->with('error', trans('response.failed'));
        }
    }

    public function edit($id)
    {
        $tags = Tag::orderBy('id', 'desc')->get();
        $data = Article::findOrFail($id);
        return view('dashboard.articles.edit', compact('data', 'tags'));
    }


    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return back()->with('success', trans('response.deleted'));
    }

}
