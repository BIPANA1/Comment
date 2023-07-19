<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function addComment(Request $request)
    {
        $comment = new Comment();
        $comment->message = $request->message;
        $comment->name = $request->name;
        $comment->email = $request->email;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalName();
            $file->move(public_path('Image/'), $filename);
        }
        $comment->image = 'Image/' . $filename;
        $comment->date = $request->date;
        $comment->save();
        return redirect()->back();
    }
    public function delete($id)
    {
        $data = Comment::where('id', $id)->first();
        $data->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $comment = Comment::find($id);
        return view('edit',compact('comment'));
    }

    public function update($id, Request $request)
    {
        $comment= Comment::find($id);
        $comment->message = $request->message;
        $comment->name = $request->name;
        $comment->email = $request->email;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalName();
            $file->move(public_path('Image/'), $filename);
            $comment->image = 'Image/' . $filename;
        }
       
        $comment->date = $request->date;
        $comment->update();
        return redirect('/');
    
    }
}
