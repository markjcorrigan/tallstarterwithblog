<?php

namespace App\Http\Controllers\backend;

use App\Models\BlogPost;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Cache;




class BlogPostController extends Controller
{

    public function AddPost(){
//        Gate::authorize('is-super-admin');
        return view('backend.blog.add_post');
    } // End method

    public function StorePost(Request $request){
//        if (!Gate::allows('is-super-admin')) {
//            abort(403, 'Unauthorized action.');
//        }

        $validatedData = $request->validate([
            'post_title' => 'required|string|max:255',
            'post_tags' => 'required|string',
            'post_description' => 'required|string',
            'post_photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        // 409 x 368
        $file = $request->file('post_photo');
        $imageName = 'post_'.hexdec(uniqid()).'.'.$file->getClientOriginalExtension();// work453rdfg-45.png
        $manager = new ImageManager(new Driver());
        $img = $manager->read($file);
        $img = $img->resize(409,368);
        $img = $img->toJpeg(80)->save(base_path('public/uploads/blog/'.$imageName));
        $imagePath = 'uploads/blog/'.$imageName;

        $post = new BlogPost();
        $post->user_id = Auth::user()->id;
        $post->post_title = $validatedData['post_title'];
        $post->post_slug = strtolower(str_replace(' ', '-', $validatedData['post_title']));
        $post->photo = $imagePath;
        $post->post_tags = $validatedData['post_tags'];
        $post->post_description = $validatedData['post_description'];
        $post->save();

        $notification = [
            'message' => 'BlogPost Posted Successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.post')->with($notification);
    } // End method

//    public function showFirstPost()
//    {
//        $firstPost = BlogPost::all()->first();
////dd($firstPost);
//        if ($firstPost) {
//            return redirect()->to('/post/details/' . $firstPost->post_slug);
//        } else {
//            return response()->view('errors.no-blogs-found');
//        }
//    }





    public function AllPost(){
//        Gate::authorize('is-super-admin');
        $posts = BlogPost::with('author')->Latest()->get();
        return view('backend.blog.all_posts', compact('posts'));
    }


    public function EditPost($id){
//        Gate::authorize('is-super-admin');
        $post = BlogPost::findOrFail($id);
        return view('backend.blog.edit_post', compact('post'));
    } // End method


    public function UpdatePost(Request $request, $id){
//        if (!Gate::allows('is-super-admin')) {
//            abort(403, 'Unauthorized action.');
//        }

        $validatedData = $request->validate([
            'post_title' => 'required|string|max:255',
            'post_tags' => 'required|string',
            'post_description' => 'required|string',
            'post_photo' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $post = BlogPost::find($request->id);

        if($request->hasFile('post_photo')){
            // Delete the old photo
            if ($post->photo) {
                unlink(public_path($post->photo));
            }

            // Upload the new photo
            $file = $request->file('post_photo');
            $imageName = 'post_'.hexdec(uniqid()).'.'.$file->getClientOriginalExtension();
            $manager = new ImageManager(new Driver());
            $img = $manager->read($file);
            $img = $img->resize(409,368);
            $img = $img->toJpeg(80)->save(base_path('public/uploads/blog/'.$imageName));
            $imagePath = 'uploads/blog/'.$imageName;
            $post->photo = $imagePath;
        }

        $post->user_id = Auth::user()->id;
        $post->post_title = $validatedData['post_title'];
        $post->post_slug = strtolower(str_replace(' ', '-', $validatedData['post_title']));
        $post->post_tags = $validatedData['post_tags'];
        $post->post_description = $validatedData['post_description'];
        $post->save();

        $notification = [
            'message' => 'BlogPost Updated Successfully!',
            'alert-type' => 'info'
        ];

        return redirect()->route('all.post')->with($notification);
    } // End method





    public function DeletePost($id){
//        Gate::authorize('is-super-admin');
        $oldPostPhoto = BlogPost::find($id);
        unlink($oldPostPhoto->photo);

        BlogPost::findOrFail($id)->delete();
        $notification = [
            'message' => 'BlogPost Deleted Successfully!',
            'alert-type' => 'info'
        ];
        return redirect()->back()->with($notification);
    } // End method

//    public function approve(BlogPost $blogPost)
//    {
//        $blogPost->update(['approved' => true]);
//
//        return redirect()->route('all-post')->with('success', 'Blog post approved successfully');
//    }

    public function updatePostStatus(Request $request)
    {
        $post = BlogPost::find($request->post_id);
        $post->approved = $request->approved;
        $post->save();

        // Forget the cache for approved posts
        Cache::forget('approved_posts');

        return response()->json(['status' => 200, 'message' => 'Post status updated successfully']);
    }



}
