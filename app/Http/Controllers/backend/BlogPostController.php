<?php

namespace App\Http\Controllers\backend;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class BlogPostController extends Controller
{
    public function AddPost(){
        return view('backend.blog.add_post');
    } // End method

    public function StorePost(Request $request){
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
        $post->post_title = $request->post_title;
        $post->post_slug = strtolower(str_replace(' ', '-', $request->post_title));
        $post->photo = $imagePath;
        $post->post_tags = $request->post_tags;
        $post->post_description = $request->post_description;
        $post->save();

        $notification = [
            'message' => 'BlogPost Posted Successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.post')->with($notification);
    }  // End method

    public function AllPost(){
        $posts = BlogPost::Latest()->get();
        return view('backend.blog.all_posts', compact('posts'));
    } // End method

    public function EditPost($id){
        $post = BlogPost::findOrFail($id);
        return view('backend.blog.edit_post', compact('post'));
    } // End method

    public function UpdatePost(Request $request){
        if($request->hasFile('post_photo')){
            $oldPostPhoto = BlogPost::find($request->id);
            unlink($oldPostPhoto->photo);

            $file = $request->file('post_photo');
            $imageName = 'post_'.hexdec(uniqid()).'.'.$file->getClientOriginalExtension();// work453rdfg-45.png
            $manager = new ImageManager(new Driver());
            $img = $manager->read($file);
            $img = $img->resize(409,368);
            $img = $img->toJpeg(80)->save(base_path('public/uploads/blog/'.$imageName));
            $imagePath = 'uploads/blog/'.$imageName;
    
            $post = BlogPost::find($request->id);
            $post->user_id = Auth::user()->id;
            $post->post_title = $request->post_title;
            $post->post_slug = strtolower(str_replace(' ', '-', $request->post_title));
            $post->photo = $imagePath;
            $post->post_tags = $request->post_tags;
            $post->post_description = $request->post_description;
            $post->save();
    
            $notification = [
                'message' => 'BlogPost Updated Successfully!',
                'alert-type' => 'info'
            ];
    
            return redirect()->route('all.post')->with($notification);
        }
    } // End method

    public function DeletePost($id){
        $oldPostPhoto = BlogPost::find($id);
        unlink($oldPostPhoto->photo);

        BlogPost::findOrFail($id)->delete();
        $notification = [
            'message' => 'BlogPost Deleted Successfully!',
            'alert-type' => 'info'
        ];
        return redirect()->back()->with($notification);
    } // End method
}
