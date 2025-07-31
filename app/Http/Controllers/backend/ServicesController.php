<?php

namespace App\Http\Controllers\backend;

use Carbon\Carbon;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    public function AllServices(){
        $services = Service::latest()->get();
        return view('backend.services.all_services', compact('services'));
    } // End method

    public function AddService(){
        return view('backend.services.add_service');
    } // End method

    public function StoreService(Request $request){

        $service = new Service();
        $service->service_title = Str::replace('/','-', $request->service_title);
        $service->service_description = $request->service_description;
        $service->created_at = Carbon::now();
        $service->save();

        $notification = [
            'message' => 'Service Added Successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.services')->with($notification);
    } // End method

    public function EditService($id){
        $service = Service::findOrFail($id);
        return view('backend.services.edit_service', compact('service'));
    } // End method

    public function UpdateService(Request $request){
        $service_id = $request->service_id;
        $service = Service::findOrFail($service_id);
        $service->service_title = Str::replace('/','-', $request->service_title);
        $service->service_description = $request->service_description;
        $service->updated_at = Carbon::now();
        $service->save();

        $notification = [
            'message' => 'Service Updated Successfully!',
            'alert-type' => 'info'
        ];

        return redirect()->route('all.services')->with($notification);
    } // End method

    public function DeleteService($id){
        Service::findOrFail($id)->delete();
        $notification = [
            'message' => 'Service Deleted Successfully!',
            'alert-type' => 'info'
        ];

        return redirect()->back()->with($notification);
    } // End method

}
