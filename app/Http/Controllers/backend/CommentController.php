<?php

namespace App\Http\Controllers\backend;

use App\Models\Comment;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function UserComments(){
        $comments = Comment::with('post')->get();
        return view('backend.comment.comments', compact('comments'));
    } // End method

//    public function UserComments(){
//        $comments = Comment::all();
//        return view('backend.comment.comments', compact('comments'));
//    } // End method

    public function CommentStatusUpdate(Request $request){
        $comment_id = $request->input('comment_id');
        $comment_status = $request->input('status', 0);
        $comment = Comment::find($comment_id);
        if($comment){
            $comment->status = $comment_status;
            $comment->save();
        }
        return response()->json(['status' => 200]);
    } // End method


    public function ContactMessage(){
        $contactMessages = Contact::Latest()->get();
        return view('backend.contact.all_contact_messages', compact('contactMessages'));
    } // End method

    public function DeleteContact($id){
        Contact::findOrFail($id)->delete();
        $notification = [
            'message' => 'Contact Message Deleted Successfully!',
            'alert-type' => 'info'
        ];

        return redirect()->back()->with($notification);
    } // End method

}
