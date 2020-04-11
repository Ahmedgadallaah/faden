<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\ServiceDetails;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();
class ServiceController extends Controller
{

    public function index()
    {
        $services = Service::paginate(10);

        return view('admin.services.index',compact('services'));
    }
    public function create()
    {
        return view('admin.services.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'en_name' => ['required', 'string' ],
            'ar_name' => ['required', 'string' ],
            'en_description' => ['required', 'string', 'max:191'],
            'ar_description' => ['required', 'string', 'max:191'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
            ]);
        $service_data = [
	        'en' => ['name'=> $request->input('en_name'),'description'=> $request->input('en_description')],
            'ar' => [ 'name' => $request->input('ar_name'), 'description' => $request->input('ar_description'),],
            'online' => 1
        ];
        $image = $request->file('image');

        if ($image) {
            $request->image->store('service');
            $service_data['image'] =$request->image->hashName();
        }        

        $service = Service::create($service_data);
        if($service){
            $images = $request->file('images');
        
            for($i=0 ; $i < sizeof($images) ; $i++){
                //Create new image model
                $image = new ServiceDetails();

                $images[$i]->store('service');
                $image->images = $images[$i]->hashName();
                $image->detail_Id = $service->id;

                $image->save();
            }
        }
        
        
        return Redirect::to('admin/service/'); 
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
    
        $service = Service::findOrFail($id);
        //dd($images);
        return view('admin.services.image',compact('service'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
            $service = Service::find($id);
            return view('admin.services.edit', compact('service','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



public function update(Request $request ,$id)
     {   
         $service= Service::findOrFail($id);

         $this->validate($request, [
            'en_name' => ['required', 'string', 'max:50'],
            'ar_name' => ['required', 'string', 'max:50'],
            'en_description' => ['required', 'string', 'max:191'],
            'ar_description' => ['required', 'string', 'max:191'],
            //'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ]);

         $service_data = [
	        'en' => ['name'=> $request->input('en_name'),'description'=> $request->input('en_description')],
            'ar' => [ 'name' => $request->input('ar_name'), 'description' => $request->input('ar_description'),],
	        'online' => 1
	    ];
    	$image = $request->has('image');
	    if ($image) {
	        @unlink(storage_path('app/service/'.$service->image));
	        $request->image->store('service');
	        $service_data['image'] =$request->image->hashName();
	    }        

	    if($service->update($service_data)){
	        
	        $images = $request->has('images');
	    	
	    	if($images){
		        foreach($service->serviceDetails as $image){
		        	@unlink(storage_path('app/service/'.$image->images));
					$image->delete();
		        }
		    
		    $images = $request->file('images');
		    
	    		for($i=0 ; $i < sizeof($images) ; $i++){

		            //Create new image model
		            $image = new ServiceDetails();
		            
		            @unlink(storage_path('app/service/'.$service->images));
		            $images[$i]->store('service');
		            $image->images = $images[$i]->hashName();
		            $image->detail_Id = $service->id;

		            $image->save();
		        }	
	    	}

	    	
        }
        
        Session::put('message', 'service Updated Successfully !!');
        return Redirect::to('admin/service/');
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        foreach($service->serviceDetails as $image){
            @unlink(storage_path('app/service/'.$image->images));
            $image->delete();
        } 
        $service->delete();
        return redirect()->back();
    }
    public function InActive($id)
    {
        $service = Service::find($id)->update(['online' => 0]);
        Session::put('message', 'service Activated Successfully !!');
        return Redirect::to('/admin/service');
    }

    public function Active($id)
    {
        $service = Service::find($id)->update(['online' => 1]);
        Session::put('message', 'service Activated Successfully !!');
        return Redirect::to('/admin/service');
    }
}
