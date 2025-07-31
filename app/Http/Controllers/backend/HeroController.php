<?php

namespace App\Http\Controllers\backend;

use Carbon\Carbon;
use App\Models\Hero;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class HeroController extends Controller
{
    public function HeroSection(){
        $hero = Hero::find(1);
        return view('backend.hero.here_section', compact('hero'));
    } // End method

    public function UpdateHeroSection(Request $request){

        if($request->hasFile('photo')){

            $oldPhoto = Hero::find(1);
            unlink($oldPhoto->photo);

            $file = $request->file('photo');
            $imageName = 'Hero-'.hexdec(uniqid()).'.'.$file->getClientOriginalExtension();// Hero-453rdfg45.png
            $manager = new ImageManager(new Driver());
            $img = $manager->read($file);
            $img = $img->resize(437,475);
            $img = $img->toJpeg(80)->save(base_path('public/uploads/hero/'.$imageName));
            $imagePath = 'uploads/hero/'.$imageName;

            Hero::find(1)->update([
                'name' => $request->name,
                'profession' => $request->profession,
                'short_description' => $request->short_description,
                'photo' => $imagePath,
                'twitter_url' => $request->twitter_url,
                'youtube_url' => $request->youtube_url,
                'linkin_url' => $request->linkin_url,
                'github_url' => $request->github_url,
                'YOE' => $request->YOE,
                'PC' => $request->PC,
                'HC' => $request->HC,
                'updated_at' => Carbon::now()
            ]);

            $notification = [
                'message' => 'Hero-Section Updated With Photo Successfully!',
                'alert-type' => 'success'
            ];

            if(!$request->hasFile('resume')){
                return redirect()->back()->with($notification);
            }
            
        } elseif($request->hasFile('resume')){

            $oldResume = Hero::find(1);
            unlink($oldResume->resume);

            $resume = $request->file('resume');
            $resumeNewName = 'Resume_'.hexdec(uniqid()).'.'.$resume->getClientOriginalExtension();
            $resume->move(public_path('uploads/resume'), $resumeNewName);
            $resumePath = 'uploads/resume/'.$resumeNewName;

            Hero::find(1)->update([
                'name' => $request->name,
                'profession' => $request->profession,
                'short_description' => $request->short_description,
                'resume' => $resumePath,
                'twitter_url' => $request->twitter_url,
                'youtube_url' => $request->youtube_url,
                'linkin_url' => $request->linkin_url,
                'github_url' => $request->github_url,
                'YOE' => $request->YOE,
                'PC' => $request->PC,
                'HC' => $request->HC,
                'updated_at' => Carbon::now()
            ]);

            $notification = [
                'message' => 'Hero-Section Updated With Resume Successfully!',
                'alert-type' => 'success'
            ];

            return redirect()->back()->with($notification);
        }

        Hero::find(1)->update([
            'name' => $request->name,
            'profession' => $request->profession,
            'short_description' => $request->short_description,
            'twitter_url' => $request->twitter_url,
            'youtube_url' => $request->youtube_url,
            'linkin_url' => $request->linkin_url,
            'github_url' => $request->github_url,
            'YOE' => $request->YOE,
            'PC' => $request->PC,
            'HC' => $request->HC,
            'updated_at' => Carbon::now()
        ]);

        $notification = [
            'message' => 'Hero-Section Updated Without Photo or Resume Successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);

    } // End method
}
