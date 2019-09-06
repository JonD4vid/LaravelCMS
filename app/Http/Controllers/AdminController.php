<?php

namespace App\Http\Controllers;
use App\Post;

class AdminController extends Controller{

    public function getIndex(){

        //Fetch Posts & Messages
            $posts = Post::orderBy('created_at', 'desc')->take(3)->get();
        return view('admin.index', ['posts' => $posts ]);
    }
}
