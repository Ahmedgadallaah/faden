<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\EventDetails;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();
class EventController extends Controller
{
    public function index()
    {
        $events = Event::paginate(10);

        return view('admin.events.index',compact('events'));
    }
   
    public function create()
    {
        return view('admin.events.create');
    }
    public function store(Request $request)
    {

        $this->validate($request, [

            'en_name' => ['required', 'string', 'max:50'],
            'ar_name' => ['required', 'string', 'max:50'],
            // 'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ]);
         //   dd($request);
        // $event = new Event();   
        $event_data = [
            'en' => ['name'=> $request->input('en_name')],
            'ar' => [ 'name' => $request->input('ar_name'),],
            'online' => 1
        ];
        $image = $request->file('image');

        if ($image) {
            $request->image->store('event');
            $event_data['image'] =$request->image->hashName();
        }        

        $event = Event::create($event_data);
        if($event){
            $images = $request->file('images');
        
            for($i=0 ; $i < sizeof($images) ; $i++){
                //Create new image model
                $image = new EventDetails();

                $images[$i]->store('event');
                $image->images = $images[$i]->hashName();
                $image->detail_Id = $event->id;

                $image->save();
            }
        }
        
        
        return Redirect::to('admin/event/'); 
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
    
        $event = Event::findOrFail($id);
        //dd($images);
        return view('admin.events.image',compact('event'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
            $event = Event::find($id);
            return view('admin.events.edit', compact('event','id'));
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
         $event= Event::findOrFail($id);

         $this->validate($request, [

            'en_name' => ['required', 'string', 'max:50'],
            'ar_name' => ['required', 'string', 'max:50'],
            // 'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
            
        ]);

         $event_data = [
	        'en' => ['name'=> $request->input('en_name')],
	        'ar' => [ 'name' => $request->input('ar_name'),],
	        'online' => 1
	    ];
    	$image = $request->file('image');

	    if ($image) {
	        @unlink(storage_path('app/event/'.$event->image));
	        $request->image->store('event');
	        $event_data['image'] =$request->image->hashName();
	    }        

	    if($event->update($event_data)){
	        
	        $images = $request->file('images');
	    	
	    	if($images){
		        foreach($event->eventDetails as $image){
		        	@unlink(storage_path('app/event/'.$image->images));
					$image->delete();
		        }
		    
	    		for($i=0 ; $i < sizeof($images) ; $i++){

		            //Create new image model
		            $image = new EventDetails();
		            
		            @unlink(storage_path('app/event/'.$event->images));
		            $images[$i]->store('event');
		            $image->images = $images[$i]->hashName();
		            $image->detail_Id = $event->id;

		            $image->save();
		        }	
	    	}

	    	return Redirect::to('admin/event'); 
	    }
	}




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        foreach($event->eventDetails as $image){
        @unlink(storage_path('app/event/'.$image->images));
$image->delete();
        } 
        $event->delete();
        return Redirect::to('admin/event'); 
    }
    public function InActive($id)
    {
        $event = Event::find($id)->update(['online' => 0]);
        Session::put('message', 'event Activated Successfully !!');
        return Redirect::to('/admin/event');
    }

    public function Active($id)
    {
        
        $event = Event::find($id)->update(['online' => 1]);
        Session::put('message', 'event Activated Successfully !!');
        return Redirect::to('/admin/event');
    }
}
