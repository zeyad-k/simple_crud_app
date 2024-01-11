<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPost(Request $request)
    {
        $incomingFields = $request->validate([
            'post_title' => ['required'],
            'post_body' => ['required'],
        ]);
        $incomingFields['post_title'] = strip_tags($incomingFields['post_title']);
        $incomingFields['post_body'] = strip_tags($incomingFields['post_body']);
        $incomingFields['user_id'] = auth()->id(); // مهم عشان ده اللي هيربط الداتا بيز ببعض و كمان هنل هو بيقرأ ال id بتاع اليوزر و بحطه
        Post::create($incomingFields);
        return redirect('/');
    }

    //     public function createPost(Request $request)
//     {
// $incomingFields = $request->validate([
//     ''=>[''],
// ]);
//     }
}
