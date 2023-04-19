<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function storecomment(Request $request,$id)
    {
        try
        {
            // $validated = $request->validate ([
            //                                     'fname' => 'required|string',
            //                                     'lname' => 'required|string',
            //                                     'comment' => 'required|string',
            //                                     'email' =>  'regex:/^\S+@\S+\.\S+$/',
            //                                 ]);

            $comment = new Comment();
            $comment-> fname = $request->fname;
            $comment-> lname = $request->lname;
            $comment-> email = $request->email;
            $comment-> comment = $request->comment;
            $comment-> blog_id = $id;
            $comment->save();
        
            return redirect()->back();

        }

        catch (\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
