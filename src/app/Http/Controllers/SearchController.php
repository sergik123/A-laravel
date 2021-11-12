<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Cache\Repository;
use Illuminate\Http\Request;


class SearchController extends Controller
{
    public $repository;
    public function __construct(UserRepository $repository)
    {
        $this->repository=$repository;
    }
    public function search(Request $request)
    {

        $search=$request->get('q');
        //$article=new ArticlesController();
        $item=$this->repository->getByFilter('title',$search);

        if($item){
            return $item;
        }else{
            return 'error';
        }

    }
}
