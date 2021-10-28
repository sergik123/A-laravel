<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;

class UserController extends Controller
{
    private $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository=$userRepository;
    }

    public function user(UserRepository $userRepository, $id){
        $user=$this->userRepository->getbyId($id);
        return $user ? $user['username'] : 'User not found';    
    }

    
    
}
