<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {

        $search=$request->get('q');
        $article=new ArticlesController();
        $item=$article->articleId($search);

        if($item){
            return $item;
        }else{
            return 'error';
        }

    }
}
