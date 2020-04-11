<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Location;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Redirect;
use Session;
 session_start();
class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::paginate(10);
        
        return view('admin.locations.index',compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.locations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'en_location' => ['required', 'string', 'max:50'],
            'ar_location' => ['required', 'string', 'max:50'],
            // 'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          //  'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
            
        ]);
        $location_data = [   
            'en' => ['location'=> $request->input('en_location'),],
            'ar' => [ 'location' => $request->input('ar_location')],
            'online' => 1
        ];
         Location::create($location_data);
         Session::put('message', 'location Created Successfully !!');
         return Redirect::to('admin/location/'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $location = Location::find($id);
            return view('admin.locations.edit', compact('location','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $location = Location::findOrFail($id);
        $this->validate($request, [

            'ar_location' => ['required', 'string', 'max:50'],
            'en_location' => ['required', 'string', 'max:50'],
            
        ]);
        $location_data = [
            'en' => ['location'=> $request->input('en_location'), ],
            'ar' => [ 'location' => $request->input('ar_location')],
            
            'online' => 1
        ];
        
        
     
         $location->update($location_data);
         Session::put('message', 'location updated Successfully !!');
         return Redirect::to('admin/location/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $location = Location::find($id)->delete();
        Session::put('message', 'location Deleted Successfully !!');
        return Redirect::to('/admin/location/');
    }
    public function InActive($id)
    {
        $location = Location::find($id)->update(['online' => 0]);
        Session::put('message', 'location Activated Successfully !!');
        return Redirect::to('/admin/location');
    }

    public function Active($id)
    {
        
        $location = Location::find($id)->update(['online' => 1]);
        Session::put('message', 'location Activated Successfully !!');
        return Redirect::to('/admin/location');
    }
}
