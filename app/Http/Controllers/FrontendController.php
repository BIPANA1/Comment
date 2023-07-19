<?php

namespace App\Http\Controllers;
use App\Models\Comment;


class FrontendController extends Controller
{
    public function welcome(){
        $comments = Comment::all();
        return view('welcome', compact('comments'));
    }

}
