<?php

namespace App\Http\Controllers\backend;

use App\Models\SiteSettings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class SiteSettingsController extends Controller
{
    public function SiteSettings(){
        $sData = SiteSettings::find(1);
        return view('backend.setting.site_settings', compact('sData'));
    } // End method

    public function UpdateSiteSettings(Request $request){
       // 156 x 156
       if($request->hasFile('logo')){
            // Delete Old Logo
            $oldLogo = SiteSettings::find(1);
            if($oldLogo->logo){
                unlink($oldLogo->logo);
            }
            // Processing new Logo
            $file = $request->file('logo');
            $imageName = 'Logo_'.hexdec(uniqid()).'.'.$file->getClientOriginalExtension();// work453rdfg-45.png
            $manager = new ImageManager(new Driver());
            $img = $manager->read($file);
            $img = $img->resize(156,156);
            $img = $img->toJpeg(80)->save(base_path('public/uploads/logo/'.$imageName));
            $logoPath = 'uploads/logo/'.$imageName;

            SiteSettings::find(1)->update([
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                'logo' => $logoPath,
                'footer_note' => $request->footer_note,
            ]);

            $notification = [
                'message' => 'SiteSettings Updated With Logo Successfully!',
                'alert-type' => 'info'
            ];
            return redirect()->back()->with($notification);
       }

       SiteSettings::find(1)->update([
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'footer_note' => $request->footer_note,
        ]);

        $notification = [
            'message' => 'SiteSettings Updated Without Logo Successfully!',
            'alert-type' => 'info'
        ];
        return redirect()->back()->with($notification);
    } // End method
}
