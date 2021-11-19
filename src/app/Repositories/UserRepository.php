<?php

namespace App\Repositories;

use App\Article;
use App\Comment;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class UserRepository
{
    public function allPosts()
    {
        return Article::all();
    }

    public function getByFilter($filter = 'id', $val)
    {
        $articles = Article::all();
        foreach ($articles as $post) {
            if ($post[$filter] == $val) {
                return $post;
            }
        }
        return null;
    }

    public function commentById($id)
    {
        $comments = Comment::where('article_id',$id)->get();
        if (isset($comments)) {
            return $comments;
        } else {
            return 'no comments';
        }
    }

}
