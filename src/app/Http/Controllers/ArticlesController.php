<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public $items;
    public function __construct()
    {
        $this->items=$this->allList();
    }

    public function list()
    {
        return view('articles.list',['items'=>$this->items]);
    }

    public function item($id)
    {
        $list=$this->allList();
        foreach ($list as $item)
        {
            if($item['id']==$id)
            {
                return view('articles.item',
                    ['article'=>$item]);
            }
        }
        return 'articles not found';
    }

    public function articleId($title)
    {
        $article=$this->allList();

        foreach ($article as $item)
        {
            if($item['title']==$title){
                return ['items'=>$item];
            }
        }
        return 'article not found';
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
