<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public $repository;
    public function __construct(UserRepository $repository)
    {
        $this->repository=$repository;
    }

    public function list()
    {
        return view('articles.list',['items'=>$this->repository->allPosts()]);
    }

    public function item($id)
    {
        $item=$this->repository->getByFilter('id',$id);
        return view('articles.item', ['article'=>$item]);
    }

    public function searchPost(Request $request)
    {
        $search=$request->get('q');
        $item=$this->repository->getByFilter('title',$search);
        if($item){
            return $item;
        }else{
            return 'error';
        }
    }

}
