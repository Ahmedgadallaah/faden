<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Social;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();
class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socials = Social::paginate(10);

        
        return view('admin.socials.index',compact('socials'));
    }

    public function create()
    {
        return view('admin.socials.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            
            'link' => ['required', 'max:191'],
            //'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $social_data = [
            
            'link' => $request->input('link'),
            'icon' => $request->input('icon'),
            'online' => 1
        ];
        

        
        
     
        
         Social::create($social_data);
         Session::put('message', 'Social link created  Successfully !!');
        
         return Redirect::to('admin/social/'); 
        
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
        
            $social = Social::find($id);
            return view('admin.socials.edit', compact('social','id'));
    
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
        $social = Social::findOrFail($id);

        $this->validate($request, [
            
            'link' => ['required', 'max:191'],
            //'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $social_data = [
            'link' => $request->input('link'),
            'online' => 1
        ];

        $image = $request->has('icon');
        if ($image) {
            @unlink(storage_path('app/social/'.$social->image));
            $request->icon->store('social');
            $imagename = $request->icon->hashName();
            $social_data['icon'] =$request->icon->hashName();
          
        }
        
     
         
         $social->update($social_data);
         Session::put('message', 'Data Updated  Successfully !!');
         // Redirect to the previous page successfully    
         return Redirect::to('admin/social/');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $social = Social::find($id)->delete();
        Session::put('message', 'Social link Deleted  Successfully !!');
        return Redirect::to('/admin/social/'); 
    }
    public function InActive($id)
    {
        $social = Social::find($id)->update(['online' => 0]);
        Session::put('message', 'social Activated Successfully !!');
        return Redirect::to('/admin/social');
    }

    public function Active($id)
    {
        
        $social = Social::find($id)->update(['online' => 1]);
        Session::put('message', 'social Activated Successfully !!');
        return Redirect::to('/admin/social');
    }
}
