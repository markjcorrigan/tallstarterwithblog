<?php

namespace App\Http\Controllers\frontend;

use App\Models\Comment;
use App\Models\Contact;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
//    public function homepage(){
//        return view('frontend.homepage');
//    } // End method
//    public function blog()
//    {
//        // Your blog logic here
//        $posts = BlogPost::latest()->get(); // Fetch blog posts
//        return view('frontend.homepage', compact('posts'));
//
//    }
    public function blog()
    {
     return view('frontend.homepage'); // or any other view you want to display
//        return view('frontend.test');

    }

//
//    public function BlogDetails($slug){
//        $post = BlogPost::where('post_slug', $slug)->first();
//        $rposts =  BlogPost::Latest()->limit(3)->get();
//        return view('frontend.blog.post_details', compact('post', 'rposts'));
//    } // End method

    public function BlogDetails($slug){
        $post = BlogPost::where('post_slug', $slug)->first();
        if (!$post) {
            abort(404);
        }
        $rposts = BlogPost::Latest()->limit(3)->get();
        $comments = Comment::where('post_id', $post->id)->where('status', 1)->get();
        return view('frontend.blog.post_details', compact('post', 'rposts', 'comments'));
    }


    public function StoreComment(Request $request)
    {
        $request->validate([
            'post_id' => 'required|exists:blog_posts,id',
            'name' => 'required|string',
            'user_email' => 'required|email',
            'comment' => 'required|string',
        ]);

        $comment = new Comment();
        $comment->post_id = $request->post_id;
        $comment->user_name = $request->name;
        $comment->user_email = $request->user_email;
        $comment->comment = $request->comment;
        $comment->save();

        $notification = [
            'message' => 'Comment Posted! Waiting For Approval.',
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);
    }



//    public function StoreComment(Request $request){
//
//        $comment = new Comment();
//        $comment->post_id = $request->post_id;
//        $comment->user_name = $request->name;
//        $comment->user_email = $request->user_email;
//        $comment->comment = $request->comment;
//        $comment->save();
//
//        $notification = [
//            'message' => 'Comment Posted! Waiting For Approval.',
//            'alert-type' => 'success'
//        ];
//
//        return redirect()->back()->with($notification);
//    } // End method

    public function StoreContactMessage(Request $request){
        $message = new Contact();
        $message->first_name = $request->fname;
        $message->last_name = $request->lname;
        $message->email = $request->email;
        $message->phone = $request->phone;
        $message->service_id = $request->service_id;
        $message->description = $request->desription;
        $message->save();

        $notification = [
            'message' => 'Your Message has been received! I will get back to you soon.',
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);
    } // End method
}
