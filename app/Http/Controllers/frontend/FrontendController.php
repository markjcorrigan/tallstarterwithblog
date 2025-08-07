<?php

namespace App\Http\Controllers\frontend;

use App\Models\Comment;
use App\Models\Contact;
use App\Models\BlogPost;
use App\Models\Document;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

use phpDocumentor\Reflection\Types\Void_;

class FrontendController extends Controller
{
//    public function homepage(){
//        return view('frontend.homepage');
//    } // End method
    public function blog()
    {
        // Your blog logic here

        $posts = BlogPost::latest()->get();
//        dd($posts); // This will dump the posts and exit the script
        return view('frontend.blogpage', compact('posts'));
    }
//    public function blog(): View
//    {
//        return view('frontend.blogpage'); // or any other view you want to display
//    }

//    public function blog()
//    {
//        return view('frontend.blogpage');
//    }




    public function portfolio(): View
    {
        return view('frontend.portfoliopage'); // or any other view you want to display
    }

    public function pmwayguest(): View
    {
        return view('pmway');
    }

    public function pmwayauth(): View
    {
        return view('pmway');
    }



//
//    public function BlogDetails($slug){
//        $post = BlogPost::where('post_slug', $slug)->first();
//        $rposts =  BlogPost::Latest()->limit(3)->get();
//        return view('frontend.blog.post_details', compact('post', 'rposts'));
//    } // End method

    public function BlogDetails($slug)
    {
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

    public function StoreContactMessage(Request $request)
    {
        $message = new Contact();
        $message->first_name = $request->fname;
        $message->last_name = $request->lname;
        $message->email = $request->email;
        $message->phone = $request->phone;
        $message->service_id = $request->service_id;
//        $message->description = $request->desription;  This came from the original code
        $message->description = $request->description;
        $message->save();

        $notification = [
            'message' => 'Your Message has been received! I will get back to you soon.',
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);
    } // End method


    public function uploads()
    {
        $documents = Document::all();
        return view('documents.uploads', compact('documents'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'document' => 'required|file|mimes:pdf,docx,doc|max:204800', // 200MB
        ]);


        $file = $request->file('document');
        $filePath = $file->store('documents', 'public');
        $fileName = $file->getClientOriginalName();
        $shortName = substr(preg_replace('/[\(\[].*?[\)\]]/', '', str_replace(' ', '', $fileName)), 0, 30);

        Document::create([
            'name' => $fileName,
            'shortname' => $shortName,
            'path' => $filePath,
        ]);

        return back()->with('success', 'File uploaded successfully!');
    }



    public function downloadById($id) {
        $document = Document::find($id);
        if (!$document) {
            abort(404);
        }
        return Storage::download($document->path);
    }

    public function downloadByShortName($shortname)
    {
        $document = Document::where('shortname', $shortname)->first();
        if (!$document) {
            abort(404);
        }

        if (!Storage::disk('public')->exists($document->path)) {
            abort(404);
        }

        return Storage::disk('public')->download($document->path);
    }



    public function documents(Request $request)
    {
        $query = $request->input('query');
        $documents = Document::where('name', 'like', '%' . $query . '%')
            ->orWhere('path', 'like', '%' . $query . '%')
            ->get();

        if (!$query) {
            $documents = Document::all();
        }

        return view('documents', compact('documents', 'query'));
    }

    public function destroy($id)
    {
        $document = Document::find($id);
        if ($document) {
            $filename = basename($document->path);
            Storage::disk('public')->delete('Documents/' . $filename);
            $document->delete();
            return redirect()->route('uploads')->with('success', 'Document deleted successfully!');
        }
        return redirect()->route('uploads')->with('error', 'Document not found!');
    }




    public function edit($id)
    {
        $document = Document::find($id);
        if ($document) {
            return view('documents.edit', compact('document'));
        }
        return back()->with('error', 'Document not found!');
    }



    public function update(Request $request, $id)
    {
        $document = Document::find($id);
        if ($document) {
            $request->validate([
                'name' => 'required',
                'shortname' => 'required',
            ]);

            $oldFilename = basename($document->path);
            $newFilename = $request->name . '.' . pathinfo($oldFilename, PATHINFO_EXTENSION);

            Storage::disk('public')->move('Documents/' . $oldFilename, 'Documents/' . $newFilename);
            $document->path = 'Documents/' . $newFilename;
            $document->name = $request->name;
            $document->shortname = $request->shortname;

            $document->save();
            return redirect()->route('uploads')->with('success', 'Document updated successfully!');
        }
        return redirect()->route('uploads')->with('error', 'Document not found!');
    }

}

