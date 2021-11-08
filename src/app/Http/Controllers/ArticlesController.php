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

    public function allList()
    {
        return [
            ['id'=>1,'title'=>'articles1','content'=>'content1'],
            ['id'=>2,'title'=>'articles2','content'=>'content2'],
            ['id'=>3,'title'=>'articles3','content'=>'content3'],
        ];
    }
}
