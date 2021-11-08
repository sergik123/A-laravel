<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
       // dd($request);
        $search=$request->get('q');
        $article=new ArticlesController();
        $item=$article->articleId($search);
        return view('articles.list',['items'=>$item]);
    }
}
