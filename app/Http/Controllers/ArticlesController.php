<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show($articleId) {
        $article = Article::where('id',$articleId)->firstOrFail();
        return view('articles.show',['article'  => $article]);
    }
}
