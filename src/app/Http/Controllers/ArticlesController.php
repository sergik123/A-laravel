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

    public function allList()
    {
        return [
            ['id'=>1,'title'=>'articles1','content'=>'content1'],
            ['id'=>2,'title'=>'articles2','content'=>'content2'],
            ['id'=>3,'title'=>'articles3','content'=>'content3'],
            ['id'=>4,'title'=>'articles4','content'=>'content4'],
            ['id'=>5,'title'=>'articles5','content'=>'content5'],
            ['id'=>6,'title'=>'articles6','content'=>'content6'],
            ['id'=>7,'title'=>'articles7','content'=>'content7'],
            ['id'=>8,'title'=>'articles8','content'=>'content8'],
            ['id'=>9,'title'=>'articles9','content'=>'content9'],
            ['id'=>10,'title'=>'articles10','content'=>'content10'],
            ['id'=>11,'title'=>'articles11','content'=>'content11'],
            ['id'=>12,'title'=>'articles12','content'=>'content12'],
            ['id'=>13,'title'=>'articles13','content'=>'content13'],
            ['id'=>14,'title'=>'articles14','content'=>'content14'],
            ['id'=>15,'title'=>'articles15','content'=>'content15'],
            ['id'=>16,'title'=>'articles16','content'=>'content16'],
            ['id'=>17,'title'=>'articles17','content'=>'content17'],
            ['id'=>18,'title'=>'articles18','content'=>'content18'],
        ];
    }
}
